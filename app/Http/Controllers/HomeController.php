<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Title;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Quote;
use App\Models\Homefaq;
use App\Models\Testimonial;
use App\Models\Homebanner;


use App\Models\HomeModify;

class HomeController extends Controller
{



    public function index() 
    {
        $testimonial = Testimonial::all();
        $homebanner = Homebanner::all();
        $faq = Homefaq::all();
        $bloglist = Blog::latest()->limit(3)->get();
        $servicelist = Service::latest()->limit(4)->get();
        $homepage = Title::first();
        $seo_data['seo_title'] = $homepage->seo_title_home;
        $seo_data['seo_description'] = $homepage->seo_des_home;
        $seo_data['keywords'] = $homepage->seo_key_home;
        $canocial ='https://codepin.org';
        return view('home',compact('seo_data','servicelist','canocial','bloglist','faq','testimonial','homebanner'));
    }

    public function about()
    {
        $homepage = Title::first();
        $seo_data['seo_title'] = $homepage->seo_title_about;
        $seo_data['seo_description'] = $homepage->seo_des_about;
        $seo_data['keywords'] = $homepage->seo_key_about;
        $banner['banner'] = $homepage->image_about;
        $canocial ='https://codepin.org/about';

        return view('about',compact('seo_data','canocial','banner'));
    }

    public function services($slug=null)
    {
        $homepage = Title::select('seo_title_services','seo_des_services','seo_key_services','image_services')->first();
        if($slug!=null){
            $servicesCategory = ServiceCategory::where('slug',$slug)->first();
            $servicesList = Service::latest()->with('serviceCategory')->where('service_category_id',$servicesCategory->id)->paginate(6);
            $seo_data['seo_title'] =$servicesCategory->seo_title;
            $seo_data['seo_description'] =$servicesCategory->seo_description;
           $seo_data['keywords'] =$servicesCategory->seo_keyword;
           $banner['banner'] = 'https://img.freepik.com/premium-vector/picture-people-working-computer-with-man-working-computer_1135235-237.jpg?w=740';
           $canocial ='https://codepin.org/services/'.$slug;

         

        }else{
            $servicesList = Service::latest()->with('serviceCategory')->paginate(6);
            $seo_data['seo_title'] =$homepage->seo_title_services;
            $seo_data['seo_description'] =$homepage->seo_des_services;
            $seo_data['keywords'] =$homepage->seo_key_services;
            $banner['banner'] = $homepage->image_services;
            $canocial ='https://codepin.org/services';
         
         }
        return view('services',compact('seo_data','servicesList','canocial','banner'));
    }

    public function servicesDetails($slug=null)
    {
        $testimonial = Testimonial::all();
        $servicedetails = ServiceCategory::withcount('services')->get();
        $servicelist = Service::latest()->limit(4)->get();
        $servicesData = Service::with('serviceCategory')->where('slug',$slug)->first();
        $seo_data['seo_title'] =$servicesData->seo_title;
        $seo_data['seo_description'] =$servicesData->seo_description;
       $seo_data['keywords'] =$servicesData->seo_keyword;
       $canocial ='https://codepin.org/service-details/'.$slug;
        return view('service-details',compact('seo_data','servicesData','servicelist','canocial','servicedetails','testimonial'));
    }

    public function blogs($slug=null)
    {
        $homepage = Title::select('seo_title_blog','seo_des_blog','seo_key_blog','image_blog')->first();
        $title = 'All blog Page';
        if($slug!=null){
            $blogCategory = BlogCategory::where('slug',$slug)->first();
            $blogList = Blog::latest()->with('blogCategory')->where('category_id',$blogCategory->id)->paginate(4);
            $seo_data['seo_title'] =$blogCategory->seo_title;
            $seo_data['seo_description'] =$blogCategory->seo_description;
           $seo_data['keywords'] =$blogCategory->seo_keyword;
           $banner['banner'] = 'https://img.freepik.com/premium-vector/picture-people-working-computer-with-man-working-computer_1135235-237.jpg?w=740';
           $canocial ='https://codepin.org/blogs/'.$slug;

         

        }else{
            $blogList = Blog::latest()->with('blogCategory')->paginate(4);
            $seo_data['seo_title'] =$homepage->seo_title_blog;
            $seo_data['seo_description'] =$homepage->seo_des_blog;
            $seo_data['keywords'] =$homepage->seo_key_blog;
            $banner['banner'] = $homepage->image_blog;
            $canocial ='https://codepin.org/blogs';
         
         }
        return view('blogs',compact('title','blogList','banner','seo_data','canocial',));
    }

