@extends('dashboard.layout.main')
@section('main-containers')



  <!-- Header Start -->
  <div class="container-fluid bg-breadcrumb">
   <div class="container text-md-start text-center py-5" style="max-width: 900px;">
       <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
       <ol class="breadcrumb d-flex mb-0 wow fadeInDown" data-wow-delay="0.3s">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item"><a href="#">Pages</a></li>
           <li class="breadcrumb-item active text-white">Contact</li>
       </ol>    
   </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
   <div class="container py-5">
       <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
           <h4 class="text-primary">Contact Us</h4>
           <h1 class="display-4 mb-4">If you have any comments please apply now</h1>
       </div>
       <div class="row g-5">
           <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
               <div class="contact-img d-flex justify-content-center" >
                   <div class="contact-img-inner">
                       <img src="{{url('web/img/contact-img.png')}}" class="img-fluid w-100"  alt="Image">
                   </div>
               </div>
           </div>
           <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
               <div>
                   <h4 class="text-primary">Send Your Message</h4>
                   <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, accusamus.</p>

                   @if (session()->has('message'))
                   <div class="alert alert-success">
                      {{-- <button type="button" class="close" data-dismiss="alert">x</button> --}}
                      
                      {{session()->get('message')}}
                   </div>
                       
                   @endif
             

                   <form action="{{route('contactPost')}}" method="POST">
                     @csrf
                       <div class="row g-3">
                           <div class="col-lg-12 col-xl-6">
                               <div class="form-floating">
                                   <input type="text" name="name" class="form-control border-0" id="name" oninput="this.value = this.value.replace(/[^A-Za-z+.]/g, '').replace(/(\..*?)\..*/g, '$1');"  value="{{old('name')}}" placeholder="Your Name">
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
                                   <input type="email" name="email" class="form-control border-0" id="email" placeholder="Your Email" value="{{old('email')}}">
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
                                   <input type="phone" name="phone" class="form-control border-0" id="phone"  maxlength="10" oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');"  value="{{old('phone')}}" placeholder="Phone">
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
                                   <input type="text" name="project" class="form-control border-0" id="project" placeholder="Project">
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
                                   <input type="text" name="subject" class="form-control border-0" id="subject" placeholder="Subject">
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
                                   <textarea class="form-control border-0" name="message" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
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
           </div>
           <div class="col-12">
               <div>
                   <div class="row g-2">
                       <div class="col-md-6 col-lg-4 wow fadeInUp text-center" data-wow-delay="0.2s">
                           <div class="contact-add-item">
                               <div class="contact-icon text-primary mb-4">
                                   <i class="fas fa-map-marker-alt fa-2x"></i>
                               </div>
                               <div>
                                   <h4>Address</h4>
                                   <p class="mb-0">{{$homeData->address ?? ''}}</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6 col-lg-4 wow fadeInUp text-center" data-wow-delay="0.4s">
                           <div class="contact-add-item">
                               <div class="contact-icon text-primary mb-4">
                                   <i class="fas fa-envelope fa-2x"></i>
                               </div>
                               <div>
                                   <h4>Mail Us</h4>
                                   <p class="mb-0">{{ $homeData->email ?? 'example@gmail.com' }}</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6 col-lg-4 wow fadeInUp text-center" data-wow-delay="0.6s">
                           <div class="contact-add-item">
                               <div class="contact-icon text-primary mb-4">
                                   <i class="fa fa-phone-alt fa-2x"></i>
                               </div>
                               <div>
                                   <h4>Telephone</h4>
                                   <p class="mb-0">{{ $homeData->phone_no ?? '' }}</p>
                               </div>
                           </div>
                       </div>
                  
                   </div>
               </div>
           </div>
           <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
               <div class="rounded">
                   <iframe class="rounded w-100" 
                   style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                   loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- Contact End -->







@endsection