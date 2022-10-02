@extends('responsable.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
            <img src="images/1569493323617.jfif" alt="dashboard" width="75" height="75">
                <div class="card">
                    <div class="card-header">
                        <h2>Responsable Gestion</h2>
                    </div>


                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                            <form action="/responsable" method="get">
                            <label>Recherche Avec Nom Responsabe</label>
                    <input type="search" name="search" id="matricule_project" class="form-control">
                        </div>
                        </form>
                    </div>
                    

                    <div class="card-body">
                        <a href="{{ url('/responsable/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>

                        
                        <br/>
                        
                        <br/>

                        

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Matricule</th>
                                        <th>Name</th>
                                        <th>Numtel</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($responsable as $index => $item)
                                    <tr>
                                        <td>{{ $index + $responsable->firstItem() }}</td>
                                        <td>{{ $item->matricule }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->numtel }}</td>
                                        <td>{{ $item->department }}</td>
  
                                        <td>
                                            <a href="{{ url('/responsable/' . $item->matricule) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/responsable' . '/' . $item->matricule . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/responsable' . '/' . $item->matricule) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick='return confirm("Confirm delete?") '><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $responsable->links() }}
                        </div>
                        <div class="card-body">
                        <a href="{{ url('/responsable') }}" class="btn btn-success btn-sm" title="Add New Following">
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