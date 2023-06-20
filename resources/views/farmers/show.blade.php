<!-- resources/views/farmers/show.blade.php -->
@extends('Template.template2')

@section('content')
    <h1>Biodata Pekerja</h1>
    
    <table class="table">
        <tbody>
            <tr>
                <th>Nama Pekerja</th>
                <td>{{ $farmer->name }}</td>
            </tr>
            <tr>
<<<<<<< HEAD
                <th>Posisi Tugas</th>
                <td>{{ $farmer->role }}</td>
            </tr>
            <tr>
=======
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
                <th>Umur</th>
                <td>{{ $farmer->age }} Tahun</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $farmer->address }}</td>
            </tr>
            <tr>
                <th>Detail Pekerjaan</th>
                <td>{{ $farmer->detail }}</td>
            </tr>
            <!-- tambahkan kolom lainnya sesuai kebutuhan -->
        </tbody>
    </table>
<<<<<<< HEAD
    <a href="{{ route('farmers.index') }}" class="btn btn-secondary">Back</a>
=======
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
@endsection
