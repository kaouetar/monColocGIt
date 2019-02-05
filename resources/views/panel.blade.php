@extends('layouts.app')
@section('myCss')
<link href="{{ asset('css/myCss.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>


                    @endif

                    {!! Form::open(['url' => 'create/post/add']) !!}
						<div class="form-group">
                                {{Form::label('Titre',"Titre de l'offre")}}
                                {{Form::text('Titre','',['class' => 'form-control' , 'placeholder' => 'Titre' ] )}}
                            <br>
                                {{Form::label('Nombre de personnes','Nombre de colocataires')}}
							    {{Form::text('NombrePersonnes','',['class' => 'form-control' , 'placeholder' => 'Nombre de personnes' ] )}}
                            <br>
                                <fieldset>
								{{Form::label('Description','Description')}}
								{{Form::textarea('Description','',['class' => 'form-control' , 'placeholder' => 'Décrivez votre offre' ] )}}
							</fieldset>
								<br>
                <fieldset>
{{Form::label('Adresse','Adresse')}}
{{Form::textarea('Adresse','',['class' => 'form-control' , 'placeholder' => 'Votre adresse ' ] )}}
</fieldset>
							<div class="text-center">
								<br>
                <button type="submit" style="background-color:#f7c8aa; margin-left: 70px;" class="btn btn">
                    {{ __('Créer Offre') }}
                </button>

							</div>
						</div>

					{!! Form::close() !!}


                </div>

            </div>
        </div>
    </div>

</div>
@endsection
