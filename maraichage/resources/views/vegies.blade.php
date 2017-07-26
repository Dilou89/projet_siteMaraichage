@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		            <div class="retour">
                <a href="/admin" class="btn btn-danger"><i class="fa fa-backward" aria-hidden="true"></i>
                Retour Menu</a>
            </div>
			<h3>Mes légumes</h3>

			<div class="panel panel-default">
				<div class="panel-heading">Ajouter un Légume</div>
				<div class="panel-body">
					<form id="vegieForm" action="/legumes/create" method="post" class="form-horizontal">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="control-label col-sm-2" for="addVegie">Nom</label>

							<div class="col-sm-10">
								<input id="addVegie" type="text" name="name" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="title">Saison(s)</label>
							<div class="col-xs-offset-1">
								<label class="checkbox-inline">
									<input name="sp" type="checkbox" id="sp"> Printemps
								</label>
								<label class="checkbox-inline">
									<input name="su" type="checkbox" id="su"> Été
								</label>
								<label class="checkbox-inline">
									<input name="au" type="checkbox" id="au"> Automne
								</label>
								<label class="checkbox-inline">
									<input name="wi" type="checkbox" id="wi"> Hiver
								</label>
							</div>
						</div>
					</form>
				</div>
				<div class="panel-footer">
					<button id="subm" class="btn btn-success" type="submit"> <i class="fa fa-plus" aria-hidden="true"></i> Ajouter légume a la base</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Gérer les légumes présents</div>
				<div class="panel-body">
					<table class="table table-striped">
						<tr>
							<td id="supprimerCol">Sup.</td>
							<td>Nom</td>
							<td>Pri</td>
							<td>Eté</td>
							<td>Aut</td>
							<td>Hiv</td>
						</tr>
						@foreach($vegies as $key => $vegie)
						<tr>
							<td><i class="fa fa-times deleteVegie" href="/legumes/suppr/{{ $vegie->id }}" name="{{ $vegie->name }}"></i></td>
							<td>{{ $vegie->name }}</td>
							<td>
								@if($vegiesSeasons[$key][0])
								&#10003
								@else
								-
								@endif
							</td>
							<td>
								@if($vegiesSeasons[$key][1])
								&#10003
								@else
								-
								@endif
							</td>
							<td>
								@if($vegiesSeasons[$key][2])
								&#10003
								@else
								-
								@endif
							</td>
							<td>
								@if($vegiesSeasons[$key][3])
								&#10003
								@else
								-
								@endif
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')

    <script src="{{ asset('js/vegies.js') }}"></script>


@endsection

@section('css')
<style>
i:hover {
	cursor: pointer;
}

</style>

@endsection
