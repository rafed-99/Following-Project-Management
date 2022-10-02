<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="card-body">
                    <table class="table">
                        <tr>
                        <td><a href="{{ url('/project') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <label>Gestion Projet</label>
                            <img src="images/Projet.jpg" alt="Project" width="400" height="400">
                        </a></td>
                        <td><a href="{{ url('/responsable') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <label>Gestion Responsable</label>
                            <img src="images/responsable.jpg" alt="Project" width="400" height="400">
                        </a></td>
                        <td><a href="{{ url('/following') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <label>Gestion Following</label>
                            <img src="images/ZBHiAGkViZIWKqOabID909bKacLIv9fWYoCVpqqp4oM.jpg" alt="Project" width="400" height="400">
                        </a></td>
                        </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
