@extends ('bloglayout.master')

@section ('content')
	<div class="col-sm-8 blog-main">
		<h1>Create blog post here</h1>

		<hr/>

	<form action="/posts" method="POST">
	{{ csrf_field() }}
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
	  </div>
	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea type="password" class="form-control" id="body" name="body" placeholder="Body"></textarea>
	  </div>
  	<button type="submit" class="btn btn-default">Submit</button>
  	@include ('bloglayout.errors')
</form>
	</div>
@endsection