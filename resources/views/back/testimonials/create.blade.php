@extends('back.app')

@section('title', 'Les témoignages')

@section('section-name', 'Les témoignages')

@section('content')

    <div class="container">

        <div class="content mb-5">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">
                        {{ isset($testimonial) ? 'Modification du témoignage' : 'Ajout d\'un témoignage' }}
                    </h3>
                </div>
                <div class="card-body">
                    <form
                        action="{{ isset($testimonial) ? route('testimonials.update', $testimonial->id) : route('testimonials.store') }}"
                        method="POST" enctype="multipart/form-data">

                        @csrf
                        @if (isset($testimonial))
                            @method('PUT')
                        @endif

                        <div class="form-group row mb-4">
                            <label for="name" class="col-sm-2 col-form-label">Nom & Prénoms :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $testimonial->name ?? '') }}">
                                @error('name')
                                    <span class="text-danger mb-4">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="summernote" class="col-sm-2 col-form-label">Témoignage :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="comment" rows="10" cols="50" placeholder="Enter ..."
                                    control-id="ControlID-13">{{ old('comment', $testimonial->comment ?? '') }}</textarea>
                                @error('comment')
                                    <span class="text-danger mb-4">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm float-right">Enregistrer</button>
                            <a href="{{ url()->previous() }}" class="btn btn-default btn-sm">Retour</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
