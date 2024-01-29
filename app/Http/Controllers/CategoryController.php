<?php

namespace App\Http\Controllers;

use App\Models\AppSoftwarePricing;
use App\Models\Offer;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /*App Controller Start*/
    public function appshomepage()
    {
        $service = Offer::where('tools','App')->take(3)->get();
        return view('categoryhomepages.apps.apps',['service'=>$service]);
    }

    public function appshome($id)
    {
        $user = User::find($id);
        $service = Offer::where('tools','App')->take(3)->get();
        return view('user.category.apps.apps',['id'=>$user,'service'=>$service]);
    }

    public function appsservice()
    {
        $appservice = Offer::where('tools','App')->get();
        return view('categoryhomepages.apps.appservice',['service'=>$appservice]);
    }

    public function appsservices($id)
    {
        $user = User::find($id);
        $appservice = Offer::where('tools','App')->get();
        return view('user.category.apps.appservice',['id'=>$user,'service'=>$appservice]);
    }

    public function appproject()
    {
        $appservice = Project::where('type','App')->paginate(6);
        return view('categoryhomepages.apps.appproject',['service'=>$appservice]);
    }

    public function appprojects($id)
    {
        $user = User::find($id);
        $appservice = Project::where('type','App')->paginate(6);
        return view('user.category.apps.appproject',['id'=>$user,'service'=>$appservice]);
    }

    public function apppricing()
    {
        $app = AppSoftwarePricing::where('type','App')
            ->where('Service','Pre Build')->get();
        $app2 = AppSoftwarePricing::where('type','App')
            ->where('Service','Customize')->get();
        $app3 = AppSoftwarePricing::where('type','App')
            ->where('Service','Dynamic')->get();
        return view('categoryhomepages.apps.apppricing',[
            'prebuild'=>$app,
            'customize'=>$app2,
            'dynamic'=>$app3
        ]);
    }

    public function apppricings($id)
    {
        $user = User::find($id);
        $app = AppSoftwarePricing::where('type','App')
            ->where('Service','Pre Build')->get();
        $app2 = AppSoftwarePricing::where('type','App')
            ->where('Service','Customize')->get();
        $app3 = AppSoftwarePricing::where('type','App')
            ->where('Service','Dynamic')->get();
        return view('user.category.apps.apppricing',[
            'id'=>$user,
            'prebuild'=>$app,
            'customize'=>$app2,
            'dynamic'=>$app3
        ]);
    }
    /*App Controller End*/

    /*Software Controller Start*/
    public function softwarehompage()
    {
        $service = Offer::where('tools','Software')->take(3)->get();
        return view('categoryhomepages.software.software',['service'=>$service]);
    }

    public function softwarehompages($id)
    {
        $user = User::find($id);
        $service = Offer::where('tools','Software')->take(3)->get();
        return view('user.category.software.software',['id'=>$user,'service'=>$service]);
    }
    public function softwaresservice()
    {
        $appservice = Offer::where('tools','Software')->get();
        return view('categoryhomepages.software.softwareservice',['service'=>$appservice]);
    }

    public function softwaresservices($id)
    {
        $user = User::find($id);
        $appservice = Offer::where('tools','Software')->get();
        return view('user.category.software.softwareservice',['id'=>$user,'service'=>$appservice]);
    }

    public function softwareproject()
    {
        $appservice = Project::where('type','Software')->paginate(6);
        return view('categoryhomepages.software.softwareproject',['service'=>$appservice]);
    }

    public function softwareprojects($id)
    {
        $user = User::find($id);
        $appservice = Project::where('type','Software')->paginate(6);
        return view('user.category.software.softwareproject',['id'=>$user,'service'=>$appservice]);
    }

    public function softwarepricing()
    {
        $software = AppSoftwarePricing::where('type','Software')
            ->where('Service','Pre Build')->get();
        $software2 = AppSoftwarePricing::where('type','Software')
            ->where('Service','Customize')->get();
        $software3 = AppSoftwarePricing::where('type','Software')
            ->where('Service','Dynamic')->get();
        return view('categoryhomepages.software.softwarepricing',[
            'software'=>$software,
            'software2'=>$software2,
            'software3'=>$software3,
        ]);
    }

    public function softwarepricings($id)
    {
        $user = User::find($id);
        $software = AppSoftwarePricing::where('type','Software')
            ->where('Service','Pre Build')->get();
        $software2 = AppSoftwarePricing::where('type','Software')
            ->where('Service','Customize')->get();
        $software3 = AppSoftwarePricing::where('type','Software')
            ->where('Service','Dynamic')->get();
        return view('user.category.software.softwarepricing',['id'=>$user,
            'software'=>$software,
            'software2'=>$software2,
            'software3'=>$software3,
        ]);
    }
    /*Software Controller End*/

    /*Website Controller Start*/
    public function websitehomepage()
    {
        $service = Offer::where('tools','Website')->take(3)->get();
        return view('categoryhomepages.website.website',['service'=>$service]);
    }

    public function websitehomepages($id)
    {
        $user = User::find($id);
        $service = Offer::where('tools','Website')->take(3)->get();
        return view('user.category.website.website',['id'=>$user,'service'=>$service]);
    }

    public function websiteproject()
    {
        $appservice = Project::where('type','Website')->paginate(6);
        return view('categoryhomepages.website.websiteproject',['service'=>$appservice]);
    }

    public function websiteprojects($id)
    {
        $user = User::find($id);
        $appservice = Project::where('type','Website')->paginate(6);
        return view('user.category.website.websiteproject',['id'=>$user,'service'=>$appservice]);
    }
    public function websiteservice()
    {
        $appservice = Offer::where('tools','Website')->get();
        return view('categoryhomepages.website.websiteservice',['service'=>$appservice]);
    }

    public function websiteservices($id)
    {
        $user = User::find($id);
        $appservice = Offer::where('tools','Website')->get();
        return view('user.category.website.websiteservice',['id'=>$user,'service'=>$appservice]);
    }

    public function websitepricing()
    {
        return view('categoryhomepages.website.websitepricing');
    }

    public function websitepricings($id)
    {
        $user = User::find($id);
        return view('user.category.website.websitepricing',['id'=>$user]);
    }
    /*Website Controller End*/

    /*UI-UX Controller Start*/
    public function uiuxhomepage()
    {
        return view('categoryhomepages.ui-ux.ui-ux');
    }
    public function uiuxhomepages($id)
    {
        $user = User::find($id);
        return view('user.category.ui-ux.ui-ux',['id'=>$user]);
    }

    public function uiuxproject()
    {
        $appservice = Project::where('type','UI/UX')->paginate(6);
        return view('categoryhomepages.ui-ux.ui-uxproject',['service'=>$appservice]);
    }

    public function uiuxprojects($id)
    {
        $user = User::find($id);
        $appservice = Project::where('type','UI/UX')->paginate(6);
        return view('user.category.ui-ux.ui-uxproject',['id'=>$user,'service'=>$appservice]);
    }

    public function uiuxservice()
    {
        $appservice = Offer::where('tools','UI/UX')->get();
        return view('categoryhomepages.ui-ux.ui-uxservice',['service'=>$appservice]);
    }

    public function uiuxservices($id)
    {
        $user = User::find($id);
        $appservice = Offer::where('tools','UI/UX')->get();
        return view('user.category.ui-ux.ui-uxservice',['id'=>$user,'service'=>$appservice]);
    }
    public function uiuxpricing()
    {
        return view('categoryhomepages.ui-ux.ui-uxpricing');
    }

    public function uiuxpricings($id)
    {
        $user = User::find($id);
        return view('user.category.ui-ux.ui-uxpricing',['id'=>$user]);
    }
    /*UI-UX Controller End*/

    /*Graphic Design Controller Start*/
    public function graphicdesignhomepage()
    {
        return view('categoryhomepages.graphic-design.graphic-design');
    }

    public function graphicdesignhomepages($id)
    {
        $user = User::find($id);
        return view('user.category.graphic-design.graphic-design',['id'=>$user]);
    }

    public function graphicdesignservice()
    {
        $appservice = Offer::where('tools','Graphic-Design')->get();
        return view('categoryhomepages.graphic-design.graphic-designservice',['service'=>$appservice]);
    }

    public function graphicdesignservices($id)
    {
        $user = User::find($id);
        $appservice = Offer::where('tools','Graphic-Design')->get();
        return view('user.category.graphic-design.graphic-designservice',['id'=>$user,'service'=>$appservice]);
    }

    public function graphicdesignpricing()
    {
        return view('categoryhomepages.graphic-design.graphic-designpricing');
    }

    public function graphicdesignpricings($id)
    {
        $user = User::find($id);
        return view('user.category.graphic-design.graphic-designpricing',['id'=>$user]);
    }

    public function graphicdesignproject()
    {
        $appservice = Project::where('type','Graphic-Design')->paginate(6);
        return view('categoryhomepages.graphic-design.graphic-designproject',['service'=>$appservice]);
    }

    public function graphicdesignprojects($id)
    {
        $user = User::find($id);
        $appservice = Project::where('type','Graphic-Design')->paginate(6);
        return view('user.category.graphic-design.graphic-designproject',['id'=>$user,'service'=>$appservice]);
    }
    /*Graphic Design Controller End*/
}
