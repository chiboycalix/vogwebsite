@extends('admin.layout')

@section('title',' | Create Categories')

@section('content')
<div class="container" id="edit-category">
    <div class="row">
        <div class="col-md-6 col-md offset-3">
                {!!Form::model($category,['route'=>['dashboard.update-categories',$category->id],'method'=>'PUT','enctype'=>'multipart/form-data'])!!}

                         {{Form::label('name','Name:')}}
                         {{Form::text('name',null,['class' =>'form-control'])}}
                           <br>

                         {{Form::label('photo','Update Photo:')}}
                         {{Form::file('photo')}}
                         <br>

                         {{Form::submit('Save Changes',['class' =>'btn btn-success btn-block'])}}
                         {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection