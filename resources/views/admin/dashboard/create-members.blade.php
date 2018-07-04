@extends('admin.layout')

@section('title' ,'| Create Members')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker.min.css">

{{Html::script('https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js')}}

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10" style="position:relative; left:10%;">
                    <div class="card text-center" style="margin-top:100px; margin-bottom:100px;">
                        <div class="card-header">
                           <h2>Vog Registration Page</h2>
                        </div>
                <div class="card-body">
                <form action="{{route('dashboard.store-members')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                       <div class="row">
                           <div class="col-md-2">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                </div>
            </div>

            <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                     <label for="email">Email</label>
                 </div>
                 <div class="col-md-10">
                     <input type="text" name="email" class="form-control" id="email">
                 </div>
             </div>
         </div>

         <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                 <label for="number">Phone Number</label>
             </div>
             <div class="col-md-10">
                 <input type="text" name="number" class="form-control" id="number">
             </div>
         </div>
         </div>

         <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                 <label for="dob">Date of Birth</label>
             </div>
             <div class="col-md-10">
                 <input type="text" name="dob" class="date form-control" id="dob" placeholder="mm/dd/yyyy">
             </div>
         </div>
        </div>

        <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                 <label for="address">Address</label>
             </div>
             <div class="col-md-10">
                 <input type="text" name="address" class="form-control" id="address">
             </div>
         </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-md-2">
            <label for="photo">Dispaly Photo</label>
        </div>
        <div class="col-md-10">
            <input type="file" class="form-control" name="photo" id="photo">
        </div>
         </div>
        </div>
        <div class="form-group">
            <div class="row">
         <div class="col-md-2">
             <label for="biography">Biography</label>
        </div>
        <div class="col-md-10">
        <textarea name="biography" id="biography" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-success pull-right">Save</button>
        </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
        <script>
            CKEDITOR.replace( 'biography' );
            $('.date').datepicker({

                       format: 'mm/dd/yyyy',
                       todayHighlight: true,
                       autoclose: true,

                     });
        </script>

@endsection