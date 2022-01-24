@extends('front.master')

@section('title')
    Gallery
@endsection

@section('body')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('{{asset('/')}}assets/images/banners/home/banner-2.jpg')">
            <div class="container">
                <h1 class="page-title text-white">Our gallery<span>Gallery</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <nav class="blog-nav">
                    <ul class="menu-cat entry-filter justify-content-center">
                        <li class="active"><a href="#" data-filter="*">All Blog Posts<span>9</span></a></li>
                        <li><a href="#" data-filter=".lifestyle">Lifestyle<span>3</span></a></li>
                        <li><a href="#" data-filter=".shopping">Shopping<span>1</span></a></li>
                        <li><a href="#" data-filter=".fashion">Fashion<span>2</span></a></li>
                        <li><a href="#" data-filter=".travel">Travel<span>4</span></a></li>
                        <li><a href="#" data-filter=".hobbies">Hobbies<span>2</span></a></li>
                    </ul><!-- End .blog-menu -->
                </nav><!-- End .blog-nav -->

                <div class="entry-container" data-layout="fitRows">
                    <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                    <img src="{{asset('/')}}assets/images/blog/mask/grid/post-1.jpg" alt="image desc"/>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-title">
                                    <h6 class="text-white">Cras ornare tristique elit.</h6>
                                </div><!-- End .entry-title -->

                                <div class="entry-cats">
                                    <p class="text-white">in Lifestyle, Shopping</p>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item lifestyle col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media entry-video">
                                <img src="{{asset('/')}}assets/images/blog/mask/grid/post-2.jpg" alt="image desc"/>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-title">
                                    <h6 class="text-white">Vivamus vestibulum ntulla necante.</h6>
                                </div><!-- End .entry-title -->

                                <div class="entry-cats">
                                    <p class="text-white">in Lifestyle</p>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item lifestyle fashion col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media entry-gallery">
                                <img src="{{asset('/')}}assets/images/blog/mask/grid/post-3.jpg" alt="image desc"/>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-title">
                                    <h6 class="text-white">Utaliquam sollicitudin leo.</h6>
                                </div><!-- End .entry-title -->

                                <div class="entry-cats">
                                    <p class="text-white">in Fashion, Lifestyle</p>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <img src="{{asset('/')}}assets/images/blog/mask/grid/post-4.jpg" alt="image desc"/>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-title">
                                    <h6 class="text-white">Fusce pellentesque suscipit.</h6>
                                </div><!-- End .entry-title -->

                                <div class="entry-cats">
                                    <p class="text-white">in Travel</p>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel hobbies col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <img src="{{asset('/')}}assets/images/blog/mask/grid/post-5.jpg" alt="image desc"/>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-title">
                                    <h6 class="text-white">Aenean dignissim pellente squefelis.</h6>
                                </div><!-- End .entry-title -->

                                <div class="entry-cats">
                                    <p class="text-white">in Travel, Hobbies</p>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article> <!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item hobbies col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <img src="{{asset('/')}}assets/images/blog/mask/grid/post-6.jpg" alt="image desc"/>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-title">
                                    <h6 class="text-white">Quisque volutpat mattiseros.</h6>
                                </div><!-- End .entry-title -->

                                <div class="entry-cats">
                                    <p class="text-white">in Hobbies</p>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media entry-gallery">
                                <img src="{{asset('/')}}assets/images/blog/mask/grid/post-7.jpg" alt="image desc"/>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-title">
                                    <h6 class="text-white">Utaliquam sollicitudin leo.</h6>
                                </div><!-- End .entry-title -->

                                <div class="entry-cats">
                                    <p class="text-white">in Travel</p>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item fashion col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <img src="{{asset('/')}}assets/images/blog/mask/grid/post-8.jpg" alt="image desc"/>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-title">
                                    <h6 class="text-white">Quisque a lectus.</h6>
                                </div><!-- End .entry-title -->

                                <div class="entry-cats">
                                    <p class="text-white">in Fashion</p>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <img src="{{asset('/')}}assets/images/blog/mask/grid/post-9.jpg" alt="image desc"/>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-title">
                                    <h6 class="text-white">Fusce lacinia arcu etnulla.</h6>
                                </div><!-- End .entry-title -->

                                <div class="entry-cats">
                                    <p class="text-white">in Travel</p>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->
                </div><!-- End .entry-container -->

                <div class="mb-3"></div><!-- End .mb-3 -->

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-next" href="#" aria-label="Next">
                                Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
