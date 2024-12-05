@extends('adminlte::page')

@section('title', 'List Product')

@section('content_header')
    <h1>List Product</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <ul class="list-group">
      @forelse($products as $product)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$product->name}}
            <form action="{{route('admin.products.destroy', $product->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit">
                  <i class="fas fa-trash-alt"></i> Hapus
              </button>
            </form>
        </li>
        @empty
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