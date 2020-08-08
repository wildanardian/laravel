@extends('layouts.master')

@section('content')
    <div class="mt-3 ml-3">
        <h4> {{ $pertanyaanSatu->judul }} </h4>
        <p> {{ $pertanyaanSatu->isi }} </p>
    </div>
@endsection