    public function blogDetails($slug=null)
    {
        $title = 'Blog details';
      
        $blogCategory = BlogCategory::withcount('blogs')->get(); // Filter by blog Category
        $blog = Blog::latest()->limit(3)->get();
        $recentBlog = Blog::latest()->limit(5)->get();
        $blogData = Blog::with('blogCategory')->where('slug',$slug)->first();
        $seo_data['seo_title'] =$blogData->seo_title;
        $seo_data['seo_description'] =$blogData->seo_description;
       $seo_data['keywords'] =$blogData->seo_keyword;
       $canocial ='https://codepin.org/blog-details/'.$slug;
       
           
        return view('blog-details',compact('title','blogData','blog','seo_data','canocial','blogCategory','recentBlog'));
    }


    public function casestudies()
    {
        $homepage = Title::first();
        $seo_data['seo_title'] = $homepage->seo_title_case;
        $seo_data['seo_description'] = $homepage->seo_des_case;
        $seo_data['keywords'] = $homepage->seo_key_case;
        $canocial = 'https://codepin.org/casestudies';

        return view('casestudies',compact('seo_data','canocial'));
    }


    public function contact()
    {
        $homepage = Title::first();
        $homeData = HomeModify::first();
       
        $seo_data['seo_title'] = $homepage->seo_title_contact;
        $seo_data['seo_description'] = $homepage->seo_des_contact;
        $seo_data['keywords'] = $homepage->seo_key_contact;
        $banner['banner'] = $homepage->image_contact;
        $canocial = 'https://codepin.org/contact';
        return view('contact',compact('seo_data','canocial','homeData','banner'));
    }

    public function contactPost(Request $request)    
    {
        $this->validate(request(), [
            'name' => "required",
            'email' => "required",
            'phone' => "required",
           'project' => "required",
            'subject' => "required",
           
            'message' => "required",
         
          ], [], 
        [
          'name' => 'Full Name',
          'email' => 'Email',
          'phone' => 'Number',
          'project' => 'Project',
   
     
            'subject' => "Subject",
         
            'message' => "Message",
          
         
        ]);

        
  $contact_obj = new Contact;
  $contact_obj->name   =$request->name;
  $contact_obj->email  =$request->email;
  $contact_obj->phone=$request->phone;
  $contact_obj->project=$request->project;

  $contact_obj->subject=$request->subject;

  $contact_obj->message=$request->message;
  $contact_obj->save();
 
  return back()->with('message', 'Form Submitted Successfully!');
    }






    public function quotePost(Request $request)    
    {
        $this->validate(request(), [
            'fname' => "required",
            'lname' => "required",
            'email' => "required",         
            'message' => "required",
         
          ], [], 
        [
          'fname' => 'First Name',
          'lname' => 'Last Name',
          'email' => 'Email',
            'message' => "Message",
          
         
        ]);

        
  $contact_obj = new Quote;
  $contact_obj->fname   =$request->fname;
  $contact_obj->lname   =$request->lname;
  $contact_obj->email  =$request->email;


  $contact_obj->message=$request->message;
  $contact_obj->save();
 
  return back()->with('message', 'Form submitted successfully!');
    }



public function search(Request $request){

    $homepage = Title::first();
    $seo_data['seo_title'] = $homepage->seo_title_search;
    $seo_data['seo_description'] = $homepage->seo_des_search;
    $seo_data['keywords'] = $homepage->seo_key_search;

    $search = $request->search;
    $blogList = Blog::where(function ($query) use ($search) {

        $query->where('title','like',"%$search%");
       
        
    })
    ->paginate(4);

    return view('blogs',compact('blogList','search','seo_data'));
}



}
