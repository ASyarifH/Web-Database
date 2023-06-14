<!-- resources/views/crops/index.blade.php -->
@extends('Template.template2')

@section('content')
    <h1>List Tanaman yang Telah Ditanam</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Tanaman</th>
                <th>Nama Lain/Inisial</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($crops as $crop)
                <tr>
                    <td>{{ $crop->name }}</td>
                    <td>{{ $crop->alias }}</td>
                    <td>
                        <a href="{{ route('crops.show', $crop->id) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('crops.edit', $crop->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('crops.destroy', $crop->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('crops.create') }}" class="btn btn-primary">Tambahkan Data Tanaman Baru</a>
@endsection
