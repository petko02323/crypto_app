
<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

<!-- ======= Header ======= -->
@include('layouts.header')<!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Blog</h2>
                <ol>
                    <li><a href="/">Domov</a></li>
                    <li><a href="/blog">Blog</a></li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    @if($post)
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            @if($post->getMainImage())
                                <img src="{{$post->getMainImage()}}" alt="" class="img-fluid">
                            @else
                                <img src="{{asset("assets/img/crypto-logo.jpg")}}" alt="" class="img-fluid">
                            @endif

                        </div>

                        <h2 class="title">{{$post->title}}</h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time >{{date('m/d/Y ', strtotime($post->created_at))}}</time></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            <p>
                                {!! $post->body !!}
                            </p>



                        </div><!-- End post content -->



                    </article><!-- End blog post -->





                </div>

                <div class="col-lg-4">

                    @include('layouts.blogsidebar', ['articles' => $articles])<!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->
    @endif

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('layouts.footer')

</body>

</html>
