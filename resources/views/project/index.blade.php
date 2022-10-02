@extends('project.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
            
                <img src="images/1569493323617.jfif" alt="dashboard" width="75" height="75">
                        
                <div class="card">
                
                    <div class="card-header">
                        <h2>Project Gestion</h2>
                    </div>

                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                            <form action="/project" method="get">
                            <label>Recherche Avec Nom Projet</label>
                    <input type="search" name="search" id="matricule_project" class="form-control">
                        </div>
                        </form>
                    </div>

                    <div class="card-body">
                        <a href="{{ url('/project/create') }}" class="btn btn-success btn-sm" title="Add New Project">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Matricule Project</th>
                                        <th>Project Name</th>
                                        <th>Project Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($project as $index => $item)
                                    <tr>
                                        <td>{{ $index + $project->firstItem() }}</td>
                                        <td>{{ $item->matricule_project }}</td>
                                        <td>{{ $item->project_name }}</td>
                                        <td>{{ $item->project_description }}</td>
                                        <td>
                                            <a href="{{ url('/project/' . $item->matricule_project) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/project' . '/' . $item->matricule_project . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/project' . '/' . $item->matricule_project) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Project" onclick='return confirm("Confirm delete?") '><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $project->links() }}
                        </div>
                        <div class="card-body">
                        <a href="{{ url('/project') }}" class="btn btn-success btn-sm" title="Add New Following">
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