@extends('admin.layout')

@section('title','| Make we Talk')

@section('content')
<div class="container">
<div class="row">
        <div class="col-md-5">
          <div class="card" style="margin:20px; width:450px;">
              <img src="/storage/mwt/{{$mwt->photo}}" alt=""
              style="width:450px;height:400px;"
              class="card-img-top"/>
              <div class="card-body">
                 <h6 class="card-title"> TOPIC: {{strtoupper($mwt->topic)}}</h6><br>
               <h6 class="card-text">DATE:  {{$mwt->time}}</h6>
              </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel panel-default" style="margin-top:20px;" id="mwt-div">
             <div class="panel-heading" >
             <h2>MAKE WE TALK BY: {{strtoupper($mwt->speaker)}}</h2>
             </div>
             <div class="panel-body">
                <p>{!!$mwt->body!!}</p>
             </div>
          </div>
        </div>
      </div>
    </div>
      @include('admin.partials._footer')

@endsection