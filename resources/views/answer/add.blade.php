@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Answer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('add-answer') }}">
                        @csrf
                        <input type='hidden' value="{{ $question->id}}" name="question-id">

                        <div class="form-group row">
                            <label for="option" class="col-md-4 col-form-label text-md-right">{{ __('Option 1') }}</label>

                            <div class="col-md-6">
                                <input id="option" type="text" class="form-control @error('option') is-invalid @enderror" name="option1" value="{{ old('option') }}" required autocomplete="option" autofocus>
                                <select name="is-correct1".$i>
                                <option value="false">false</option>
                                <option value="true">true</option>
                                </select>
                                @error('option')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option" class="col-md-4 col-form-label text-md-right">{{ __('Option 2') }}</label>

                            <div class="col-md-6">
                                <input id="option" type="text" class="form-control @error('option') is-invalid @enderror" name="option2" value="{{ old('option') }}" required autocomplete="option" autofocus>
                                <select name="is-correct2".$i>
                                <option value="false">false</option>
                                <option value="true">true</option>
                                </select>
                                @error('option')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option" class="col-md-4 col-form-label text-md-right">{{ __('Option 3') }}</label>

                            <div class="col-md-6">
                                <input id="option" type="text" class="form-control @error('option') is-invalid @enderror" name="option3" value="{{ old('option') }}" required autocomplete="option" autofocus>
                                <select name="is-correct3".$i>
                                <option value="false">false</option>
                                <option value="true">true</option>
                                </select>
                                @error('option')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option" class="col-md-4 col-form-label text-md-right">{{ __('Option 4') }}</label>

                            <div class="col-md-6">
                                <input id="option" type="text" class="form-control @error('option') is-invalid @enderror" name="option4" value="{{ old('option') }}" required autocomplete="option" autofocus>
                                <select name="is-correct4".$i>
                                <option value="false">false</option>
                                <option value="true">true</option>
                                </select>
                                @error('option')
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
