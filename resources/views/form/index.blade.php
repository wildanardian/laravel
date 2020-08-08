@extends('layouts.master')

@section('content')

    <div class="ml-3 mt-3 mr-3">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif
                <a class="btn btn-primary mb-2" href="/pertanyaan/create">Buat Pertanyaan Baru</a>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th style="width: 200px">Judul</th>
                      <th style="width: 200px">Isi</th>
                      <th style="width: 300px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($pertanyaan as $key => $post)
                      <tr>
                        <td> {{ $post->id }} </td>
                        <td> {{ $post->judul }} </td>
                        <td> {{ $post->isi }} </td>
                        <td style="display: flex;">  
                          <a href="/pertanyaan/{{$post->id}}" class="btn btn-info btn-sm">Detail</a>
                          <a href="/pertanyaan/{{$post->id}}/edit" class="btn btn-default btn-sm">Edit</a>
                          <form action="/pertanyaan/{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-sm">
                          </form>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="4" align="center">Tidak ada pertanyaan</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div> -->
            </div>
    </div>

@endsection