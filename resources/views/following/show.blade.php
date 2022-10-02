@extends('following.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Following Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Project Name : {{ $projectFollowing->project_name }}</h5>
        <p class="card-text">Responsable : {{ $projectFollowing->name }}</p>
        <p class="card-text">Cout : {{ $projectFollowing->cout }}</p>
        <p class="card-text">DAMI : {{ $projectFollowing->dami }}</p>
        <p class="card-text">Offre : {{ $projectFollowing->offre }}</p>
        <p class="card-text">Contact : {{ $projectFollowing->contact }}</p>
        <p class="card-text">Stage : {{ $projectFollowing->stage }}</p>
        <a href="{{ url('/following') }}" class="btn btn-success " title="Add New Following">
                            Retour
                        </a></br>
  </div>
  </div>
    </hr>
  </div>
</div>