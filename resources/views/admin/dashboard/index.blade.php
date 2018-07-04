@extends('admin.layout')

@section('title','| Homepage')

@section('content')  
        <section id="breadcrumb">
            <div class="container">
                <ol class="breadcrumb" style="margin-top:10px; background-color:black;">
                    <li class="active" style="color:white;">
                         WEBSITE OVERVIEW
                    </li>
                </ol>
                </div>                   
         </section>
        
    <section class="main">
        <div class="container">
            <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                <p class="card-title"> Members</p>
                            </div>
                           <img class="card-img-top">
                           <div class="card-body">
                            {{$members->count()}}
                           </div>
                        </div>
                    </div>
                 <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                    <p class="card-title"> Make we talk</p>
                                </div>
                       <img class="card-img-top">
                      <div class="card-body">
                       {{$mwts->count()}}
                      </div>
                   </div>
                </div>
                 <div class="col-md-4" >
                    <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                    <p class="card-title"> Posts</p>
                                </div>
                        <img class="card-img-top">
                     <div class="card-body">
                        {{$posts->count()}}
                     </div>
                   </div>
                </div>
                <div class="col-md-4" style="margin-top:50px;">
                        <div class="card" style="width: 18rem;">
                                <div class="card-header">
                                        <p class="card-title"> Comments</p>
                                    </div>
                            <img class="card-img-top">
                         <div class="card-body">
                            {{$comments->count()}}
                         </div>
                       </div>
                    </div>
            </div>
        </div>
    </section>



@endsection