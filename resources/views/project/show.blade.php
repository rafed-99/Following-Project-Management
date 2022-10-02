@extends('project.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Project Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Project Name : {{ $project->project_name }}</h5>
        <p class="card-text">Project Description : {{ $project->project_description }}</p>
        <a href="{{ url('/project') }}" class="btn btn-success " title="Add New Following">
                            Retour
                        </a></br>
  </div>
    </hr>
  </div>
</div>