@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    <strong>Success</strong>: {{Session::get('success')}}
 </div>
@endif
@if(count($errors) > 0)
<div class="alert alert-danger">
<ul>
    <strong>Errors: </strong>
     @foreach($errors as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
</div>
@endif

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
