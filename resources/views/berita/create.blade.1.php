@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Post berita terbaru') }}</div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('berita.store') }}">
                    {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="kegiatan" class="col-md-4 col-form-label text-md-right">{{ __('Nama Kegiatan') }}</label>

                            <div class="col-md-6">
                                <input id="kegiatan" type="text" class="form-control{{ $errors->has('kegiatan') ? ' is-invalid' : '' }}" name="kegiatan" value="{{ old('kegiatan') }}" required autofocus>

                                @if ($errors->has('kegiatan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kegiatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Kegiatan') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control{{ $errors->has('tanggal') ? ' is-invalid' : '' }}" name="tanggal" value="{{ old('tanggal') }}" required autofocus>

                                @if ($errors->has('tanggal'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tanggal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gambar" class="col-md-4 col-form-label text-md-right">{{ __('Gambar kegiatan') }}</label>

                            <div class="col-md-6">
                                <input id="gambar" type="file" class="form-control{{ $errors->has('gambar') ? ' is-invalid' : '' }}" name="gambar" value="{{ old('gambar') }}" required autofocus>
                                <p>*.jpg</p>
                                @if ($errors->has('gambar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gambar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

                            <div class="col-md-6">
                            <textarea id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{ old('deskripsi') }}" required autofocus>
                                </textarea>
                                @if ($errors->has('deskripsi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
