@extends('back.app')

@section('title', isset($event) ? 'Modification de l\'événement' : 'Création d\'un évènement')

@section('section-name', isset($event) ? 'Modification de l\'événement' : 'Création d\'un évènement')

@section('content')


    <div class="container mb-5">

        <div class="content mb-5">
            <div class="card card-secondary mb-5">
                <div class="card-header">
                    <h3 class="card-title">{{ isset($event) ? 'Modification de l\'événement' : 'Création d\'un événement' }}
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($event) ? route('events.update', $event->id) : route('events.store') }}"
                        method="POST" enctype="multipart/form-data">

                        @csrf
                        @if (isset($event))
                            @method('PUT')
                        @endif

                        <!-- Type -->
                        <div class="form-group row mb-4">
                            <label for="type" class="col-sm-2 col-form-label">Type :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="type" name="type"
                                    value="{{ old('type', $event->type ?? '') }}">
                                @error('type')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Title -->
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-2 col-form-label">Titre :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title', $event->title ?? '') }}">
                                @error('title')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="form-group row mb-4">
                            <label for="summernote" class="col-sm-2 col-form-label">Description :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" rows="10" cols="50" placeholder="Enter ..."
                                    control-id="ControlID-13">{{ old('comment', $event->description ?? '') }}</textarea>
                                @error('comment')
                                    <span class="text-danger mb-4">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Start Date -->
                        <div class="form-group row mb-4">
                            <label for="start_date" class="col-sm-2 col-form-label">Date de début :</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="start_date" name="start_date"
                                    value="{{ old('start_date', $event->start_date ?? '') }}">
                                @error('start_date')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- End Date -->
                        <div class="form-group row mb-4">
                            <label for="end_date" class="col-sm-2 col-form-label">Date de fin :</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="end_date" name="end_date"
                                    value="{{ old('end_date', $event->end_date ?? '') }}">
                                @error('end_date')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Start Time -->
                        <div class="form-group row mb-4">
                            <label for="start_time" class="col-sm-2 col-form-label">Heure de début :</label>
                            <div class="col-sm-10">
                                <input type="time" class="form-control" id="start_time" name="start_time"
                                    value="{{ old('start_time', $event->start_time ?? '') }}">
                                @error('start_time')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="form-group row mb-4">
                            <label for="localisation" class="col-sm-2 col-form-label">Lieu :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="localisation" name="localisation"
                                    value="{{ old('localisation', $event->localisation ?? '') }}">
                                @error('localisation')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="localisation" class="col-sm-2 col-form-label">Formateur :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="localisation" name="formateur"
                                    value="{{ old('formateur', $event->formateur ?? '') }}">
                                @error('formateur')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="localisation" class="col-sm-2 col-form-label">Emploi :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="emploi" name="emploi"
                                    value="{{ old('emploi', $event->emploi ?? '') }}">
                                @error('emploi')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="localisation" class="col-sm-2 col-form-label">Société actuelle :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="societe_actuelle" name="societe_actuelle"
                                    value="{{ old('societe_actuelle', $event->societe_actuelle ?? '') }}">
                                @error('societe_actuelle')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="localisation" class="col-sm-2 col-form-label">Profil LinkedIn :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="linked" name="linked"
                                    value="{{ old('linked', $event->linked ?? '') }}">
                                @error('linked')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        @if (isset($event) && $event->image)
                            <div class="form-group row mb-4">
                                <label class="col-sm-2 col-form-label">Image actuelle :</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="Image de l'événement"
                                        class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            </div>
                        @endif

                        <!-- Image Upload -->
                        <div class="form-group row mb-4">
                            <label for="image" class="col-sm-2 col-form-label">Image de l'évènement :</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04" name="image" accept="image/*">
                                        @error('image')
                                            <p class="mt-2 text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="custom-file-label" for="inputGroupFile04">Choisir la photo
                                            d'illustration</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="custom-control custom-switch col-sm-10 offset-sm-2">
                                <input type="hidden" name="status" value="0">
                                <input type="checkbox" class="custom-control-input" id="statusSwitch" name="status"
                                    value="1" @checked((isset($event) ? $event->status : old('status')) == 1)>
                                <label class="custom-control-label" for="statusSwitch">Activer</label>
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
