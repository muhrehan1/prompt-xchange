<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $data = ['title' =>"Home | Prompt Xchange"];
        return view('front.home' ,$data);
    }
    public function about(){
         $data = ['title' =>"About us | Prompt Xchange"];
        return view('front.aboutus' ,$data);
    }
    public function contactus(){
         $data = ['title' =>"Contact us | Prompt Xchange"];
        return view('front.contact' ,$data);
    }
    public function pricing(){
         $data = ['title' =>"Pricing | Prompt Xchange"];
        return view('front.pricing' ,$data);
    }
     public function discover(){
          $data = ['title' =>"Discover | Prompt Xchange"];
        return view('front.discover',$data);
    }
    public function hire(){
         $data = ['title' =>"Hire | Prompt Xchange"];
        return view('front.hire',$data);
    }
    public function profile(){
         $data = ['title' =>"Profile | Prompt Xchange"];
        return view('front.profile',$data);
    }
     public function blogs(){
          $data = ['title' =>"Blogs | Prompt Xchange"];
        return view('front.blogs',$data);
    }
    public function blogs_details(){
         $data = ['title' =>"Single Blog | Prompt Xchange"];
        return view('front.blog-details',$data);
    }
      public function create(){
        $data = ['title' =>"Create | Prompt Xchange"];
        return view('front.create',$data);
    }
}
