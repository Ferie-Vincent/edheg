@extends('back.app')

@section('title', 'Les professeurs')

@section('section-name', 'Les professeurs')

@section('content')

    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listes des profs</h3>
                <div class="card-tools">
                    <a href="{{ route('back.profs.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus mr-2"></i>
                        Ajouter un Prof
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th>
                                Nom du professeur
                            </th>
                            <th class="text-center">
                                Filière
                            </th>
                            <th class="text-center">
                                Niveau
                            </th>
                            <th class="text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profs as $index => $prof)
                            <tr>
                                <td>
                                    {{ $index + 1 }}
                                </td>
                                <td>
                                    <a>
                                        {{ $prof->nom }}
                                    </a>
                                </td>
                                <td class="project-state">
                                    {{ $prof->filiere }}
                                </td>
                                <td class="project-state">
                                    {{ $prof->niveau }}
                                </td>
                                <td class="d-flex justify-content-center">
                                    <a class="btn btn-warning btn-xs mr-2" href="{{ route('profs.edit', $prof->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Modifier
                                    </a>
                                    <form action="{{ route('profs.destroy', $prof->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs"
                                            onclick="return confirm('Etes-vous sur de vouloir supprimer ce profs ?')">
                                            <i class="fas fa-trash">
                                            </i>
                                            Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </section>

@endsection
