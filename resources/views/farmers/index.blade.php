<!-- resources/views/farmers/index.blade.php -->
@extends('Template.template2')

@section('content')
    <h1>List Pekerja</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nama Pekerja</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farmers as $farmer)
                <tr>
                    <td>{{ $farmer->name }}</td>
                    <td>{{ $farmer->age }} Tahun</td>
                    <td>{{ $farmer->address }}</td>
                    <td>
                        <a href="{{ route('farmers.show', $farmer->id) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('farmers.edit', $farmer->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('farmers.destroy', $farmer->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('farmers.create') }}" class="btn btn-primary">tambahkan Data Petani Baru</a>
@endsection
