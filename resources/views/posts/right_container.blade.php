<aside>
	<div class="panel panel-default">
		<div class="panel-heading" id="bloggers">
			<h5>Active Bloggers</h5><span class="glyphicon glyphicon-chevron-down" id="blogger-list"></span>
		</div>
		<div class="panel-body" id="b-list">
			@foreach($users as $user)
				<p>{{ $user->firstname }} {{ $user->lastname }} {{ $user->othernames }}</p>
			@endforeach
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading" id="latests">
			<h5>Latest Posts</h5><span class="glyphicon glyphicon-chevron-down" id="latest-list"></span>
		</div>
		<div class="panel-body" id="l-list">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati fugiat culpa iusto quis delectus sequi repellat, architecto dolorum officia non quae magni deleniti doloribus nisi odit blanditiis id ut itaque.</p>
		</div>
	</div>
</aside>
