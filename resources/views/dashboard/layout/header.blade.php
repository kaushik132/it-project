<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        @if(isset($seo_data['seo_title']))
        <title>{{ $seo_data['seo_title'] }}</title>
        @endif
      
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
   
        @if(isset($seo_data['seo_description']))
          <meta name="description" content="{{$seo_data['seo_description']}}" />
          @endif

          @if(isset($seo_data['keywords']))
          <meta name="keywords"  content="{{$seo_data['keywords']}}" />
          @endif  
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="{{url('web/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{url('web/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{url('web/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{url('web/css/style.css')}}" rel="stylesheet">


        {{-- toster part --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </head>

    <body>
        @php
    use App\Models\HomeModify;
    use App\Models\Navbar;

    // Assuming you're fetching some data from the HomeModify model
    $homeData = HomeModify::first(); // This could be any query
    $navbar = Navbar::all(); // This could be any query
@endphp

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
            <div class="container">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="ps-3">
                                <a href="mailto:{{ $homeData->email ?? 'example@gmail.com' }}" class="text-muted small">
                                    <i class="fas fa-envelope text-primary me-2"></i>
                                    {{ $homeData->email ?? 'example@gmail.com' }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-end border-primary pe-3">
                                <a class="btn p-0 text-primary me-3" href="{{ $homeData->facebook ?? '' }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn p-0 text-primary me-3" href="{{ $homeData->twitter ?? '' }}"><i class="fab fa-twitter"></i></a>
                                <a class="btn p-0 text-primary me-3" href="{{ $homeData->instagrame ?? '' }}"><i class="fab fa-instagram"></i></a>
                                <a class="btn p-0 text-primary me-0" href="{{ $homeData->linkedin ?? '' }}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                           
                                
                                    
                              
<!-- Google Translate -->
<div id="google_element"></div>
<script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
<script>
    function loadGoogleTranslate() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_element');
    }

    // Reinitialize Google Translate when the page is redirected
     window.onload = function() {
        loadGoogleTranslate();
    };

    document.querySelectorAll('.nav-item').forEach(function(link) {
        link.addEventListener('click', function() {
            // Simulate a page reload or navigation event
            setTimeout(function() {
                loadGoogleTranslate();
            }, 100);
        });
    });
</script>
                       
                           
                        </div>
                    </div>

                    
                   
                 


                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light"> 
                    <a href="#" class="navbar-brand p-0">
                        <img src="https://st3.depositphotos.com/43745012/44906/i/450/depositphotos_449066958-stock-photo-financial-accounting-logo-financial-logo.jpg" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 mx-lg-auto">
                            @foreach ($navbar as $navbar)
                                
                            <a href="{{url(''.$navbar->stug)}}" class="nav-item nav-link active">{{$navbar->title}}</a>
                            @endforeach
                           
                            <div class="nav-btn px-3">
                                {{-- <button class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#exampleModal"> Get a Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                        <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                            <i class="fa fa-phone-alt fa-2x"></i>
                            <div class="position-absolute" style="top: 7px; right: 12px;">
                                <span><i class="fa fa-comment-dots"></i></span>
                            </div>
                        </a>
                        <div class="d-flex flex-column ms-3">
                            <span>Call to Our Experts</span>
                            <a href="tel:+ {{ $homeData->phone_no ?? '' }}"><span class="text-dark">Free: + {{ $homeData->phone_no ?? '' }}</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

          <!-- Modal Search Start -->
   <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center bg-primary">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Modal Get Quote Start-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

   

 <form action="{{route('quotePost')}}" method="POST">
    @csrf
    <input type="text" name="fname" class="form-control mt-2" placeholder="First Name" oninput="this.value = this.value.replace(/[^A-Za-z+.]/g, '').replace(/(\..*?)\..*/g, '$1');"  value="{{old('fname')}}">
    <span class="text-danger">
        @error('fname')
           {{$message}}
        @enderror
      </span>
    
    <input type="text" name="lname" class="form-control mt-2" placeholder="Last Name" oninput="this.value = this.value.replace(/[^A-Za-z+.]/g, '').replace(/(\..*?)\..*/g, '$1');"  value="{{old('lname')}}">
    <span class="text-danger">
        @error('lname')
           {{$message}}
        @enderror
      </span>
    <input type="email" name="email" class="form-control mt-2" placeholder="Email ID" value="{{old('email')}}">
    <span class="text-danger">
        @error('email')
           {{$message}}
        @enderror
      </span>
    <textarea name="message" id="" rows="4" cols="6" class="form-control mt-2"  placeholder="Message"></textarea>
    <span class="text-danger">
        @error('message')
           {{$message}}
        @enderror
      </span>
 
    <button type="submit" class="btn btn-primary mt-3 w-100">Save</button>
</form>
</div>

</div>
</div>
</div>
<!-- Modal Get Quote End-->

@if (Session::has('message'))
<script>
    toastr.options ={
        "progressBar" : true,
        "closeButton" : true,
    }
        toastr.success("{{ Session::get('message')}}", 'Success!',{timeOut:12000});
</script>
    
@endif
