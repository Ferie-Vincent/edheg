@extends('back.app')

@section('title', 'Gestion des Évènements')

@section('section-name', 'Gestion des Évènements')

@section('content')



    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listes des cours</h3>
                <div class="card-tools">
                    <a href="{{ route('events.create') }}" class="btn btn-primary btn-sm"> <i class="fas fa-plus mr-2"></i>
                        Ajouter un
                        cours</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Début d'évènement</th>
                            <th>Fin d'évènement</th>
                            <th>Début de l'évènement</th>
                            <th>Lieu de l'évènement</th>
                            <th>Statut</th>
                            <th>Formateur</th>
                            <th>Emploi</th>
                            <th>Société actuelle</th>
                            <th>Lien LinkedIn</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $index => $event)
                            {{-- @dd($event) --}}

                            <tr>
                                <td>{{ $index + 1 + ($events->currentPage() - 1) * $events->perPage() }}</td>
                                <td>{{ $event->type }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{!! Str::words(strip_tags($event->description), 10, '...') !!}</td>
                                <td>{{ $event->start_date }}</td>
                                <td>{{ $event->end_date }}</td>
                                <td>{{ $event->start_time }}</td>
                                <td>{{ $event->localisation }}</td>
                                <td class="project-state">
                                    <span class="badge {{ $event->status === 1 ? 'badge-success' : 'badge-danger' }}">
                                        {{ $event->status === 1 ? 'Actif' : 'Inactif' }}
                                    </span>
                                </td>
                                <td>{{ $event->formateur }}</td>
                                <td>{{ $event->emploi }}</td>
                                <td>{{ $event->societe_actuelle }}</td>
                                <td>{{ $event->linked }}</td>
                                <td class="project-actions d-flex">
                                    <a class="btn btn-warning btn-xs mr-2" href="{{ route('events.edit', $event->id) }}">
                                        <i class="fas fa-pencil-alt"></i> Modifier
                                    </a>
                                    <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs"
                                            onclick="return confirm('Etes-vous sûr de vouloir supprimer cet événement ?')">
                                            <i class="fas fa-trash"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Affichage des liens de pagination -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $events->links('vendor.pagination.bootstrap-4') }}
                </div>

            </div>
        </div>

    </section>

@endsection
