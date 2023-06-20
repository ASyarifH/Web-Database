<!-- resources/views/reports/crop_farmer.blade.php -->

@extends('Template.template2')

@section('content')
    <h1>Laporan Budidaya</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Crop</th>
                <th>Petani</th>
                <th>Ahli Agronomi</th>
                <th>Ahli Kesuburan Tanah</th>
                <th>Ahli Hama dan Penyakit Tanaman</th>
                <th>Ahli Ekonomi Pertanian</th>
                <th>Ahli Gizi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cropFarmers as $cropFarmer)
                <tr>
                    <td>{{ $cropFarmer->crop->name }}</td>
                    <td>{{ $cropFarmer->petani->name }}</td>
                    <td>{{ $cropFarmer->ahliAgronomi->name }}</td>
                    <td>{{ $cropFarmer->ahliKesuburan->name }}</td>
                    <td>{{ $cropFarmer->ahliHama->name }}</td>
                    <td>{{ $cropFarmer->ahliEkonomi->name }}</td>
                    <td>{{ $cropFarmer->ahliGizi->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection