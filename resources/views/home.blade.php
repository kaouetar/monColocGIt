@extends('layouts.app')
@section('myCss')
<link href="{{ asset('css/myCss.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="container">
    @foreach($data as $article)

    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header">{{$article->Titre}} - <span class="auteur">Par {{$article->Auteur}} - {{ date('d M y H:m', strtotime($article->created_at)) }}  </span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>

                        
                    @endif

                    <p>{{$article->Contenu}}</p>
                   
                    
                </div>
        
            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection
