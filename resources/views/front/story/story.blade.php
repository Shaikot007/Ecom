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
                    <div class="col-lg-9">
                        <article class="entry single-entry">
                            <figure class="entry-media">
                                <img src="{{asset('/')}}assets/images/blog/single/1.jpg" alt="image desc"/>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            by <a href="#">John Doe</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">Nov 22, 2018</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">2 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    Cras ornare tristique elit.
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Lifestyle</a>,
                                    <a href="#">Shopping</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content editor-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>

                                    <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a <a href="#">ultrices sagittis</a>, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>

                                    <div class="pb-1"></div><!-- End .mb-1 -->

                                    <img src="{{asset('/')}}assets/images/blog/single/2.jpg" alt="image" class="float-left"/>

                                    <h3>Quisque volutpat mattiseros. </h3>

                                    <ul>
                                        <li>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. </li>
                                        <li>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. </li>
                                        <li>Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</li>
                                    </ul>

                                    <div class="pb-1 clearfix"></div><!-- End .clearfix -->

                                    <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula <a href="#">sollicitudin laoreet</a> viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. </p>

                                    <blockquote>
                                        <p>“ Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. ”</p>
                                    </blockquote>

                                    <p>Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna. Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. </p>

                                    <div class="pb-1"></div><!-- End .pb-1 -->

                                    <h3>Morbi interdum mollis sapien.</h3>

                                    <img src="{{asset('/')}}assets/images/blog/single/3.jpg" alt="image"/>

                                    <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent <a href="#">elementum hendrerit</a> tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>

                                    <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl. Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. </p>
                                </div><!-- End .entry-content -->

                                <div class="entry-footer row no-gutters flex-column flex-md-row">
                                    <div class="col-md">
                                        <div class="entry-tags">
                                            <span>Tags:</span> <a href="#">photography</a> <a href="#">style</a>
                                        </div><!-- End .entry-tags -->
                                    </div><!-- End .col -->

                                    <div class="col-md-auto mt-2 mt-md-0">
                                        <div class="social-icons social-icons-color">
                                            <span class="social-label">Share this post:</span>
                                            <a href="www.facebook.com" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="www.twitter.com" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="www.pinterest.com" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                            <a href="www.linkedin.com" class="social-icon social-linkedin" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
                                        </div><!-- End .soial-icons -->
                                    </div><!-- End .col-auto -->
                                </div><!-- End .entry-footer row no-gutters -->
                            </div><!-- End .entry-body -->

                            <div class="entry-author-details">
                                <figure class="author-media">
                                    <a href="#">
                                        <img src="{{asset('/')}}assets/images/blog/single/author.jpg" alt="User name"/>
                                    </a>
                                </figure><!-- End .author-media -->

                                <div class="author-body">
                                    <div class="author-header row no-gutters flex-column flex-md-row">
                                        <div class="col">
                                            <h4><a href="#">John Doe</a></h4>
                                        </div><!-- End .col -->
                                        <div class="col-auto mt-1 mt-md-0">
                                            <a href="#" class="author-link">View all posts by John Doe <i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .col -->
                                    </div><!-- End .row -->

                                    <div class="author-content">
                                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. </p>
                                    </div><!-- End .author-content -->
                                </div><!-- End .author-body -->
                            </div><!-- End .entry-author-details-->
                        </article><!-- End .entry -->

                        <nav class="pager-nav" aria-label="Page navigation">
                            <a class="pager-link pager-link-prev" href="#" aria-label="Previous" tabindex="-1">
                                Previous Post
                                <span class="pager-link-title">Cras iaculis ultricies nulla</span>
                            </a>

                            <a class="pager-link pager-link-next" href="#" aria-label="Next" tabindex="-1">
                                Next Post
                                <span class="pager-link-title">Praesent placerat risus</span>
                            </a>
                        </nav><!-- End .pager-nav -->

                        <div class="related-posts">
                            <h3 class="title">Related Posts</h3><!-- End .title -->

                            <div class="owl-carousel owl-simple" data-toggle="owl"
                                 data-owl-options='{
                                        "nav": false,
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":1
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            }
                                        }
                                    }'>
                                <article class="entry entry-grid">
                                    <figure class="entry-media">
                                        <a href="#">
                                            <img src="{{asset('/')}}assets/images/blog/grid/3cols/post-1.jpg" alt="image desc"/>
                                        </a>
                                    </figure><!-- End .entry-media -->

                                    <div class="entry-body">
                                        <div class="entry-meta">
                                            <a href="#">Nov 22, 2018</a>
                                            <span class="meta-separator">|</span>
                                            <a href="#">2 Comments</a>
                                        </div><!-- End .entry-meta -->

                                        <h2 class="entry-title">
                                            <a href="#">Cras ornare tristique elit.</a>
                                        </h2><!-- End .entry-title -->

                                        <div class="entry-cats">
                                            in <a href="#">Lifestyle</a>,
                                            <a href="#">Shopping</a>
                                        </div><!-- End .entry-cats -->
                                    </div><!-- End .entry-body -->
                                </article><!-- End .entry -->

                                <article class="entry entry-grid">
                                    <figure class="entry-media">
                                        <a href="#">
                                            <img src="{{asset('/')}}assets/images/blog/grid/3cols/post-2.jpg" alt="image desc"/>
                                        </a>
                                    </figure><!-- End .entry-media -->

                                    <div class="entry-body">
                                        <div class="entry-meta">
                                            <a href="#">Nov 21, 2018</a>
                                            <span class="meta-separator">|</span>
                                            <a href="#">0 Comments</a>
                                        </div><!-- End .entry-meta -->

                                        <h2 class="entry-title">
                                            <a href="#">Vivamus ntulla necante.</a>
                                        </h2><!-- End .entry-title -->

                                        <div class="entry-cats">
                                            in <a href="#">Lifestyle</a>
                                        </div><!-- End .entry-cats -->
                                    </div><!-- End .entry-body -->
                                </article><!-- End .entry -->

                                <article class="entry entry-grid">
                                    <figure class="entry-media">
                                        <a href="#">
                                            <img src="{{asset('/')}}assets/images/blog/grid/3cols/post-3.jpg" alt="image desc"/>
                                        </a>
                                    </figure><!-- End .entry-media -->

                                    <div class="entry-body">
                                        <div class="entry-meta">
                                            <a href="#">Nov 18, 2018</a>
                                            <span class="meta-separator">|</span>
                                            <a href="#">3 Comments</a>
                                        </div><!-- End .entry-meta -->

                                        <h2 class="entry-title">
                                            <a href="#">Utaliquam sollicitudin leo.</a>
                                        </h2><!-- End .entry-title -->

                                        <div class="entry-cats">
                                            in <a href="#">Fashion</a>,
                                            <a href="#">Lifestyle</a>
                                        </div><!-- End .entry-cats -->
                                    </div><!-- End .entry-body -->
                                </article><!-- End .entry -->

                                <article class="entry entry-grid">
                                    <figure class="entry-media">
                                        <a href="#">
                                            <img src="{{asset('/')}}assets/images/blog/grid/3cols/post-4.jpg" alt="image desc"/>
                                        </a>
                                    </figure><!-- End .entry-media -->

                                    <div class="entry-body">
                                        <div class="entry-meta">
                                            <a href="#">Nov 15, 2018</a>
                                            <span class="meta-separator">|</span>
                                            <a href="#">4 Comments</a>
                                        </div><!-- End .entry-meta -->

                                        <h2 class="entry-title">
                                            <a href="#">Fusce pellentesque suscipit.</a>
                                        </h2><!-- End .entry-title -->

                                        <div class="entry-cats">
                                            in <a href="#">Travel</a>
                                        </div><!-- End .entry-cats -->
                                    </div><!-- End .entry-body -->
                                </article><!-- End .entry -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- End .related-posts -->

                        <div class="comments">
                            <h3 class="title">3 Comments</h3><!-- End .title -->

                            <ul>
                                <li>
                                    <div class="comment">
                                        <figure class="comment-media">
                                            <a href="#">
                                                <img src="{{asset('/')}}assets/images/blog/comments/1.jpg" alt="User name"/>
                                            </a>
                                        </figure>

                                        <div class="comment-body">
                                            <a href="#" class="comment-reply">Reply</a>
                                            <div class="comment-user">
                                                <h4><a href="#">Jimmy Pearson</a></h4>
                                                <span class="comment-date">November 9, 2018 at 2:19 pm</span>
                                            </div><!-- End .comment-user -->

                                            <div class="comment-content">
                                                <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. </p>
                                            </div><!-- End .comment-content -->
                                        </div><!-- End .comment-body -->
                                    </div><!-- End .comment -->

                                    <ul>
                                        <li>
                                            <div class="comment">
                                                <figure class="comment-media">
                                                    <a href="#">
                                                        <img src="{{asset('/')}}assets/images/blog/comments/2.jpg" alt="User name"/>
                                                    </a>
                                                </figure>

                                                <div class="comment-body">
                                                    <a href="#" class="comment-reply">Reply</a>
                                                    <div class="comment-user">
                                                        <h4><a href="#">Lena  Knight</a></h4>
                                                        <span class="comment-date">November 9, 2018 at 2:19 pm</span>
                                                    </div><!-- End .comment-user -->

                                                    <div class="comment-content">
                                                        <p>Morbi interdum mollis sapien. Sed ac risus.</p>
                                                    </div><!-- End .comment-content -->
                                                </div><!-- End .comment-body -->
                                            </div><!-- End .comment -->
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <div class="comment">
                                        <figure class="comment-media">
                                            <a href="#">
                                                <img src="{{asset('/')}}assets/images/blog/comments/3.jpg" alt="User name"/>
                                            </a>
                                        </figure>

                                        <div class="comment-body">
                                            <a href="#" class="comment-reply">Reply</a>
                                            <div class="comment-user">
                                                <h4><a href="#">Johnathan Castillo</a></h4>
                                                <span class="comment-date">November 9, 2018 at 2:19 pm</span>
                                            </div><!-- End .comment-user -->

                                            <div class="comment-content">
                                                <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
                                            </div><!-- End .comment-content -->
                                        </div><!-- End .comment-body -->
                                    </div><!-- End .comment -->
                                </li>
                            </ul>
                        </div><!-- End .comments -->
                        <div class="reply">
                            <div class="heading">
                                <h3 class="title">Leave A Reply</h3><!-- End .title -->
                                <p class="title-desc">Your email address will not be published. Required fields are marked *</p>
                            </div><!-- End .heading -->

                            <form action="#">
                                <label for="reply-message" class="sr-only">Comment</label>
                                <textarea name="reply-message" id="reply-message" cols="30" rows="4" class="form-control" required placeholder="Comment *"></textarea>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="reply-name" class="sr-only">Name</label>
                                        <input type="text" class="form-control" id="reply-name" name="reply-name" required placeholder="Name *">
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <label for="reply-email" class="sr-only">Email</label>
                                        <input type="email" class="form-control" id="reply-email" name="reply-email" required placeholder="Email *">
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->

                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>POST COMMENT</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </form>
                        </div><!-- End .reply -->
                    </div><!-- End .col-lg-9 -->

                    <aside class="col-lg-3">
                        <div class="sidebar">
                            <div class="widget widget-search">
                                <h3 class="widget-title">Search</h3><!-- End .widget-title -->

                                <form action="#">
                                    <label for="ws" class="sr-only">Search in blog</label>
                                    <input type="search" class="form-control" name="ws" id="ws" placeholder="Search in blog" required>
                                    <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Search</span></button>
                                </form>
                            </div><!-- End .widget -->

                            <div class="widget widget-cats">
                                <h3 class="widget-title">Categories</h3><!-- End .widget-title -->

                                <ul>
                                    <li><a href="#">Lifestyle<span>3</span></a></li>
                                    <li><a href="#">Shopping<span>3</span></a></li>
                                    <li><a href="#">Fashion<span>1</span></a></li>
                                    <li><a href="#">Travel<span>3</span></a></li>
                                    <li><a href="#">Hobbies<span>2</span></a></li>
                                </ul>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">Popular Posts</h3><!-- End .widget-title -->

                                <ul class="posts-list">
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="{{asset('/')}}assets/images/blog/sidebar/post-1.jpg" alt="post"/>
                                            </a>
                                        </figure>

                                        <div>
                                            <span>Nov 22, 2018</span>
                                            <h4><a href="#">Aliquam tincidunt mauris eurisus.</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="{{asset('/')}}assets/images/blog/sidebar/post-2.jpg" alt="post"/>
                                            </a>
                                        </figure>

                                        <div>
                                            <span>Nov 19, 2018</span>
                                            <h4><a href="#">Cras ornare tristique elit.</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="{{asset('/')}}assets/images/blog/sidebar/post-3.jpg" alt="post"/>
                                            </a>
                                        </figure>

                                        <div>
                                            <span>Nov 12, 2018</span>
                                            <h4><a href="#">Vivamus vestibulum ntulla nec ante.</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="{{asset('/')}}assets/images/blog/sidebar/post-4.jpg" alt="post"/>
                                            </a>
                                        </figure>

                                        <div>
                                            <span>Nov 25, 2018</span>
                                            <h4><a href="#">Donec quis dui at dolor  tempor interdum.</a></h4>
                                        </div>
                                    </li>
                                </ul><!-- End .posts-list -->
                            </div><!-- End .widget -->

                            <div class="widget widget-banner-sidebar">
                                <div class="banner-sidebar">
                                    <a href="#">
                                        <img src="{{asset('/')}}assets/images/blog/sidebar/banner.jpg" alt="banner"/>
                                    </a>
                                </div><!-- End .banner-ad -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">Browse Tags</h3><!-- End .widget-title -->

                                <div class="tagcloud">
                                    <a href="#">fashion</a>
                                    <a href="#">style</a>
                                    <a href="#">women</a>
                                    <a href="#">photography</a>
                                    <a href="#">travel</a>
                                    <a href="#">shopping</a>
                                    <a href="#">hobbies</a>
                                </div><!-- End .tagcloud -->
                            </div><!-- End .widget -->

                            <div class="widget widget-text">
                                <h3 class="widget-title">About Blog</h3><!-- End .widget-title -->

                                <div class="widget-text-content">
                                    <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, pulvinar nunc sapien ornare nisl.</p>
                                </div><!-- End .widget-text-content -->
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar sidebar-shop -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
