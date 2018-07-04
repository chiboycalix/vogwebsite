@extends('blog.blog-layout')

@section('title','| All Posts')

@section('content')


<div class="container">
          <div class="row" >
            <div class="col-md-8" >
              <h1 style="text-align:center; margin-top:70px;">Articles</h1>
              <div class="row"  id="posts">
                  @foreach($posts as $post)
                <div class="col-md-12 col-md offset-1" id="post-cont">
                     <h5 class="mt-8">{{ucfirst($post->title)}}</h5>
                       <p class="mylead">
                         {{date('F j, Y',strtotime($post->created_at))}} / Author : {{strtoupper($post->user->name)}}
                         / Category : <a href="#"><span class="badge badge-secondary">{{$post->category->name}}</span></a> / <a href="#"><span>{{$post->comments()->count()>0 ? $post->comments()->count().' Comments':'No Comments'}}
                          </span></a>
                       </p>
                       <hr>
                     <a href="{{route('posts.show',$post->id)}}">
                       <img class="img-fluid rounded" id="gsap-img" src="/storage/posts/{{$post->photo}}" alt="">
                     </a>
                       <hr>
                    <p class="lead" style="font-size:15px;">{!!ucfirst(substr($post->body,0,500))!!} <a href="{{route('posts.show',$post->id)}}">{{strlen($post->body) >100 ? " Read more..." : ""}}</a></p>
                    <div id="post-container"></div>
                    <hr>
                </div>
                <br />
                @endforeach

              </div>
              {!!$posts->links()!!}

            </div>

            <div class="col-md-4">
                <h4>RECENT POSTS</h4>
               <div class="recent-hr"></div>
               <div class="row" id="sidenav-img">
                 @foreach ($recentPosts as $recentPost )
                 <div class="col-md-5" >
                    <img class="img-fluid rounded" id="recentPost-img" src="/storage/posts/{{$recentPost->photo}}" alt="">
                 </div>
                 <div class="col-md-7">
                    <a href="{{route('posts.show',$recentPost->id)}}" class="recent-title">{{ucfirst(substr($recentPost->title,0,50))}}...</a>
                    <p class="recent-p">{{date('F j, Y',strtotime($recentPost->created_at))}}</p>
                 </div>
                 @endforeach
               </div>
               <div class="recent-hrclose"></div>
               <h4 class="upcoming-events">UPCOMING EVENTS</h4>
               <div class="advert-hr"></div>
               <div class="row">

                 <div class="col-md-6 col-md offset-3">

                   <a href="" class="advertimg-link">
                   {{Html::image('img/advert1.jpg','alt txt' ,array('class' => 'advert1-img'))}}
                  </a>
                 </div>
               </div>
            </div>

          </div>

        </div>


@endsection
