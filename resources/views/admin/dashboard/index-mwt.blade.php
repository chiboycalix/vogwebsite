@extends('admin.layout')

@section('title','| mwt')

@section('content')
<div class="container">

             <div class="row">
                    @foreach($mwts as $mwt)
                 <div class="col-md-4" id="container-div">

                    <p id="para-title" style="font-weight: bold;">Topic: {{$mwt->topic}}</p>

                    <a href="{{route('dashboard.show-mwt',$mwt->id)}}">
                       <img class="img-fluid rounded"  src="/storage/mwt/{{$mwt->photo}}" id="post-img">
                    </a>

                    <a href="{{route('dashboard.show-mwt',$mwt->id)}}"><button class="btn btn-primary btn-sm">view</button></a>
                    <a href="#"><button class="btn btn-success btn-sm">edit</button></a>
                     {{-- {!!Form::open(['route'=>['dashboard.delete-posts',$mwt->id],'method'=>'DELETE','enctype'=>'multipart/form-data'])!!}
                     {{ Form::submit('Delete',['class' =>'btn btn-danger btn-sm','id'=>'postdelete-btn'])}}
                     {!!Form::close()!!} --}}
                     <div id="line-break"></div>
                 </div>

                 @endforeach
             </div>

         </div>

@endsection