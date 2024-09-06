@extends('back.app')

@section('title', 'FAQs')

@section('section-name', 'FAQs')

@section('content')

    <div class="container">

        <div class="content mb-5">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">
                        {{ isset($faq) ? 'Modification de la question' : 'Ajout d\'une question' }}
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($faq) ? route('faqs.update', $faq->id) : route('faqs.store') }}" method="POST">

                        @csrf
                        @if (isset($faq))
                            @method('PUT')
                        @endif

                        <div class="form-group row mb-4">
                            <label for="question" class="col-sm-2 col-form-label">Question :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="question" name="question"
                                    value="{{ old('question', $faq->question ?? '') }}">
                                @error('question')
                                    <span class="text-danger mb-4">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="response" class="col-sm-2 col-form-label">Réponse :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="response" name="response" rows="10" placeholder="Enter ...">{{ old('response', $faq->response ?? '') }}</textarea>
                                @error('response')
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
