@extends('layouts.app')

@section('content')

    <div class="container">

        <!-- The justified navigation menu is meant for single line per list item.
             Multiple lines will require custom code not provided by Bootstrap. -->
        <div class="masthead">
            <h3 class="text-muted">Project name</h3>
            <nav>
                <ul class="nav nav-justified">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>

        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>{{$company->name}}</h1>
            <p class="lead">{{$company->description}}</p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
        </div>

        <!-- Example row of columns -->
        <div class="row">
            @foreach($company->projects as $project)
            <div class="col-lg-4">
                <h2>{{$project->name}}</h2>
                <p class="text-danger">{{$project->description}}</p>
                <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View details »</a></p>
            </div>
                @endforeach
        </div>

    </div>

@endsection