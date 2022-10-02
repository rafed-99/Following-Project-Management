@extends('following.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New following</div>
  <div class="card-body">
  <a href="{{ url('/following/create') }}" class="btn btn-success " title="Add New Following">
                            Reset
                        </a></br>
      <form action="{{ url('following') }}" method="post">
        {!! csrf_field() !!}

        <div class='form-group'>

        
          <label>Project</label></br>
              <select class="form-group" name="matricule_pro">
              @foreach($proj as $p)
              <option value="{{$p->matricule_project}}">{{$p->project_name}}</option>
              @endforeach
          </select></br>
        <label>Responsable</label></br>
          <select class="form-group" name="matricule_responsable">
              @foreach($resp as $r)
              <option value="{{$r->matricule}}">{{$r->name}}</option>
              @endforeach
              </select></br>
          <label>Cout</label></br>
          <input type="text" name="cout" id="cout" class="form-control"></br>
          <label>DAMI</label></br>
          <input type="text" name="dami" id="dami" class="form-control"></br>
          <label>Offre</label></br>
          <input type="text" name="offre" id="offre" class="form-control"></br>
          <label>Contact</label></br>
          <input type="text" name="contact" id="contact" class="form-control"></br>
          <label>Stage</label></br>
          <input type="text" name="stage" id="stage" class="form-control"></br>
        </div>
        
        <input type="submit" value="Save" class="btn btn-success">   <a href="{{ url('/following') }}" class="btn btn-success " title="Add New Following">
                            Retour
                        </a></br></br>
    </form>
    
  </div>
</div>
  
@stop