@extends('back.app')

@section('title', 'Foires aux Questions')

@section('section-name', 'Foires aux Questions')

@section('content')

    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listes des Questions</h3>
                <div class="card-tools">
                    <a href="{{ route('back.faqs.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus mr-2"></i>
                        Ajouter une question
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
                                Questions
                            </th>
                            <th>
                                Réponses
                            </th>
                            <th class="text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $index => $faq)
                            <tr>
                                <td>
                                    {{ $index + 1 }}
                                </td>
                                <td>
                                    <a>
                                        {{ $faq->question }}
                                    </a>
                                </td>
                                <td class="project-state">
                                    {!! Str::words(strip_tags($faq->response), 10, '...') !!}
                                </td>
                                <td class="d-flex justify-content-center">
                                    <a class="btn btn-warning btn-xs mr-2" href="{{ route('faqs.edit', $faq->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Modifier
                                    </a>
                                    <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs"
                                            onclick="return confirm('Etes-vous sur de vouloir supprimer ce faqs ?')">
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
