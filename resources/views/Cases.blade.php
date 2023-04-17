{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('casename', 'Casename:') }}
			{{ Form::text('casename') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::text('description') }}
		</li>
		<li>
			{{ Form::label('Time', 'Time:') }}
			{{ Form::text('Time') }}
		</li>
		<li>
			{{ Form::label('place', 'Place:') }}
			{{ Form::text('place') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}