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
        <div class="row">
            <div class="col-lg-9 col-md-9">
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
                            <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View details
                                    »</a></p>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-md-3 col-lg-3 col-sm-3">
                <div class="sidebar-module">
                    <h4>Actions</h4>
                    <ol class="list-unstyled">
                        <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
                        <li><a href="#">Delete</a></li>
                        <li><a href="#">Add new member</a></li>
                        <li><a href="/projects/create">Add project</a></li>
                        <li>
                            <a href="#" onclick="
var result=confirm('Are you sure you wish to delete this project?');
if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
}">Delete</a>
                        </li>
                        <form id="delete-form" action="{{route('companies.destroy',[$company->id])}}" method="POST"
                              style="display:none;">
                            <input type="hidden" name="_method" value="delete">
                            {{csrf_field()}}
                        </form>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Members</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>

@endsection