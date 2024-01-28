<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AppSoftwarePricing;
use App\Models\Blog;
use App\Models\Employee;
use App\Models\Offer;
use App\Models\PageVisit;
use App\Models\Pricing;
use App\Models\Project;
use App\Models\SendMsg;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboard extends Controller
{
    public function showDashboard($id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
            return view('admin.dashboard', ['id' => $user]);
        }
    }

    public function addproject(Request $request, $id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {

            $project = Project::orderBy('id','desc')->first();
            return view('admin.addproject', ['id' => $user, 'project'=>$project]);
        }
    }

    public function projectupload(Request $request)
    {
        $projectid = $request->input('projectid');
        $project = $request->input('project');
        $description = $request->input('description');
        $price = $request->input('price');
        $url = $request->input('url');
        $mode = $request->input('mode');
        $type = $request->input('type');
        $pic = $request->file('pic');
        $now = Carbon::now('Asia/Dhaka')->format('Y-m-d H:i:s');

        if ($pic){
            $originalname = $pic->getClientOriginalName();
            $path = $pic->storeAs('public/project', $originalname);
            $path = str_replace('public/', '', $path);

            Project::insert([
                'name'=>$project,
                'description'=>$description,
                'price'=>$price,
                'url'=>$url,
                'mode'=>$mode,
                'type'=>$type,
                'image'=>$path,
                'created_at'=>$now,
                'updated_at' => $now
            ]);

            return redirect()->back();
        }
    }

    public function projects(Request $request, $id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
            $projects = Project::all();
            return view('admin.projects', ['id' => $user,'project'=>$projects]);
        }
    }

    public function editproject($id, $project)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
            $projects = Project::find($project);
            return view('admin.editproject', ['id' => $user,'project'=>$projects]);
        }
    }
    public function editproj(Request $request)
    {
        $id = $request->input('id');
        $project = $request->input('project');
        $description = $request->input('description');
        $price = $request->input('price');
        $url = $request->input('url');
        $mode = $request->input('mode');
        $type = $request->input('type');
        $pic = $request->file('pic');
        $now = Carbon::now('Asia/Dhaka')->format('Y-m-d H:i:s');

        if ($pic) {
            $originalname = $pic->getClientOriginalName();
            $path = $pic->storeAs('public/project', $originalname);
            $path = str_replace('public/', '', $path);

            Project::where('id',$id)->update([
                'image'=>$path,
                'updated_at' => $now
            ]);
        }
            Project::where('id',$id)->update([
                'name'=>$project,
                'description'=>$description,
                'price'=>$price,
                'url'=>$url,
                'mode'=>$mode,
                'type'=>$type,
                'updated_at' => $now
            ]);

            return redirect()->back()->with('success','Successfully Added!');
        }

        public function addemployee($id)
        {
            $user = Auth::guard('admin')->user();
            if ($user->id == $id) {
                return view('admin.addemployee', ['id' => $user]);
            }
        }

        public function employeeupload(Request $request)
        {
            $name = $request->input('employeer');
            $designation = $request->input('designation');
            $department = $request->input('department');
            $complete = $request->input('complete');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $pic = $request->file('pic');
            $now = Carbon::now('Asia/Dhaka')->format('Y-m-d H:i:s');

            if ($pic){
                $originalname = $pic->getClientOriginalName();
                $path = $pic->storeAs('public/employee', $originalname);
                $path = str_replace('public/', '', $path);

                Employee::insert([
                    'Name'=>$name,
                    'Designation'=>$designation,
                    'Department'=>$department,
                    'Complete_Project'=>$complete,
                    'email'=>$email,
                    'phone'=>$phone,
                    'pic'=>$path,
                    'created_at'=>$now,
                    'updated_at' => $now
                ]);

                return redirect()->back()->with('success','Successfully Added!');
            }
        }

        public function employeelist($id)
        {
            $user = Auth::guard('admin')->user();
            if ($user->id == $id) {
                $projects = Employee::all();
                return view('admin.employees', ['id' => $user,'project'=>$projects]);
            }
        }

        public function editemployee($id, $employee)
        {
            $user = Auth::guard('admin')->user();
            if ($user->id == $id) {
                $projects = Employee::find($employee);
                return view('admin.editemployee', ['id' => $user,'project'=>$projects]);
            }
        }

        public function editemp(Request $request)
        {
            $id = $request->input('id');
            $project = $request->input('project');
            $description = $request->input('description');
            $price = $request->input('price');
            $url = $request->input('url');
            $mode = $request->input('email');
            $type = $request->input('phone');
            $pic = $request->file('pic');
            $now = Carbon::now('Asia/Dhaka')->format('Y-m-d H:i:s');

            if ($pic) {
                $originalname = $pic->getClientOriginalName();
                $path = $pic->storeAs('public/employee', $originalname);
                $path = str_replace('public/', '', $path);

                Employee::where('id',$id)->update([
                    'pic'=>$path,
                    'updated_at' => $now
                ]);
            }
            Employee::where('id',$id)->update([
                'Name'=>$project,
                'Designation'=>$description,
                'Department'=>$price,
                'Complete_Project'=>$url,
                'email'=>$mode,
                'phone'=>$type,
                'updated_at' => $now
            ]);

            return redirect()->back()->with('success','Successfully Added!');
        }

        public function blogpage($id)
        {
            $user = Auth::guard('admin')->user();
            if ($user->id == $id) {
                $emplyoee = Employee::all();
                return view('admin.blog', ['id' => $user,'employee'=>$emplyoee]);
            }
        }

    public function offerpage($id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
            $offers = Offer::all();
            return view('admin.offerservice', ['id' => $user,'all'=>$offers]);
        }
    }

    public function updateoffer(Request $request)
    {
        Offer::where('id',$request->input('id'))->update([
            'description'=>$request->input('description'),
            'updated_at'=>Carbon::now('Asia/Dhaka')
        ]);

        return redirect()->back();
    }

    public function uploadoffer(Request $request)
    {
        $description = $request->input('description');
        $type = $request->input('type');
        $pic = $request->file('pic');
        $now = Carbon::now('Asia/Dhaka')->format('Y-m-d H:i:s');

        if($pic){
            $originalname = $pic->getClientOriginalName();
            $path = $pic->storeAs('public/offer', $originalname);
            $path = str_replace('public/', '', $path);

            Offer::insert([
                'description'=>$description,
                'tools'=>$type,
                'image'=>$path,
                'created_at' => $now,
                'updated_at' => $now
            ]);

            return redirect()->back()->with('success', 'Successfully Added');
        }
    }

    public function bloginsert(Request $request)
    {
        $title = $request->input('project');
        $blog = $request->input('blog');
        $pic2 = $request->file('blogpic');
        $developer = $request->input('delopername');
        $desgination = $request->input('designation');
        $post = $request->input('description');
        $pic = $request->file('pic');

        if ($pic && $pic2)
        {
            $originalname = $pic->getClientOriginalName();
            $path = $pic->storeAs('public/blog/writer', $originalname);
            $path = str_replace('public/', '', $path);
            $originalname2 = $pic2->getClientOriginalName();
            $path2 = $pic2->storeAs('public/blog', $originalname2);
            $path2 = str_replace('public/', '', $path2);

            Blog::insert([
                'title' =>$title,
                'description' =>$blog,
                'image'=>$path2,
                'write'=>$developer,
                'writer_image' =>$path,
                'post' => $desgination,
                'writer_desccription'=>$post,
                'created_at'=> Carbon::now('Asia/Dhaka'),
                'updated_at' =>  Carbon::now('Asia/Dhaka')
            ]);
        }

        return redirect()->back();
    }

    public function clientlist($id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
            $client = User::all();
            return view('admin.clientlist', ['id' => $user,'client'=>$client]);
        }
    }

    public function clientmsg($id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
            $msg = SendMsg::all();
            return view('admin.clientmsg', ['id' => $user,'msg' => $msg]);
        }
    }

    public function calender($id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
            return view('admin.calender', ['id' => $user]);
        }
    }

    public function editblog($id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
            $blogs = Blog::all();
            return view('admin.editblog', ['id' => $user, 'blog' => $blogs]);
        }
    }

    public function edits(Request $request)
    {
        Blog::where('id',$request->input('id'))
            ->update([
                'title' => $request->input('name'),
                'description' => $request->input('blog'),
                'write' => $request->input('write'),
                'writer_desccription' => $request->input('desccription'),
                'updated_at' => Carbon::now('Asia/Dhaka')
            ]);
        return redirect()->back();
    }

    public function pricingpages($id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
            return view('admin.pricing', ['id' => $user]);
        }
    }

    public function apppages($id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
            return view('admin.appsoftpricing', ['id' => $user]);
        }
    }

    public function priceinsert(Request $request)
    {
        Pricing::insert([
            'type'=> $request->input('details'),
            'maintainance' =>$request->input('maintenance'),
            'storage'=>$request->input('storage'),
            'peroff'=>$request->input('percentage'),
            'development'=>$request->input('development'),
            'UI_UX'=>$request->input('ui/ux'),
            'logo'=>$request->input('logo'),
            'business_card'=>$request->input('card'),
            'training_time'=>$request->input('training'),
            'revision'=>$request->input('revision'),
            'project_manager'=>$request->input('manager'),
            'edit_request'=>$request->input('edit'),
            'technical'=>$request->input('planning'),
            'development_request'=>$request->input('request'),
            'security'=>$request->input('security'),
            'hosting'=>$request->input('setup'),
            'sqa'=>$request->input('sqa'),
        ]);

        return redirect()->back();
    }

    public function appsoftwareprice(Request $request)
    {
        AppSoftwarePricing::insert([
            'type'=>$request->input('type'),
            'Service'=>$request->input('service'),
            'Validity'=>$request->input('validity'),
            'Updateable'=>$request->input('updateable'),
            'Protection'=>$request->input('protection'),
            'Revision'=>$request->input('revision'),
            'Administration_Setup'=>$request->input('administration'),
            'Responsive_UI_UX'=>$request->input('responsive'),
            'A_B_Testing'=>$request->input('ab_testing'),
            'Training_Test'=>$request->input('training'),
            'Project_Manager'=>$request->input('project'),
            'Website_Integration'=>$request->input('website'),
            'Platform_Support'=>$request->input('platform'),
            'Maintenance_Charge'=>$request->input('maintenance'),
            'Monthly_Packages'=>$request->input('monthly'),
            'Storage_Charge'=>$request->input('storage'),
            'Offer_Percentage'=>$request->input('offer'),
        ]);

        return redirect()->back();
    }

    public function visitor($id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
           $visitor = PageVisit::all();
           $total = PageVisit::count();
            return view('admin.visitorlist', ['id'=>$user,'total'=>$total,'visit'=>$visitor]);
        }
    }

    public function editpricing($id)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id == $id) {
            $all = Pricing::all();
            $app = AppSoftwarePricing::all();
            return view('admin.editprice', ['id'=>$user,'price'=>$all, 'app'=>$app]);
        }
    }

    public function basicupdate(Request $request)
    {
        Pricing::where('id',$request->input('id'))->update([
            'maintainance'=>$request->input('maintainance'),
            'storage'=>$request->input('storage'),
            'peroff'=>$request->input('peroff'),
            'development'=>$request->input('development'),
            'UI_UX'=>$request->input('UI_UX'),
            'logo'=>$request->input('logo'),
            'business_card'=>$request->input('business_card'),
            'training_time'=>$request->input('training_time'),
            'revision'=>$request->input('revision'),
            'project_manager'=>$request->input('project_manager'),
            'edit_request'=>$request->input('edit_request'),
            'technical'=>$request->input('technical'),
            'development_request'=>$request->input('development_request'),
            'security'=>$request->input('security'),
            'hosting'=>$request->input('hosting'),
            'sqa'=>$request->input('sqa'),
        ]);

        return redirect()->back();
    }

    public function standaradsupdate(Request $request)
    {
        AppSoftwarePricing::where('id',$request->input('id'))->update([
            'Maintenance_Charge'=>$request->input('Maintenance_Charge'),
            'Storage_Charge'=>$request->input('Storage_Charge'),
            'Monthly_Packages'=>$request->input('Monthly_Packages'),
            'Offer_Percentage'=>$request->input('Offer_Percentage'),
            'Service'=>$request->input('Service'),
            'Validity'=>$request->input('Validity'),
            'Updateable'=>$request->input('Updateable'),
            'Protection'=>$request->input('Protection'),
            'Revision'=>$request->input('Revision'),
            'Administration_Setup'=>$request->input('Administration_Setup'),
            'Responsive_UI_UX'=>$request->input('Responsive_UI_UX'),
            'A_B_Testing'=>$request->input('A_B_Testing'),
            'Training_Test'=>$request->input('Training_Test'),
            'Project_Manager'=>$request->input('Project_Manager'),
            'Website_Integration'=>$request->input('Website_Integration'),
            'Platform_Support'=>$request->input('Platform_Support'),
        ]);

        return redirect()->back();
    }

    public function goldupdate(Request $request)
    {
        AppSoftwarePricing::where('id',$request->input('id'))->update([
            'Maintenance_Charge'=>$request->input('Maintenance_Charge'),
            'Storage_Charge'=>$request->input('Storage_Charge'),
            'Monthly_Packages'=>$request->input('Monthly_Packages'),
            'Offer_Percentage'=>$request->input('Offer_Percentage'),
            'Service'=>$request->input('Service'),
            'Validity'=>$request->input('Validity'),
            'Updateable'=>$request->input('Updateable'),
            'Protection'=>$request->input('Protection'),
            'Revision'=>$request->input('Revision'),
            'Administration_Setup'=>$request->input('Administration_Setup'),
            'Responsive_UI_UX'=>$request->input('Responsive_UI_UX'),
            'A_B_Testing'=>$request->input('A_B_Testing'),
            'Training_Test'=>$request->input('Training_Test'),
            'Project_Manager'=>$request->input('Project_Manager'),
            'Website_Integration'=>$request->input('Website_Integration'),
            'Platform_Support'=>$request->input('Platform_Support'),
        ]);

        return redirect()->back();
    }
}
