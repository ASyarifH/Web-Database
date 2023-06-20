<!-- resources/views/crops/edit.blade.php -->
@extends('Template.template2')

@section('content')
    <h1>Edit Data Tanaman</h1>

    <form action="{{ route('crops.update', $crop->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Tanaman</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $crop->name }}" required>
        </div>
        <div class="form-group">
            <label for="name">Nama Lain/Inisial</label>
            <input type="text" name="alias" id="alias" class="form-control" value="{{ $crop->alias }}" required>
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $crop->price }}">
        </div>
        <div class="form-group">
            <label for="name">Tempat Penanaman</label>
            <input type="text" name="place" id="place" class="form-control" rows="4" value="{{ $crop->place }}">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <input type="text" name="description" id="description" class="form-control" rows="4" cols="50" value="{{ $crop->description }}">
        </div>
        <div class="form-group">
            <label for="purpose">Manfaat</label>
            <input type="text" name="purpose" id="purpose" class="form-control" rows="4" cols="50" value="{{ $crop->purpose }}">
        </div>
<<<<<<< HEAD
        <a href="{{ route('crops.index') }}" class="btn btn-secondary">Back</a>
=======
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

