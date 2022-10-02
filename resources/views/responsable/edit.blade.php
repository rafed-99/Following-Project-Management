@extends('responsable.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Responsable</div>
  <div class="card-body">
       
      <form action="{{ url('responsable/' .$responsable->matricule) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="matricule" id="matricule" value="{{$responsable->matricule}}" id="matricule" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{$responsable->name}}"></br>
        <label>Numtel</label></br>
        <input type="text" name="numtel" id="numtel" class="form-control" value="{{$responsable->numtel}}" ></br>
        <label>Department</label></br>
        <input type="text" name="department" id="department" class="form-control" value="{{$responsable->department}}"></br>
        <input type="submit" value="Update" class="btn btn-success">   <a href="{{ url('/responsable') }}" class="btn btn-success " title="Add New Following">
                            Retour
                        </a></br></br>
    </form>
    
  </div>
</div>
  
@stop