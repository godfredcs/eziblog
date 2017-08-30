@extends('layouts.master')

@section('title')
	Posts
@endsection

@section('content')
<div class="container wrapper">
	<div class="row">
		<div class="col-sm-3 col-md-3">
			<div id="left-container">
				@include('posts.left_container')
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<form action="{{ url('/posts') }}" id="post-form" method="POST" role="form">
				{{ csrf_field() }}

				<div class="form-group">			
					<input type="text" name="title" id="title" placeholder="Title..." class="form-control" required>
				</div>

				<div class="form-group">			
					<textarea name="body" id="body" cols="30" rows="3" placeholder="Write your post here..." class="form-control" required></textarea>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-3 col-sm-offset-9 col-md-offset-9">				
							<input type="submit" id="submit" value="Post" class="btn btn-block btn-default">
						</div>
					</div>
				</div>
			</form>
			<div id="post-container">
				@include('posts.container')
			</div>
		</div>
		<div class="col-sm-3 col-md-3">
			<div id="right-container">
				@include('posts.right_container')
			</div>
		</div>
	</div>
	@include('partials.footer')
</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('js/Post.js') }}" ></script>
@endsection