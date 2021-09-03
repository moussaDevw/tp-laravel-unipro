<head>
	<title>
		@section('title')
		MyApp -
		@show

	<title/>
</head>
<body>

	<div>
		<a href="{{route('hello')}}">Hello</a>
		<a href="{{route('notes')}}">Notes</a>
	</div>
	@yield('content')
</body>
