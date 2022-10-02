@extends('following.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
            <img src="images/1569493323617.jfif" alt="dashboard" width="75" height="75">
                <div class="card">
                    <div class="card-header">
                        <h2>following Gestion</h2>
                    </div>

                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                            <form action="/following" method="get">
                                <label>Recherche Avec DAMI</label>
                    <input type="search" name="search" id="matricule_project" class="form-control" >
                        </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/following/create') }}" class="btn btn-success btn-sm" title="Add New Following">
                            Add New
                        </a>
                        <br/>
                        <br/>

                        

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Id Following</th>
                                        <th>Project</th>
                                        <th>Responasble</th>
                                        <th>Cout</th>
                                        <th>DAMI</th>
                                        <th>Offre</th>
                                        <th>Contact</th>
                                        <th>Stage</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($following as $index => $item)
                                    <tr>
                                        <td>{{ $index + $following->firstItem() }}</td>
                                        <td>{{ $item->id_following }}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->project_name }}</td>
                                        <td>{{ $item->cout }}</td>
                                        <td>{{ $item->dami }}</td>
                                        <td>{{ $item->offre }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>{{ $item->stage }}</td>
                                        
                                        <td>
                                            <a href="{{ url('/following/' . $item->id_following) }}" title="View following"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/following' . '/' . $item->id_following . '/edit') }}" title="Edit following"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/following' . '/' . $item->id_following) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete following" onclick='return confirm("Confirm following?") '><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $following->links() }}
                        </div>
                        <div class="card-body">
                        <a href="{{ url('/following') }}" class="btn btn-success btn-sm" title="Add New Following">
                            Retour
                        </a>
                        <a href="{{ url('/dashboard') }}" class="btn btn-success btn-sm" title="Add New Following">
                            Dashboard
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection