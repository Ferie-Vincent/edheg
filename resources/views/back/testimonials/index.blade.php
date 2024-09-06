@extends('back.app')

@section('title', 'Les témoignages')

@section('section-name', 'Les témoignges')

@section('content')

    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listes des Témoignages</h3>
                <div class="card-tools">
                    <a href="{{ route('back.testimonials.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus mr-2"></i>
                        Ajouter un témoignage
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
                                Nom & PRénoms de l'alumni
                            </th>
                            <th>
                                Témoignage
                            </th>
                            <th class="text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $index => $testimonial)
                            <tr>
                                <td>
                                    {{ $index + 1 }}
                                </td>
                                <td>
                                    <a>
                                        {{ $testimonial->name }}
                                    </a>
                                </td>
                                <td>
                                    {!! Str::words(strip_tags($testimonial->comment), 10, '...') !!}
                                </td>
                                <td class="d-flex justify-content-center">
                                    <a class="btn btn-warning btn-xs mr-2"
                                        href="{{ route('testimonials.edit', $testimonial->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Modifier
                                    </a>
                                    <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs"
                                            onclick="return confirm('Etes-vous sur de vouloir supprimer ce testimonials ?')">
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
