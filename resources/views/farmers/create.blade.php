<!-- resources/views/farmers/create.blade.php -->
@extends('Template.template2')

@section('content')
    <h1>Tambahkan Data Pekerja</h1>
    
    <form action="{{ route('farmers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Petani</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
<<<<<<< HEAD
            <label for="role">Peran</label>
            <select name="role" id="role" class="form-control" required>
                @foreach ($roles as $role)
                    <option value="{{ $role }}">{{ $role }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
=======
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
            <label for="age">Umur</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="detail">Detail Pekerjaan</label>
            <input type="text" name="detail" id="detail" class="form-control" rows="4" cols="50">
        </div>
        <!-- tambahkan input lainnya sesuai kebutuhan -->
<<<<<<< HEAD
        <a href="{{ route('farmers.index') }}" class="btn btn-secondary">Back</a>
=======
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
