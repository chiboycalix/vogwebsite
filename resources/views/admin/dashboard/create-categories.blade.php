@extends('admin.layout')

@section('title',' | Create Categories')

@section('content')

<div class="container">
	<div class="row">
	<div class="col-md-5 col-md offset-1" id="showcat">
	<h4 style="text-align: center; font-weight: bold;">Categories</h1>
		<table class="table">
		 <thead>
		 	<tr>
		 		<th>S/N</th>
				 <th>Name</th>
				 <th>Icon</th>
				 <th>Action</th>
		 	</tr>
		 </thead>
		 <tbody>
		 @foreach($categories as $category)
		 	<tr>
		 		<th>{{$category->id}}</th>
				 <td>{{$category->name}}</td>
				 <td>  <img src="/storage/category/{{$category->photo}}" alt="" style="width: 50px; height: 50px;"></td>
				 <td><a href="{{route('dashboard.edit-categories',$category->id)}}"><button class=" btn-sm">Edit</button></a></td>
		 	</tr>
		 	@endforeach
		 </tbody>

		</table>
	</div>
	<div class="col-md-5" id="createcat">
	<form action="{{route('dashboard.store-categories')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" name="name" id="name">
			</div>
			<div class="form-group">
					<label for="photo">Image</label>
					<input type="file" class="form-control" name="photo" id="photo">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Category</button>
				</div>
	    </form>
	</div>
</div>
</div>
@endsection