@extends('Template.template2')

@section('content')
    <h1>Budidaya</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanaman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cropfarmers as $cropfarmer)
                <tr>
                    <td>1000{{ $cropfarmer->id }}</td>
                    <td>{{ $cropfarmer->crop->name }}</td>
                    <td>
                        <a href="{{ route('cropfarmers.show', $cropfarmer->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('cropfarmers.edit', $cropfarmer->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('cropfarmers.destroy', $cropfarmer->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin Menghapusnya?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('cropfarmers.create') }}" class="btn btn-primary mb-3">Tambahkan Budidaya</a>
@endsection
