@extends('admin.layout')

@section('title',' | Create Categories')

@section('content')

<div class="row" id="posts">
	<div class="col-md-4 col-md offset-2">
	<h1>Categories</h1>
		<table class="table">
		 <thead>
		 	<tr>
		 		<th>#</th>
		 		<th>Name</th>
		 	</tr>
		 </thead>
		 <tbody>
		 @foreach($categories as $category)
		 	<tr>
		 		<th>{{$category->id}}</th>
		 		<td>{{$category->name}}</td>
		 	</tr>
		 	@endforeach
		 </tbody>

		</table>
	</div>
	<div class="col-md-4">
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
@endsection