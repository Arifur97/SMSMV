<?php

namespace App\Http\Controllers;

use App\Country;
use App\Operator;
use App\Footer;
use App\About;
use App\Feature;
use App\Join;
use App\Contact;
use App\Developer;
use App\DFeatureOneBG;
use App\DFeatureOne;
use App\DFeatureTwo;
use App\Package;
use App\PackageTitle;
use App\Support;
use App\Term;
use App\testSMS;
use App\ServiceTitle;
use App\Service;
use App\ChooseTitle;
use App\Choose;
use App\ClientTitle;
use App\Client;
use App\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('front.home.home',[
            'join' => Join::first(),
            'footer' => Footer::first(),
            'sliders' => Slider::where('status', 1)->orderBy('id', 'desc')->take(4)->get(),
            'serviceTitle' => ServiceTitle::first(),
            'services' => Service::where('status', 1)->orderBy('id', 'desc')->take(4)->get(),
            'chooseTitle' => ChooseTitle::first(),
            'chooses' => Choose::where('status', 1)->orderBy('id', 'desc')->take(4)->get(),
            'clientTitle' => ClientTitle::first(),
            'clients' => Client::where('status', 1)->orderBy('id', 'desc')->skip(1)->take(3)->get(),
            'clientOnes' => Client::where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
        ]);
    }

    public function service(){
        return view('front.service.service',[
            'join' => Join::first(),
            'footer' => Footer::first(),
            'serviceTitle' => ServiceTitle::first(),
            'services' => Service::where('status', 1)->orderBy('id', 'desc')->take(8)->get(),
        ]);
    }

    public function about(){
        return view('front.about.about',[
            'join' => Join::first(),
            'footer' => Footer::first(),
            'about' => About::first(),
            'features' => Feature::where('status', 1)->orderBy('id', 'desc')->take(4)->get()
        ]);
    }

    public function developer(){
        return view('front.developer.developer',[
            'join' => Join::first(),
            'footer' => Footer::first(),
            'developer' => Developer::first(),
            'developerBg' => DFeatureOneBG::first(),
            'featureOnes' => DFeatureOne::where('status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'featureTwos' => DFeatureTwo::where('status', 1)->orderBy('id', 'desc')->take(6)->get(),
        ]);
    }

    public function package(){
        return view('front.package.package',[
            'countries' => Country::all(),
            'join' => Join::first(),
            'footer' => Footer::first(),
            'features' => Feature::where('status', 1)->orderBy('id', 'desc')->take(4)->get(),
        ]);
    }
    public function getOperator(Request $request){
        $id = $request->get('id');
        $operators = Operator::where('country_id', $id)->where('status', 1)->get();
        $result = array();
        $result['operators'] = $operators;
        return $result;
    }
    public function getRate(Request $request){
        $id = $request->get('id');
        $operators = Operator::find($id);
        $result = array();
        $result['operators'] = $operators;
        return $result;
    }

    public function pricing(){
        return view('front.pricing.pricing',[
            'join' => Join::first(),
            'footer' => Footer::first(),
            'packageTitle' => PackageTitle::first(),
            'packages' => Package::where('status', 1)->orderBy('id', 'desc')->take(6)->get()
        ]);
    }
    public function testSMS(){
        return view('front.testSMS.testSMS',[
            'join' => Join::first(),
            'footer' => Footer::first(),
            'test' => testSMS::first()
        ]);
    }
    public function contact(){
        return view('front.contact.contact',[
            'join' => Join::first(),
            'footer' => Footer::first(),
            'contact' => Contact::first()
        ]);
    }

    public function term(){
        return view('front.term.term',[
            'join' => Join::first(),
            'footer' => Footer::first(),
            'terms' => Term::where('status', 1)->orderBy('id', 'desc')->get()
        ]);
    }

    public function support(){
        return view('front.support.support',[
            'join' => Join::first(),
            'footer' => Footer::first(),
            'supports' => Support::where('status', 1)->orderBy('id', 'desc')->get()
        ]);
    }
}
