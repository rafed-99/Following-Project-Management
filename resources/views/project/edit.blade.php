@extends('project.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Project</div>
  <div class="card-body">
       
      <form action="{{ url('project/' .$project->matricule_project) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="project_name" id="matricule_project" value="{{$project->matricule_project}}" id="matricule_project" />
        <label>Project Name</label></br>
        <input type="text" name="project_name" id="project_name" class="form-control" value="{{$project->project_name}}"></br>
        <label>Project Description</label></br>
        <input type="text" name="project_description" id="project_description" class="form-control" value="{{$project->project_description}}"></br>
        <input type="submit" value="Update" class="btn btn-success">   <a href="{{ url('/project') }}" class="btn btn-success " title="Add New Following">
                            Retour
                        </a></br></br>
    </form>
    
  </div>
</div>
  
@stop