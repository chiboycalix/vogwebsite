@extends('admin.layout')

@section('title','| blog-post')
{{Html::script('https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js')}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker.min.css">
@section('content')
 <div class="container">

         <div class="col-md-8 col-md offset-2" id="form-wrapper">
         {!!Form::model($mwt,['route'=>['dashboard.update-mwt',$mwt->id],'method'=>'PUT','enctype'=>'multipart/form-data'])!!}

         {{Form::label('topic','Topic:')}}
         {{Form::text('topic',null,['class' =>'form-control'])}}
           <br>
         {{Form::label('speaker','Speaker:')}}
         {{Form::text('speaker',null,['class' =>'form-control'])}}
             <br>
         {{Form::label('time','Date:')}}
         {{Form::text('time',null,['class' =>'chi form-control'])}}
            <br>

         {{Form::label('photo','Update Photo:')}}
         {{Form::file('photo')}}
         <br>

         {{Form::label('body','Body:')}}
         {{Form::textarea('body',null,['class' =>'form-control'])}}
         <br>
         {{Form::submit('Save Changes',['class' =>'btn btn-success btn-block'])}}
         {!!Form::close()!!}
         <a href="{{route('dashboard.show-mwt',$mwt->id)}}"><button class="btn btn-danger btn-block">Cancel Editing</button></a>
         </div>

 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
 <script>
        CKEDITOR.replace( 'body' );
        $('.chi').datepicker({
            format: 'mm-dd-yyyy',
            todayHighlight: true,
            autoclose: true,
         });
    </script>
@endsection