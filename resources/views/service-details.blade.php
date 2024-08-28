@extends('dashboard.layout.main')
@section('main-containers')
  
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb"  style="background-image: url(../uploads/{{$servicesData->home_image}})">
    <div class="container text-md-start text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Service Details</h4>
        <ol class="breadcrumb d-flex mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Service</a></li>
            <li class="breadcrumb-item active text-white">Service-details</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- ------------------Service start--------------- -->
<div class="container-fluid testimonial pb-5 mt-5">
    <div class="container pb-5">
        <div class="row g-4 justify-content-center">
        <div class="col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
      {!!$servicesData->description!!}
</div>
<div class="col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
  <h3>More Services</h3>
  <div class="cate-blog-border mt-3">
  
  @foreach ($servicedetails as $servicedetails)
      
  <a href="{{url('services/'.$servicedetails->slug)}}"><div class="mt-3 d-flex justify-content-between">
     <h6>{{$servicedetails->name}}</h6>
     <h6>{{$servicedetails->services_count}}</h6>
   </div>
  </a>
  @endforeach


   </div>
   @if (session()->has('message'))
   <div class="alert alert-success">
      {{-- <button type="button" class="close" data-dismiss="alert">x</button> --}}
      
      {{session()->get('message')}}
   </div>
       
   @endif


    <div class="service-form-box">
        <h4 class="text-primary">Send Your Message</h4>
        <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, accusamus.</p>
        <form action="{{route('contactPost')}}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control border-0" id="name" placeholder="Your Name" oninput="this.value = this.value.replace(/[^A-Za-z+.]/g, '').replace(/(\..*?)\..*/g, '$1');"  value="{{old('name')}}">
                        <label for="name">Your Name</label>
                        <span class="text-danger">
                            @error('name')
                               {{$message}}
                            @enderror
                          </span>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                        <input type="email" name="email"  class="form-control border-0" id="email" value="{{old('email')}}" placeholder="Your Email">
                        <label for="email">Your Email</label>
                        <span class="text-danger">
                            @error('email')
                               {{$message}}
                            @enderror
                          </span>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                        <input type="phone" name="phone" class="form-control border-0" id="phone" placeholder="Phone" maxlength="10" oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');"  value="{{old('phone')}}">
                        <label for="phone">Your Phone</label>
                        <span class="text-danger">
                            @error('phone')
                               {{$message}}
                            @enderror
                          </span>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                        <input type="text" name="project" class="form-control border-0" id="project" value="{{old('project')}}" placeholder="Project">
                        <label for="project">Your Project</label>
                        <span class="text-danger">
                            @error('project')
                               {{$message}}
                            @enderror
                          </span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" name="subject" class="form-control border-0" id="subject" value="{{old('subject')}}" placeholder="Subject">
                        <label for="subject">Subject</label>
                        <span class="text-danger">
                            @error('subject')
                               {{$message}}
                            @enderror
                          </span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea name="message" class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
                        <label for="message">Message</label>
                        <span class="text-danger">
                            @error('message')
                               {{$message}}
                            @enderror
                          </span>
                    </div>

                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                </div>
            </div>
        </form>
    </div>
x
</div>
</div>

</div>
        </div>
<!-- -----------------Service End---------------------- -->

<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h3 class="text-primary">More Services</h3>
        </div>
        <div class="row g-4 justify-content-center">
         @foreach ($servicelist as $servicelist)
             
         
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ url('uploads/' . $servicelist->image) }}" class="img-fluid rounded-top w-100" alt="">
                        <div class="service-icon p-3">
                            <i class="fa fa-database fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="{{url('service-details/'.$servicelist->slug)}}" class="d-inline-block h4 mb-4">{{$servicelist->title}}</a>
                            <p class="mb-4">{{$servicelist->short_content}}</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{url('service-details/'.$servicelist->slug)}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        
      

            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('services')}}">More Services</a>
            </div>
        </div>
    </div>
</div>


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-4 mb-4">What Our Customers Are Saying</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    @foreach ($testimonial as $testimonial)
                        
                
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="{{url('uploads/'.$testimonial->image)}}" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="{{$testimonial->alt}}">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">{{$testimonial->name}}</h4>
                                    <p class="mb-3">{{$testimonial->profaction}}</p>
                                    <div class="d-flex text-primary mb-3">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $testimonial->rating)
                                                <i class="fas fa-star"></i>
                                            @else
                                                <i class="fas fa-star text-body"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    
                                    <p class="mb-0">{{$testimonial->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
             
                </div>
            </div>
        </div>
        <!-- Testimonial End -->



@endsection
