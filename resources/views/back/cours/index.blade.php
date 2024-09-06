@extends('back.app')

@section('title', 'Bref descriptif des cours')

@section('section-name', 'Bref descriptif des cours')

@section('content')


    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listes des cours</h3>
                <div class="card-tools">
                    <a href="{{ route('cours.create') }}" class="btn btn-primary btn-sm"> <i class="fas fa-plus mr-2"></i>
                        Ajouter un
                        cour</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 60%">
                                Nom du cours
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 10%" class="text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cours as $index => $cour)
                            <tr>
                                <td>
                                    {{ $index + 1 }}
                                </td>
                                <td>
                                    <a>
                                        {{ $cour->nom }}
                                    </a>
                                </td>
                                <td class="project-state">
                                    <span class="badge {{ $cour->status === 1 ? 'badge-success' : 'badge-danger' }}">
                                        {{ $cour->status === 1 ? 'Actif' : 'Inactif' }}
                                    </span>

                                </td>
                                <td class="project-actions d-flex">
                                    <a class="btn btn-warning btn-xs mr-2" href="{{ route('cours.edit', $cour->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Modifier
                                    </a>
                                    <form action="{{ route('cours.destroy', $cour->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs"
                                            onclick="return confirm('Etes-vous sur de vouloir supprimer ce cours ?')">
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
