@extends('dashboard.layout.main')
@section('main-containers')

@php
    use Carbon\Carbon;


$date = Carbon::parse($blogData->created_at)->format('d M, Y');
@endphp


<!-- Header Start -->
<div class="container-fluid bg-breadcrumb" style="background-image: url(../uploads/{{$blogData->home_image}})">
   <div class="container text-md-start text-center py-5" style="max-width: 900px;">
       <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Blog Details</h4>
       <ol class="breadcrumb d-flex mb-0 wow fadeInDown" data-wow-delay="0.3s">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item"><a href="#">Blog</a></li>
           <li class="breadcrumb-item active text-white">Blog-details</li>
       </ol>    
   </div>
</div>
<!-- Header End -->
<!-- ------------Blog Details Start---------------------- -->
<div class="container-fluid blog py-5">
   <div class="container py-5">
       <div class="row g-4 justify-content-center">
           <div class="col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
            <div><img src="{{ url('uploads/' . $blogData->image) }}" alt="blog-image" class="img-fluid"></div>
          
            <div class="d-flex mt-4">
               <div><i class="bi bi-calendar2-week-fill"></i> {{$date}}</div>
               <div class="ms-2"><i class="bi bi-person-fill"></i> Jhon Doe</div>
            </div>

            <div class="mt-4">
        {!!$blogData->description!!}
            </div>
          
           </div>
           <div class="col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
            <h3>Categories</h3>
            <div class="cate-blog-border mt-3">
         @foreach ($blogCategory as $blogCategory)
             
         <a href="#"><div class="mt-3 d-flex justify-content-between">
             <h6>{{$blogCategory->name}}</h6>
             <h6>{{$blogCategory->blogs_count}}</h6>
           </div>
          </a>
         @endforeach
         
           </div>


           <h3 class="mt-4">Recent Post</h3>

           @foreach ($recentBlog as $recentBlog)
               
           <a href="#"><div class="d-flex mt-3">
                <div><img src="{{ url('uploads/' . $recentBlog->image) }}" alt="blog-image" class="img-fluid recent-blog-img"></div>
               <div class="ms-2">
                <h5>{{$recentBlog->title}}</h5>
                <p><i class="bi bi-calendar-week-fill"></i> {{ $recentBlog->created_at->format('d M Y') }}</p>
               </div>
            </div>
            </a> 
           @endforeach
             

  
         
           </div>

       </div>
   </div>
</div>
<!-- ------------Blog Details End---------------------- -->

       <!--Recent Blog Start -->
       <div class="container-fluid blog py-5">
           <div class="container py-5">
               <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                   <h4 class="text-primary">Recent Blogs</h4>
                  
               </div>
               <div class="row g-4 justify-content-center">
          @foreach ($blog as $blog)
              
    
                   <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                       <div class="blog-item">
                           <div class="blog-img">
                               <img src="{{ url('uploads/' . $blog->image) }}" class="img-fluid rounded-top w-100" alt="">
                               <div class="blog-categiry py-2 px-4">
                                   <span>{{$blog->blogCategory['name']}}</span>
                               </div>
                           </div>
                           <div class="blog-content p-4">
                               <div class="blog-comment d-flex justify-content-between mb-3">
                                   <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                   <div class="small"><span class="fa fa-calendar text-primary"></span> {{ $blog->created_at->format('d M Y') }}</div>
                                   <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                               </div>
                               <a href="{{url('blog-details/'.$blog->slug)}}" class="h4 d-inline-block mb-3">{{$blog->title}}</a>
                               <p class="mb-3">{{$blog->short_content}}</p>
                               <a href="{{url('blog-details/'.$blog->slug)}}" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
                           </div>
                       </div>
                   </div>

                   @endforeach
       
               </div>
           </div>
       </div>
       <!-- ---------Recent Blog End----------- -->











@endsection