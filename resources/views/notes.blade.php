@extends('Layouts.parent')

@section('title')
	@parent
	Listes des notes
@endsection

@section('content')
<ul>
	@forelse ($notes as $note)
	<li>
		{{$note}} est
		@if($note >=10)
			superieure ou egale
		@else
			inferieure
		@endif
		  à 10
	</li>
	@empty
	<li>Loading...</li>
	@endforelse
</ul>
 @endsection