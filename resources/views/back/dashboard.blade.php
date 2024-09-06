@extends('back.app')

@section('title', 'Tableau de bord')

@section('section-name', 'Photo du site')

@section('content')

    <div class="container-fluid">

        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Photo du site</h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <div class="container-fluid">
                            <div class="row">

                                @php
                                    // Définir les tailles d'image pour chaque section
$imageSizes = [
    'accueil' => 'Taille de la photo : 825 x 850',
    'about' => 'Taille de la photo : 700 x 500',
    'owner' => 'Taille de la photo : 735 x 552',
    'admissions' => 'Taille de la photo : 700 x 500',
                                    ];
                                @endphp

                                @foreach (['accueil', 'about', 'owner', 'admissions'] as $section)
                                    <div class="col-sm-3 mb-4">
                                        <div class="text-center">
                                            <span class="callout callout-success d-block mb-2">{{ ucfirst($section) }}
                                                <p class="text-danger font-weight-bold">({{ $imageSizes[$section] }})</p>
                                            </span>
                                            @php
                                                $image = $imagesBySection[$section]->last() ?? null;
                                                $imagePath = $image
                                                    ? asset('storage/uploads/' . $section . '/' . $image->image)
                                                    : 'https://placehold.co/500';
                                            @endphp
                                            <img src="{{ $imagePath }}" alt="{{ ucfirst($section) }} Image"
                                                class="img-fluid rounded callout callout-success"
                                                style="max-width: 100%; height: auto;"
                                                onerror="this.onerror=null; this.src='https://placehold.co/500';">
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="text-center">
                                @error('image')
                                    <p class="text-danger font-weight-bold">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                            Modifier l'image
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->

    <!-- Modal pour la gestion des images -->
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modifier l'image</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="upload-form" action="{{ route('images.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="image"
                                    required>
                                <label class="custom-file-label" for="inputGroupFile01">Choisissez la photo</label>
                            </div>
                        </div>

                        <hr class="my-4 w-50 bg-dark">

                        <div class="form-group text-center">
                            <span class="text-danger d-block mb-3 font-weight-bold">Veuillez choisir s'il vous plaît la
                                section concernée <sup>*</sup></span>

                            <div class="d-flex flex-wrap justify-content-center">
                                <!-- Radio 1 -->
                                <div class="custom-control custom-radio mx-2">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="section"
                                        value="accueil">
                                    <label for="customRadio1" class="custom-control-label">Image d'accueil</label>
                                </div>

                                <!-- Radio 2 -->
                                <div class="custom-control custom-radio mx-2">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="section"
                                        value="about">
                                    <label for="customRadio2" class="custom-control-label">Nous concernant</label>
                                </div>

                                <!-- Radio 3 -->
                                <div class="custom-control custom-radio mx-2">
                                    <input class="custom-control-input" type="radio" id="customRadio3" name="section"
                                        value="owner">
                                    <label for="customRadio3" class="custom-control-label">Le fondateur</label>
                                </div>

                                <!-- Radio 4 -->
                                <div class="custom-control custom-radio mx-2">
                                    <input class="custom-control-input" type="radio" id="customRadio4" name="section"
                                        value="admissions">
                                    <label for="customRadio4" class="custom-control-label">Les admissions</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Modifier la photo</button>
                    </div>
                </form>


            </div>
        </div>
    </div>

@endsection
