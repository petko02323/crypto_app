
<div class="sidebar">



    <div class="sidebar-item recent-posts">
        <h3 class="sidebar-title">Najnovšie príspevky</h3>

        <div class="mt-3">
            @foreach($articles as $article)

                <div class="post-item mt-3">
                    @if($article->getMainImage())
                        <img src="{{$article->getMainImage()}}" alt="" class="img-fluid">
                    @else
                        <img src="{{asset("assets/img/crypto-logo.jpg")}}" alt="" class="img-fluid">
                    @endif
                    <div>
                        <h4><a href="/blog/{{$article->id}}">{{$article->title}}</a></h4>
                        <time>{{date('d.m.Y ', strtotime($article->created_at))}}</time>
                    </div>
                </div><!-- End recent post item-->
            @endforeach



        </div>

    </div><!-- End sidebar recent posts-->



</div><!-- End Blog Sidebar -->
