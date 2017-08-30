@extends('layouts.master')

@section('title')
	Posts
@endsection

@section('content')
	<div class="container wrapper">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3">
				
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h5>{{ $post->title }}</h5>
					</div>
					<div class="panel-body">
						<p>{{ $post->body }}</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
				
			</div>
		</div>
	</div>
@endsection

