<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Employee;
use App\Models\Offer;
use App\Models\Pricing;
use App\Models\Project;
use App\Models\SendMsg;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserDashbaord extends Controller
{
    public function aboutuspages($id)
    {
        $user = User::find($id);
        $employee = Employee::all();
        $completeproject = Project::count();
        return view('user.about',['id'=>$user,'employee'=>$employee,'complete'=>$completeproject]);
    }

    public function servicepage($id)
    {
        $user = User::find($id);
        $service = Offer::inRandomOrder()->take(6)->get();
        return view('user.servicepage',['id'=>$user,'service'=>$service]);
    }

    public function projectpages($id)
    {
        $user = User::find($id);
        $project = Project::paginate(6);
        return view('user.project',['result'=>$project,'id'=>$user]);
    }


    public function blogpage($id)
    {
        $user = User::find($id);
        $allblogs = Blog::take(6)->get();
        return view('user.blog',['id'=>$user,'blog'=>$allblogs]);
    }

    public function singleprojects($projects, $user)
    {
        $users = User::find($user);

        $project = Project::find($projects);

        $pack = Pricing::where('type','Basic')->get();
        $pack2 = Pricing::where('type','Standard')->get();
        $pack3 = Pricing::where('type','Premium')->get();

        $proj = Project::take(3)->get();


        return view('user.singleproj',['id'=>$project, 'user'=>$users, 'proj' =>$proj, 'basic' =>$pack, 'premium'=>$pack3, 'standard'=> $pack2]);
    }

    public function singleblogpage($users, $title, $id)
    {
        $user = User::find($users);
        $blog = Blog::find($id);

        $title = Blog::where('title', $title)->first();

        $allblogs = Blog::take(3)->get();
        $service = Offer::all();

        return view('user.singleblogpages', ['users' => $user, 'title' => $title, 'ids' => $blog, 'all' => $allblogs, 'offers' => $service]);
    }


    public function contact($id)
    {
        $id = User::find($id);
        return view('user.contact',['id'=>$id]);
    }

    public function send_msgs(Request $request)
    {
        SendMsg::insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('msg'),
            'created_at' => Carbon::now('Asia/Dhaka')
        ]);

        return redirect()->back();
    }

    public function pricing($id)
    {
        $user = User::find($id);
        $pack = Pricing::where('type','Basic')->get();
        $pack2 = Pricing::where('type','Standard')->get();
        $pack3 = Pricing::where('type','Premium')->get();
        return view('user.pricings',['id'=>$user,'basic' =>$pack, 'premium'=>$pack3, 'standard'=> $pack2]);
    }


}
