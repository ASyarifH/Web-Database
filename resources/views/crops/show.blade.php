<!-- resources/views/crops/show.blade.php -->
@extends('Template.template2')

@section('content')
    <h1>Detail Tanaman</h1>

    <table class="table">
        <tbody>
            <tr>
                <th>Nama Tanaman</th>
                <td>{{ $crop->name }}</td>
            </tr>
            <tr>
                <th>Nama Lain/Inisial</th>
                <td>{{ $crop->alias }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>Rp {{$crop->price }},00</td>
            </tr>
            <tr>
                <th>Tempat Penanaman</th>
                <td>{{ $crop->place }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $crop->description }}</td>
            </tr>
            <tr>
                <th>Manfaat</th>
                <td>{{ $crop->purpose }}</td>
            </tr>
        </tbody>
    </table>
<<<<<<< HEAD
    <a href="{{ route('crops.index') }}" class="btn btn-secondary">Back</a>
=======
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
@endsection


