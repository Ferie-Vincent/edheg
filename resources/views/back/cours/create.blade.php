@extends('back.app')

@section('title', isset($cour) ? 'Modification du cours' : 'Création d\'un cours')

@section('section-name', isset($cour) ? 'Modification du cours' : 'Création d\'un cours')

@section('content')

    <div class="container">
        <div class="content">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title mt-1">{{ isset($cour) ? 'Modification du cours' : 'Création d\'un cours' }}</h3>
                </div>
                <form class="form-horizontal" method="POST"
                    action="{{ isset($cour) ? route('cours.update', $cour->id) : route('cours.store') }}">
                    @csrf
                    @if (isset($cour))
                        @method('PUT')
                    @endif
                    <div class="card-body mt-4">
                        <div class="form-group row mb-3">
                            <label for="nom" class="col-sm-2 col-form-label">Nom du cours</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nom"
                                    placeholder="IDA - Développeur Web" name="nom" control-id="nom"
                                    value="{{ old('nom', $cour->nom ?? '') }}">
                                @error('nom')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <div class="custom-control custom-checkbox col-sm-10 offset-sm-2">
                                <input type="checkbox" class="custom-control-input" id="status" name="status"
                                    value="1" @checked((isset($cour) ? $cour->status : old('status')) == 1)>
                                <label class="custom-control-label" for="status">Activer</label>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <div class="custom-control custom-switch col-sm-10 offset-sm-2">
                                <input type="hidden" name="status" value="0">
                                <input type="checkbox" class="custom-control-input" id="statusSwitch" name="status"
                                    value="1" @checked((isset($cour) ? $cour->status : old('status')) == 1)>
                                <label class="custom-control-label" for="statusSwitch">Activer</label>
                            </div>
                        </div>




                    </div>

                    <div class="card-footer">
                        <a href="{{ url()->previous() }}" class="btn btn-default btn-sm" control-id="ControlID-8">Retour</a>
                        <button type="submit" class="btn btn-primary btn-sm float-right " name="submit"
                            control-id="ControlID-9">{{ isset($cour) ? 'Modifier' : 'Enregistrer' }}</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
