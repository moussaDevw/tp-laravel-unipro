<form action="{{route('update',['id'=>$apprenantToUpdate['id'] ]) }}" method="post">
	@csrf
	@method('PUT')
	<input name="nom" value="{{ $apprenantToUpdate['nom'] }}">
	<input name="age" value="{{ $apprenantToUpdate['age'] }}">
	<button type="submit">Mettre a jour</button>
	
</form>