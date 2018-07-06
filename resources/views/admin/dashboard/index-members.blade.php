@extends('admin.layout')

@section('title','| vogites')

@section('content')
<div class="container">

             <div class="row">
                    @foreach($members as $member)
                 <div class="col-md-4" id="container-div">

                    <p id="para-title" style="font-weight: bold;">Full Name: {{$member->name}}</p>

                    <a href="{{route('dashboard.show-members',$member->id)}}">
                       <img class="img-fluid rounded"  src="/storage/photos/{{$member->photo}}" id="post-img">
                    </a>

                    <a href="{{route('dashboard.show-members',$member->id)}}"><button class="btn btn-primary btn-sm">view</button></a>
                    <a href="{{route('dashboard.edit-members',$member->id)}}"><button class="btn btn-success btn-sm">edit</button></a>
                     {!!Form::open(['route'=>['dashboard.delete-members',$member->id],'method'=>'DELETE','enctype'=>'multipart/form-data'])!!}
                     {{ Form::submit('Delete',['class' =>'btn btn-danger btn-sm','id'=>'postdelete-btn'])}}
                     {!!Form::close()!!}
                     <div id="line-break"></div>
                 </div>

                 @endforeach
             </div>

         </div>

@endsection