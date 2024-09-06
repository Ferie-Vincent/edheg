@extends('back.app')

@section('title', isset($prof) ? 'Modification d\'un professeur' : 'Ajout d\'un Professeur')

@section('section-name', isset($prof) ? 'Modification d\'un professeur' : 'Création d\'un Professeur')

@section('content')


    <div class="container">

        <div class="content mb-5">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ isset($prof) ? 'Modification du Professeur' : 'Ajout d\'un Professeur' }}
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($prof) ? route('profs.update', $prof->id) : route('profs.store') }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @if (isset($prof))
                            @method('PUT')
                        @endif

                        <div class="form-group row mb-4">
                            <label for="type" class="col-sm-2 col-form-label">Nom & Prénoms :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="type" name="nom"
                                    value="{{ old('type', $prof->nom ?? '') }}">
                                @error('nom')
                                    <span class="text-danger mb-4">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-2 col-form-label">Filière :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="filiere"
                                    value="{{ old('title', $prof->filiere ?? '') }}">
                                @error('filiere')
                                    <span class="text-danger mb-4">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-2 col-form-label">Niveau :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="niveau"
                                    value="{{ old('title', $prof->niveau ?? '') }}">
                                @error('niveau')
                                    <span class="text-danger mb-4">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        @if (isset($prof) && $prof->image)
                            <div class="form-group row mb-4">
                                <label class="col-sm-2 col-form-label">Image actuelle :</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('storage/' . $prof->image) }}" alt="Image de l'événement"
                                        class="img-thumbnail" style="max-width: 200px;" name="image">
                                </div>
                            </div>
                        @endif

                        <!-- Image Upload -->
                        <div class="form-group row mb-4">
                            <label for="image" class="col-sm-2 col-form-label">Image :</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04" name="image">

                                        <label class="custom-file-label" for="inputGroupFile04">Choisir la photo
                                            d'illustration</label>
                                    </div>
                                    <br>
                                    @error('image')
                                        <span class=" text-danger mb-4">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm float-right">Enregistrer</button>
                            <a href="{{ url()->previous() }}" class="btn btn-default btn-sm"
                                control-id="ControlID-8">Retour</a>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>

@endsection
