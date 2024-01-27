<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Offer;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Events\UserRegistered;

class UserRegisterandLogin extends Controller
{
    public function registers(Request $request)
    {
        $password = $request->input('password');
        $confirm = $request->input('confirm-password');

        $check = User::where('email',$request->input('email'))->first();

        if ($password !== $confirm)
        {
            return redirect()->back()->with('error','Password dosenot match');
        }
        else{
            if($check)
            {
                return redirect()->back()->with('error','Email Already Exists');
            }
            else{
                $hash = Hash::make($password);
                $user = User::insert([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => $hash
                ]);




                return redirect()->back();
            }
        }
    }

    public function logged(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->route('homepage', ['id' => $user->id]);
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    public function dashboard($id,Request $request)
    {
        $user = User::find($id);
        $users = User::where('id',$user->id)->
            where('welcome_message_sent','false')->first();
        if($users){
            $users->update(['welcome_message_sent'=>'true']);
            event(new UserRegistered($user->id));
        }
        $ipaddress = $request->ip();

        $check = User::where('id',$user->id)
            ->where('ip_address',$ipaddress)->first();

        if ($check){
            $check->increment('visit_count');
            User::where('id',$user->id)->update([
                'updated_at' => Carbon::now('Asia/Dhaka')
            ]);
        }
        else{
            User::where('id',$user->id)
                ->update([
                    'ip_address'=>$ipaddress,
                    'visit_count' => 1
                    ]);
        }
        $completeproject = Project::count();

        $blog = Blog::all();

        $service = Offer::inRandomOrder()->take(3)->get();

        $projects = Project::select('type')
            ->distinct()
            ->inRandomOrder()
            ->take(6)
            ->get();


        $result = collect();

        foreach ($projects as $project) {
            $singleProject = Project::where('type', $project->type)->first();
            $result->push($singleProject);
        }

        return view('user.homepage',[
            'id'=>$user,
            'complete'=>$completeproject,
            'blog' => $blog,
            'service' => $service,
            'result'=>$result]);
    }

    public function logout(Request $request)
    {
        Auth::guard('user')->logout();

        Session::flush();

        return redirect()->route('home');

    }

    public function showResetForm(Request $request, $token)
    {
        $email = $request->email;
        return view('reset')->with(
            ['token' => $token, 'email' => $email]
        );
    }
}
