<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Employee;
use App\Models\Offer;
use App\Models\PageVisit;
use App\Models\Pricing;
use App\Models\Project;
use App\Models\SendMsg;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function complete(Request $request)
    {
        $completeproject = Project::count();

        $blog = Blog::all();

        $service = Offer::inRandomOrder()->take(3)->get();

        $projects = Project::select('type')
            ->distinct()
            ->inRandomOrder()
            ->take(6)
            ->get();

        $ipaddress = $request->ip();

        $check = PageVisit::where('ip_address',$ipaddress)->first();

        if($check)
        {
            $check->increment('visit_count');
            $check->update([
                'updated_at' => Carbon::now('Asia/Dhaka')
            ]);
        }
        else
            PageVisit::insert([
                'ip_address' => $ipaddress,
                'visit_count' => 1,
                'created_at' => Carbon::now('Asia/Dhaka'),
                'updated_at' => Carbon::now('Asia/Dhaka')
            ]);

        $result = collect();

        foreach ($projects as $project) {
            $singleProject = Project::where('type', $project->type)->first();
            $result->push($singleProject);
        }

        return view('welcome',[
            'complete'=>$completeproject,
            'blog' => $blog,
            'service' => $service,
            'result'=>$result
        ]);
    }

    public function aboutuspage()
    {
        $employee = Employee::all();
        $completeproject = Project::count();
        return view('about',['employee'=>$employee,'complete'=>$completeproject]);
    }

    public function servicepage()
    {
        $service = Offer::inRandomOrder()->take(6)->get();
        return view('service',['service'=>$service]);
    }

    public function projectpage()
    {
        $project = Project::paginate(6);
        return view('project',['result'=>$project]);
    }

    public function singleblogpage($title,$id)
    {
        $blogs = Blog::find($id);

        $title = Blog::find($title);

        $allblogs = Blog::take(3)->get();

        $service = Offer::all();

        return view('single-blog',['id'=>$blogs,'title'=>$title,'all'=>$allblogs,'offers'=>$service]);
    }

    public function blogpage()
    {
        $allblogs = Blog::take(6)->get();
        return view('blog',['blog'=>$allblogs]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function send_msg(Request $request)
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

    public function singleproject($projects)
    {
        $project = Project::find($projects);

        $pack = Pricing::where('projectid',$project->id)
            ->where('packagestype','Basic')->get();
        $pack2 = Pricing::where('projectid',$project->id)
            ->where('packagestype','Standard')->get();
        $pack3 = Pricing::where('projectid',$project->id)
            ->where('packagestype','Premium')->get();

        $proj = Project::take(3)->get();

        return view('projectpage',['id'=>$project, 'proj' =>$proj, 'basic' =>$pack, 'premium'=>$pack3, 'standard'=> $pack2]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'time_spent' => 'required|integer',
        ]);

        $ip = $request->ip();

        $check = PageVisit::where('ip_address',$ip)->first();

        if ($check)
        {
            $check->update([
                'time_spent' => $data['time_spent']
            ]);
        }
        else
            PageVisit::insert([
                'time_spent' => $data['time_spent'],
            ]);
    }
}
