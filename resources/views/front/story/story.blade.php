@extends('front.master')

@section('title')
    Gallery
@endsection

@section('body')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('{{asset('/')}}assets/images/banners/banner-fullwidth.jpg')">
            <div class="container">
                <h1 class="page-title text-white">Our blog<span>Story</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our story</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <article class="entry single-entry">
                            <figure class="entry-media">
                                <img src="{{asset('/')}}assets/images/blog/single/1.jpg" alt="image desc"/>
                            </figure><!-- End .entry-media -->
                            <div class="entry-body">
                                <div class="entry-meta">
                                    <span class="entry-author">
                                        by John Doe
                                    </span>
                                    <span class="meta-separator">|</span>
                                        Nov 22, 2018
                                    <span class="meta-separator">|</span>
                                        2 Comments
                                </div><!-- End .entry-meta -->
                                <h2 class="entry-title">
                                    Cras ornare tristique elit.
                                </h2><!-- End .entry-title -->
                                <div class="entry-cats">
                                    in Lifestyle, Shopping
                                </div><!-- End .entry-cats -->
                                <div class="entry-content editor-content text-justify">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
                                    <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
                                    <div class="pb-1"></div><!-- End .mb-1 -->
                                    <img src="{{asset('/')}}assets/images/blog/single/2.jpg" alt="image" class="float-right"/>
                                    <h3>Quisque volutpat mattiseros. </h3>
                                    <ul>
                                        <li>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. </li>
                                        <li>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. </li>
                                        <li>Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</li>
                                    </ul>
                                    <div class="pb-1 clearfix"></div><!-- End .clearfix -->
                                    <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. </p>
                                    <blockquote>
                                        <p>“Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue.”</p>
                                    </blockquote>
                                    <p>Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna. Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. </p>
                                    <div class="pb-1"></div><!-- End .pb-1 -->
                                    <h3>Morbi interdum mollis sapien.</h3>
                                    <img src="{{asset('/')}}assets/images/blog/single/3.jpg" alt="image" width="100%"/>
                                    <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
                                    <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl. Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. </p>
                                </div><!-- End .entry-content -->
                                <div class="entry-footer row no-gutters flex-column flex-md-row">
                                    <div class="col-md-auto mt-2 mt-md-0">
                                        <div class="social-icons social-icons-color">
                                            <span class="social-label">Share this post:</span>
                                            <a href="https://www.facebook.com/" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="https://twitter.com/" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="https://www.instagram.com/" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="https://www.youtube.com/" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                            <a href="https://www.pinterest.com/" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                        </div><!-- End .soial-icons -->
                                    </div><!-- End .col-auto -->
                                </div><!-- End .entry-footer row no-gutters -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .col-lg-12 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
