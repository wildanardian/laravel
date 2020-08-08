@extends('layouts.master')

@section('content')

<div class="card card-primary ml-3 mt-3 mr-3">
    <div class="card-header">
      <h3 class="card-title">Edit Pertanyaan {{ $pertanyaanSatu->id }}</h3>
    </div>
    <form role="form" action="/pertanyaan/{{$pertanyaanSatu->id}}" method="POST">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="inputJitle">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $pertanyaanSatu->judul) }}" placeholder="Masukkan Judul Pertanyaan">
          @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputBody">Isi</label>
          <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', $pertanyaanSatu->isi) }}" placeholder="Masukkan Isi Pertanyaan">
        </div>
        @error('isi')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-default">Edit</button>
      </div>
    </form>
</div>

@endsection