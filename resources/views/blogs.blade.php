@extends('dashboard.layout.main')
@section('main-containers')
@php
     use Carbon\Carbon;
@endphp


 <!-- Header Start -->
 <div class="container-fluid bg-breadcrumb">
  <div class="container text-md-start text-center py-5">
      <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blog</h4>
      <ol class="breadcrumb d-flex mb-0 wow fadeInDown" data-wow-delay="0.3s">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item active text-white">Blog</li>
      </ol>    
  </div>
</div>
<!-- Header End -->


<!-- Blog Start -->
<div class="container-fluid blog py-5">
  <div class="container py-5">
      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
          <h4 class="text-primary">From Blog</h4>
          <h1 class="display-4 mb-4">News And Updates</h1>
          <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
          </p>
      </div>
      <div class="row g-4 justify-content-center">
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="blog-item">
                  <div class="blog-img">
                      <img src="https://img.freepik.com/free-vector/laptop-blogging_23-2148000410.jpg?t=st=1724654531~exp=1724658131~hmac=fcf07200050231c68252571527cc5d776ed1d7f7a132bcd0f1c2cef729b47a76&w=740" class="img-fluid rounded-top w-100" alt="">
                      <div class="blog-categiry py-2 px-4">
                          <span>It Service</span>
                      </div>
                  </div>
                  <div class="blog-content p-4">
                      <div class="blog-comment d-flex justify-content-between mb-3">
                          <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                          <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                          <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                      </div>
                      <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit amet.</a>
                      <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                      <a href="blog-detail.html" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
              <div class="blog-item">
                  <div class="blog-img">
                      <img src="https://img.freepik.com/free-vector/organic-flat-blog-post-illustration-with-people_23-2148955260.jpg?t=st=1724654663~exp=1724658263~hmac=bf8054ebd75eea1ea731bec4612f8c0556df5c3aec080dfe0e2e82cb6b00e0c3&w=740" class="img-fluid rounded-top w-100" alt="">
                      <div class="blog-categiry py-2 px-4">
                          <span>It Service</span>
                      </div>
                  </div>
                  <div class="blog-content p-4">
                      <div class="blog-comment d-flex justify-content-between mb-3">
                          <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                          <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                          <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                      </div>
                      <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit.</a>
                      <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                      <a href="blog-detail.html" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
              <div class="blog-item">
                  <div class="blog-img">
                      <img src="https://img.freepik.com/free-vector/business-people-working-illustration-concept_23-2148472774.jpg?t=st=1724654717~exp=1724658317~hmac=371115d3a313f24fac3f9d731f85b359e39fbae6e3c93f6f7e09d1eba094de71&w=740" class="img-fluid rounded-top w-100" alt="">
                      <div class="blog-categiry py-2 px-4">
                          <span>It Service</span>
                      </div>
                  </div>
                  <div class="blog-content p-4">
                      <div class="blog-comment d-flex justify-content-between mb-3">
                          <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                          <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                          <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                      </div>
                      <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit.</a>
                      <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                      <a href="blog-detail.html" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>

          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="blog-item">
                  <div class="blog-img">
                      <img src="https://img.freepik.com/free-vector/laptop-blogging_23-2148000410.jpg?t=st=1724654531~exp=1724658131~hmac=fcf07200050231c68252571527cc5d776ed1d7f7a132bcd0f1c2cef729b47a76&w=740" class="img-fluid rounded-top w-100" alt="">
                      <div class="blog-categiry py-2 px-4">
                          <span>It Service</span>
                      </div>
                  </div>
                  <div class="blog-content p-4">
                      <div class="blog-comment d-flex justify-content-between mb-3">
                          <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                          <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                          <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                      </div>
                      <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit amet.</a>
                      <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                      <a href="blog-detail.html" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
              <div class="blog-item">
                  <div class="blog-img">
                      <img src="https://img.freepik.com/free-vector/organic-flat-blog-post-illustration-with-people_23-2148955260.jpg?t=st=1724654663~exp=1724658263~hmac=bf8054ebd75eea1ea731bec4612f8c0556df5c3aec080dfe0e2e82cb6b00e0c3&w=740" class="img-fluid rounded-top w-100" alt="">
                      <div class="blog-categiry py-2 px-4">
                          <span>It Service</span>
                      </div>
                  </div>
                  <div class="blog-content p-4">
                      <div class="blog-comment d-flex justify-content-between mb-3">
                          <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                          <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                          <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                      </div>
                      <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit.</a>
                      <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                      <a href="blog-detail.html" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
              <div class="blog-item">
                  <div class="blog-img">
                      <img src="https://img.freepik.com/free-vector/business-people-working-illustration-concept_23-2148472774.jpg?t=st=1724654717~exp=1724658317~hmac=371115d3a313f24fac3f9d731f85b359e39fbae6e3c93f6f7e09d1eba094de71&w=740" class="img-fluid rounded-top w-100" alt="">
                      <div class="blog-categiry py-2 px-4">
                          <span>It Service</span>
                      </div>
                  </div>
                  <div class="blog-content p-4">
                      <div class="blog-comment d-flex justify-content-between mb-3">
                          <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                          <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                          <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                      </div>
                      <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit.</a>
                      <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                      <a href="blog-detail.html" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Blog End -->






@endsection