@extends('Template.template2')

@section('content')
    <h1>Detail Budidaya</h1>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>1000{{ $cropfarmer->id }}</td>
            </tr>
            <tr>
                <th>Tanaman</th>
                <td>{{ $cropfarmer->crop->name }}</td>
            </tr>
            <tr>
                <th class="text-center">Penanggung Jawab</th>
            </tr>
            <tr>
                <th>Petani</th>
                <td>{{ $cropfarmer->petani->name }}</td>
            </tr>
            <tr>
                <th>Ahli Agronomi</th>
                <td>{{ $cropfarmer->ahliAgronomi->name }}</td>
            </tr>
            <tr>
                <th>Ahli Kesuburan Tanah</th>
                <td>{{ $cropfarmer->ahliKesuburan->name }}</td>
            </tr>
            <tr>
                <th>Ahli Hama dan Penyakit Tanaman</th>
                <td>{{ $cropfarmer->ahliHama->name }}</td>
            </tr>
            <tr>
                <th>Ahli Ekonomi Pertanian</th>
                <td>{{ $cropfarmer->ahliEkonomi->name }}</td>
            </tr>
            <tr>
                <th>Ahli Gizi</th>
                <td>{{ $cropfarmer->ahliGizi->name }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('cropfarmers.index') }}" class="btn btn-secondary">Back</a>
@endsection
