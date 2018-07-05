@extends('admin.layout')

@section('title','| blog-post')
{{Html::script('https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js')}}
@section('content')
 <div class="container">

         <div class="col-md-8 col-md offset-2" id="form-wrapper">
         {!!Form::model($post,['route'=>['dashboard.update-posts',$post->id],'method'=>'PUT','enctype'=>'multipart/form-data'])!!}

         {{Form::label('title','Title:')}}
         {{Form::text('title',null,['class' =>'form-control','id'=>'emailsize'])}}
           <br>

         {{Form::label('category_id','Category')}}
         <select class="form-control" name="category_id">
         @foreach($categories as $category)
             <option value="{{$category->id}}" id='emailsize'>{{$category->name}}</option>
             @endforeach
         </select>
           <br>

         {{Form::label('photo','Update Photo:')}}
         {{Form::file('photo')}}
         <br>

         {{Form::label('body','Body:')}}
         {{Form::textarea('body',null,['class' =>'form-control','id'=>'emailsize'])}}
         <br>
         {{Form::submit('Save Changes',['class' =>'btn btn-success btn-block','id'=>'emailsize'])}}
         {!!Form::close()!!}
         <a href="{{route('dashboard.show-posts',$post->id)}}"><button class="btn btn-danger btn-block">Cancel Editing</button></a>
         </div>

 </div>
 <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection