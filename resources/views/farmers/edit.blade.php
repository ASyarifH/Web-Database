<!-- resources/views/farmers/edit.blade.php -->
@extends('Template.template2')

@section('content')
    <h1>Edit Data Pekerja</h1>
    
    <form action="{{ route('farmers.update', $farmer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Petani</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $farmer->name }}" required>
        </div>
        <div class="form-group">
            <label for="age">Umur</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $farmer->age }}" required>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $farmer->address }}" required>
        </div>
        <div class="form-group">
            <label for="detail">Detail Pekerjaan</label>
            <input type="text" name="detail" id="detail" class="form-control" rows="4" cols="50" value="{{ $farmer->detail }}">
        </div>
        <!-- tambahkan input lainnya sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
