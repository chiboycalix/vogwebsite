@extends('admin.layout')

@section('title','| blog-post')

@section('content')
 <div class="container">

     <div class="row">
            @foreach($posts as $post)
         <div class="col-md-4" id="container-div">
            <p id="para-title">{{$post->title}}</p>
            Category: <span class="badge badge-secondary">{{$post->category->name}}</span>
            <a href="{{route('dashboard.show-posts',$post->id)}}">
               <img class="img-fluid rounded"  src="/storage/posts/{{$post->photo}}" id="post-img">
            </a>
            <a href="{{route('dashboard.show-posts',$post->id)}}"><button class="btn btn-primary btn-sm">view</button></a>
            <a href="{{route('dashboard.edit-posts',$post->id)}}"><button class="btn btn-success btn-sm">edit</button></a>
             {!!Form::open(['route'=>['dashboard.delete-posts',$post->id],'method'=>'DELETE','enctype'=>'multipart/form-data'])!!}
             {{ Form::submit('Delete',['class' =>'btn btn-danger btn-sm','id'=>'emailsize'])}}
             {!!Form::close()!!}
         </div>

         @endforeach
     </div>

 </div>



@endsection