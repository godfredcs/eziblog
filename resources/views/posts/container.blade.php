<div>
	@foreach($posts as $post)
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5><a href="{{ url('/posts') .'/'. $post->id }}">{{ $post->title }}</a></h5>
			</div>
			<div class="panel-body">
				<div class="posting">
					<small>
						<i>posted by 
							{{ $post->user->firstname }} {{ $post->user->lastname }} {{ $post->user->othernames }} - 
							{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
						</i>
					</small>
					@if(Auth::id() === $post->user_id)
						<small>
							<a href="#" class="edit">Edit</a>
							<a href="{{ url('/posts') .'/'. $post->id }}" class="delete">
								Delete
							</a>
						</small>
					@endif
				</div>
				<hr>
				<p>{{ $post->body }}</p>
			</div>
		</div>	
	@endforeach

	<div>
		<center>{{ $posts->links() }}</center>
	</div>
</div>