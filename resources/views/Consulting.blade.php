{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('content', 'Content:') }}
			{{ Form::text('content') }}
		</li>
		<li>
			{{ Form::label('Time', 'Time:') }}
			{{ Form::text('Time') }}
		</li>
		<li>
			{{ Form::label('is_viwe', 'Is_viwe:') }}
			{{ Form::text('is_viwe') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}