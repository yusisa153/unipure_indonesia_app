@extends('adminlte::page')

@section('title', 'Add Project')

@section('content_header')
    <h1>Add Project</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Input Nama dan Gambar</h3>
          </div>
          <form action="{{route('admin.project_store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="name" :value="__('Name')">Nama</label>
                <input type="text" class="form-control" id="name" name="name" :value="old('name')" placeholder="Masukkan Nama" required>
              </div>
              <div class="form-group">
                <label for="gambar">Upload Gambar</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="gambar" name="url" value="url" accept="image/*">
                    <label class="custom-file-label" for="gambar">Pilih file</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    // Update label file input ketika file dipilih
    $(document).on('change', '.custom-file-input', function (event) {
      let inputFile = event.currentTarget;
      $(inputFile).siblings('.custom-file-label').text(inputFile.files[0].name);
    });
  </script>
@stop