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
@endsection
