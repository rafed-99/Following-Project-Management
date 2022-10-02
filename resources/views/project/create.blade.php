@extends('project.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Project</div>
  <div class="card-body">
  <a href="{{ url('/project/create') }}" class="btn btn-success " title="Add New Following">
                            Reset
                        </a></br>
      <form action="{{ url('project') }}" method="post">
        {!! csrf_field() !!}

        
        <label>Matricule Project </label></br>
        <input type="text" name="matricule_project" id="matricule_project" class="form-control"></br>
        <label>Project Name</label></br>
        <input type="text" name="project_name" id="project_name" class="form-control"></br>
        <label>Project Description</label></br>
        <input type="text" name="project_description" id="project_description" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success">   <a href="{{ url('/project') }}" class="btn btn-success " title="Add New Following">
                            Retour
                        </a></br>
    </form>
    
  </div>
</div>
  
@stop