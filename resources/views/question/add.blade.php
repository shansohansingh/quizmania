@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add question') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('add-question') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total-answers" class="col-md-4 col-form-label text-md-right">{{ __('Total Answers') }}</label>

                            <div class="col-md-6">
                                <input type="number" id="total-answers" class="form-control @error('total-answers') is-invalid @enderror" name="total-answers" required>

                                @error('total-answers')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="correct-answers" class="col-md-4 col-form-label text-md-right">{{ __('Correct Answers') }}</label>

                            <div class="col-md-6">
                                <input id="correct-answers" type="number" class="form-control @error('correct-answers') is-invalid @enderror" name="correct-answers" required>

                                @error('correct-answers')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
