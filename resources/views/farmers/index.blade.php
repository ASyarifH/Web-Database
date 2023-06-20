<!-- resources/views/farmers/index.blade.php -->
@extends('Template.template2')

@section('content')
    <h1>List Pekerja</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nama Pekerja</th>
<<<<<<< HEAD
                <th>Posisi Tugas</th>
=======
                <th>Umur</th>
                <th>Alamat</th>
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farmers as $farmer)
                <tr>
                    <td>{{ $farmer->name }}</td>
<<<<<<< HEAD
                    <td>{{ $farmer->role }}</td>
                    <td>
                        <a href="{{ route('farmers.show', $farmer->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('farmers.edit', $farmer->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('farmers.destroy', $farmer->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin Menghapusnya?')">Delete</button>
=======
                    <td>{{ $farmer->age }} Tahun</td>
                    <td>{{ $farmer->address }}</td>
                    <td>
                        <a href="{{ route('farmers.show', $farmer->id) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('farmers.edit', $farmer->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('farmers.destroy', $farmer->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('farmers.create') }}" class="btn btn-primary">tambahkan Data Petani Baru</a>
@endsection
