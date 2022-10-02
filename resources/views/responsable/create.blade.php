@extends('responsable.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Responsable</div>
  <div class="card-body">
  <a href="{{ url('/responsable/create') }}" class="btn btn-success " title="Add New Following">
                            Reset
                        </a></br>
      <form action="{{ url('responsable') }}" method="post">
        {!! csrf_field() !!}
        <label>Matricule</label></br>
        <input type="text" name="matricule" id="matricule" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Numtel</label></br>
        <input type="text" name="numtel" id="numtel" class="form-control"></br>
        <label>Department</label></br>
        <input type="text" name="department" id="department" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success">   <a href="{{ url('/responsable') }}" class="btn btn-success " title="Add New Following">
                            Retour
                        </a></br></br>
    </form>
    
  </div>
</div>
  
@stop