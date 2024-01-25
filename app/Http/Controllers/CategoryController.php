<?php

namespace App\Http\Controllers;

use App\Models\AppSoftwarePricing;
use App\Models\Offer;
use App\Models\Project;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /*App Controller Start*/
    public function appshomepage()
    {
        return view('categoryhomepages.apps.apps');
    }

    public function appsservice()
    {
        $appservice = Offer::where('tools','App')->get();
        return view('categoryhomepages.apps.appservice',['service'=>$appservice]);
    }

    public function appproject()
    {
        $appservice = Project::where('type','App')->paginate(6);
        return view('categoryhomepages.apps.appproject',['service'=>$appservice]);
    }

    public function apppricing()
    {
        $app = AppSoftwarePricing::where('type','App')
            ->where('Service','Pre Build')->get();
        return view('categoryhomepages.apps.apppricing',['prebuild'=>$app]);
    }
    /*App Controller End*/

    /*Software Controller Start*/
    public function softwarehompage()
    {
        return view('categoryhomepages.software.software');
    }

    public function softwaresservice()
    {
        $appservice = Offer::where('tools','Software')->get();
        return view('categoryhomepages.software.softwareservice',['service'=>$appservice]);
    }

    public function softwareproject()
    {
        $appservice = Project::where('type','Software')->paginate(6);
        return view('categoryhomepages.software.softwareproject',['service'=>$appservice]);
    }

    public function softwarepricing()
    {
        return view('categoryhomepages.software.softwarepricing');
    }
    /*Software Controller End*/

    /*Website Controller Start*/
    public function websitehomepage()
    {
        return view('categoryhomepages.website.website');
    }

    public function websiteproject()
    {
        $appservice = Project::where('type','Website')->paginate(6);
        return view('categoryhomepages.website.websiteproject',['service'=>$appservice]);
    }

    public function websiteservice()
    {
        $appservice = Offer::where('tools','Website')->get();
        return view('categoryhomepages.website.websiteservice',['service'=>$appservice]);
    }
    public function websitepricing()
    {
        return view('categoryhomepages.website.websitepricing');
    }
    /*Website Controller End*/

    /*UI-UX Controller Start*/
    public function uiuxhomepage()
    {
        return view('categoryhomepages.ui-ux.ui-ux');
    }

    public function uiuxproject()
    {
        $appservice = Project::where('type','UI/UX')->paginate(6);
        return view('categoryhomepages.ui-ux.ui-uxproject',['service'=>$appservice]);
    }

    public function uiuxservice()
    {
        $appservice = Offer::where('tools','UI/UX')->get();
        return view('categoryhomepages.ui-ux.ui-uxservice',['service'=>$appservice]);
    }
    public function uiuxpricing()
    {
        return view('categoryhomepages.ui-ux.ui-uxpricing');
    }
    /*UI-UX Controller End*/

    /*Graphic Design Controller Start*/
    public function graphicdesignhomepage()
    {
        return view('categoryhomepages.graphic-design.graphic-design');
    }

    public function graphicdesignservice()
    {
        $appservice = Offer::where('tools','Graphic-Design')->get();
        return view('categoryhomepages.graphic-design.graphic-designservice',['service'=>$appservice]);
    }

    public function graphicdesignpricing()
    {
        return view('categoryhomepages.graphic-design.graphic-designpricing');
    }

    public function graphicdesignproject()
    {
        $appservice = Project::where('type','Graphic-Design')->paginate(6);
        return view('categoryhomepages.graphic-design.graphic-designproject',['service'=>$appservice]);
    }
    /*Graphic Design Controller End*/
}
