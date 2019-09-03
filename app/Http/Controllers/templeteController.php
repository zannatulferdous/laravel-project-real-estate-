<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Blog;
use App\Contact;
use App\Property;
use DB;
use Illuminate\Http\Request;

class templeteController extends Controller
{

public function index(){
    $properties=DB::table('properties')
        ->where('publication_status',1)
//        ->join('categories','properties.category_id','=','categories.id')
//        ->select('properties.*','categories.Category_name')
        ->take(9)
        ->get();
    $agents=Agent::where('publication_status',1)
        ->take(3)
        ->get();
    $blogs=Blog::where('publication_status',1)
        ->take(3)
        ->get();
    return view('front-end.home.home',[
        'properties'=>$properties,
        'agents'=>$agents,
        'blogs'=>$blogs
    ]);


}

    public function rent(){
        $properties=Property::where('publication_status',1)
        ->where('category_id',1)
            ->take(6)
            ->get();
        $blogs=Blog::where('publication_status',1)
            ->take(3)
            ->get();
        return view('front-end.rent.rent',[
            'properties'=>$properties,
            'blogs'=>$blogs
        ]);
    }
    public function buy(){
        $properties=Property::where('publication_status',1)
            ->where('category_id',2)
            ->take(6)
            ->get();
        $blogs=Blog::where('publication_status',1)
            ->take(3)
            ->get();
        return view('front-end.buy.buy',[
            'properties'=>$properties,
            'blogs'=>$blogs
        ]);
    }
    public function propertyDetails($id){
        $propertyDetails=DB::table('properties')->find($id);
        return view('front-end.property.property-details',[
            'propertyDetails'=>$propertyDetails
        ]);
    }

    public function about(){
        $agents=Agent::where('publication_status',1)
            ->take(3)
            ->get();
        $blogs=Blog::where('publication_status',1)
            ->take(3)
            ->get();
        return view('front-end.about.about',[
            'agents'=>$agents,
            'blogs'=>$blogs
        ]);
    }
    public function contact(){
        $agents=Agent::where('publication_status',1)
            ->take(3)
            ->get();
        return view('front-end.contact.contact',[
            'agents'=>$agents,
        ]);

    }
}

