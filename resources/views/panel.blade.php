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
                                {{Form::label('Titre','Titre de l\'article')}}
                                {{Form::text('Titre','',['class' => 'form-control' , 'placeholder' => 'Titre de l\'article' ] )}}
                            <br>
                                {{Form::label('Auteur','Nom de l\'auteur')}}
							    {{Form::text('Auteur','',['class' => 'form-control' , 'placeholder' => 'Nom de l\'auteur' ] )}} 
                            <br>
                                <fieldset>
								{{Form::label('Contenu','Contenu')}}
								{{Form::textarea('Contenu','',['class' => 'form-control' , 'placeholder' => 'Votre texte...' ] )}}
							</fieldset>
								<br>
							<div class="text-center">
								<br>
								{{form::submit('Submit',['class' => 'btn-block main-btn'])}}

							</div>
						</div>

					{!! Form::close() !!}
                   
                    
                </div>
        
            </div>
        </div>
    </div>
    
</div>
@endsection
