@extends('admin.layout')

@section('title',' | All Categories')

@section('content')

<div >
    <div class="col-md-12" id="catposts">
     <h3>{{$category->name}}({{$category->posts->count()}})</h3>
        @foreach($posts as $key => $post)
            <div class="title-post">
                <li @if ($key === 0) @endif>
                    <a href="{{route('posts.show',$post->id)}}"><p>{{$key+1}}. {{$post->title}}</p></a>
                </li>
            </div>
        @endforeach
    </div>


</div>



@endsection