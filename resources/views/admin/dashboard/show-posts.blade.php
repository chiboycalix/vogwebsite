@extends('admin.layout')

@section('title','| blog-post')

@section('content')



  <div class="container">
      <div class="row" id="posts">
        <div class="col-lg-8 col-lg offset-2">
           <h1 class="mt-4" style="text-align:center;">{{ucfirst($post->title)}}</h1>
              <p class="lead" style="text-align:center;">
                  Posted by
                  {{strtoupper($post->user->name)}} {{$post->created_at->diffForHumans()}}
              </p>

                  <img class="img-fluid rounded" src="/storage/posts/{{$post->photo}}" style="height:400px; width:700px;" alt="No Photo">

                     <p class="lead">{!!$post->body!!}</p>
                       <span class="badge badge-secondary">{{$post->category->name}}</span>


            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
