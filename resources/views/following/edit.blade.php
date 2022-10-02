@extends('project.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Project</div>
  <div class="card-body">
       
      <form action="{{ url('following/' .$projectFollowing->id_following) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        

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
          <input type="text" name="cout" id="cout" class="form-control" value="{{$projectFollowing->cout}}"></br>
          <label>DAMI</label></br>
          <input type="text" name="dami" id="dami" class="form-control" value="{{$projectFollowing->dami}}"></br>
          <label>Offre</label></br>
          <input type="text" name="offre" id="offre" class="form-control" value="{{$projectFollowing->offre}}"></br>
          <label>Contact</label></br>
          <input type="text" name="contact" id="contact" class="form-control" value="{{$projectFollowing->contact}}"></br>
          <label>Stage</label></br>
          <input type="text" name="stage" id="stage" class="form-control" value="{{$projectFollowing->stage}}"></br>
          <input type="submit" value="Update" class="btn btn-success">   <a href="{{ url('/following') }}" class="btn btn-success " title="Add New Following">
                            Retour
                        </a></br></br>
    </form>
    
  </div>
</div>
  
@stop