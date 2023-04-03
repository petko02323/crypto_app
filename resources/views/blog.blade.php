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
                    <li>Blog</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <div class="row gy-4 posts-list">

                        @foreach($articles as $article)
                            <div class="col-lg-6">
                                <article class="d-flex flex-column">

                                    <div class="post-img">
                                        @if($article->getMainImage())
                                            <img src="{{$article->getMainImage()}}" alt="" class="img-fluid">
                                        @else
                                            <img src="{{asset("assets/img/crypto-logo.jpg")}}" alt="" class="img-fluid">
                                        @endif
                                    </div>

                                    <h2 class="title">
                                        <a href="/blog/{{$article->id}}">{{$article->title}}</a>
                                    </h2>

                                    <div class="meta-top">
                                        <ul>

                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="/blog/{{$article->id}}">
                                                    <time>{{date('m/d/Y ', strtotime($article->created_at))}}</time>
                                                </a></li>

                                        </ul>
                                    </div>

                                    <div class="content">
                                        <p>
                                            {!! Str::limit($article->body, 150, ' (...)') !!}
                                        </p>
                                    </div>

                                    <div class="read-more mt-auto align-self-end">
                                        <a href="/blog/{{$article->id}}">Pokračovať na článok</a>
                                    </div>

                                </article>
                            </div><!-- End post list item -->
                        @endforeach


                    </div><!-- End blog posts list -->



                </div>

                <div class="col-lg-4">
                    @include('layouts.blogsidebar', ['articles' => $articles])


                </div>

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('layouts.footer')

</body>

</html>
