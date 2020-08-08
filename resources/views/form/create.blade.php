@extends('layouts.master')

@section('content')

<div class="card card-primary ml-3 mt-3 mr-3">
    <div class="card-header">
      <h3 class="card-title">Buat Pertanyaan Baru</h3>
    </div>
    <form role="form" action="/pertanyaan" method="POST">
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="inputJitle">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" values="{{ old('judul',' ') }}" placeholder="Masukkan Judul Pertanyaan">
          @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputBody">Isi</label>
          <input type="text" class="form-control" id="isi" name="isi" values="{{ old('isi', ' ') }}" placeholder="Masukkan Isi Pertanyaan">
        </div>
        @error('isi')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
</div>

@endsection