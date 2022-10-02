@extends('responsable.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Responsable Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $responsable->name }}</h5>
        <p class="card-text">Numtel : {{ $responsable->numtel }}</p>
        <p class="card-text">Department : {{ $responsable->department }}</p>
        <a href="{{ url('/responsable') }}" class="btn btn-success " title="Add New Following">
                            Retour
                        </a></br>
  </div>
    </hr>
  </div>
</div>