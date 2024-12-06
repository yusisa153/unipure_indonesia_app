@extends('adminlte::page')

@section('title', 'List Picture')

@section('content_header')
    <h1>List Picture</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <ul class="list-group">
      @forelse($pictures as $picture)
        <li class="list-group-item d-flex justify-content-between align-items-center"> 
          {{$picture->name}}
          <img src="{{Storage::url($picture->url)}}" alt="{{$picture->name}}" style="width: 120px">
          <strong>{{$picture->product->name}}</strong>
            <form action="{{route('admin.pictures.destroy', $picture->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit">
                  <i class="fas fa-trash-alt"></i> Hapus
              </button>
            </form>
        </li>
        @empty
        Tidak Ada Gambar
        @endforelse
    </ul>
</div>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop