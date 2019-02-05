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
                <div class="card-header">{{$article->TITRE}} - <span class="auteur">Par {{$article->name}} - {{ date('d M y H:m', strtotime($article->DATECREATION)) }}  </span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>


                    @endif

                    <p> {{$article->DESCRIPTION}} </p>



                </div>

            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection
