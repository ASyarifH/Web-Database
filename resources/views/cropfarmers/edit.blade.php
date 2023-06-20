@extends('Template.template2')

@section('content')
    <h1>Edit Budidaya</h1>

    <form action="{{ route('cropfarmers.update', $cropfarmer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="crop_id">Tanaman</label>
            <select name="crop_id" id="crop_id" class="form-control">
                @foreach ($crops as $crop)
                    <option value="{{ $crop->id }}" {{ $crop->id == $cropfarmer->crop_id ? 'selected' : '' }}>{{ $crop->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="petani_id">Petani</label>
            <select name="petani_id" id="petani_id" class="form-control">
                @foreach ($farmers as $petani)
                    <option value="{{ $petani->id }}">{{ $petani->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ahli_agronomi_id">Ahli Agronomi</label>
            <select name="ahli_agronomi_id" id="ahli_agronomi_id" class="form-control">
                @foreach ($ahliAgronomi as $agronomi)
                    <option value="{{ $agronomi->id }}" {{ $agronomi->id == $cropfarmer->ahli_agronomi_id ? 'selected' : '' }}>{{ $agronomi->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ahli_kesuburan_id">Ahli Kesuburan Tanah</label>
            <select name="ahli_kesuburan_id" id="ahli_kesuburan_id" class="form-control">
                @foreach ($ahliKesuburan as $kesuburan)
                    <option value="{{ $kesuburan->id }}" {{ $kesuburan->id == $cropfarmer->ahli_kesuburan_id ? 'selected' : '' }}>{{ $kesuburan->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ahli_hama_id">Ahli Hama dan Penyakit Tanaman</label>
            <select name="ahli_hama_id" id="ahli_hama_id" class="form-control">
                @foreach ($ahliHama as $hama)
                    <option value="{{ $hama->id }}" {{ $hama->id == $cropfarmer->ahli_hama_id ? 'selected' : '' }}>{{ $hama->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ahli_ekonomi_id">Ahli Ekonomi Pertanian</label>
            <select name="ahli_ekonomi_id" id="ahli_ekonomi_id" class="form-control">
                @foreach ($ahliEkonomi as $ekonomi)
                    <option value="{{ $ekonomi->id }}" {{ $ekonomi->id == $cropfarmer->ahli_ekonomi_id ? 'selected' : '' }}>{{ $ekonomi->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ahli_gizi_id">Ahli Gizi</label>
            <select name="ahli_gizi_id" id="ahli_gizi_id" class="form-control">
                @foreach ($ahliGizi as $gizi)
                    <option value="{{ $gizi->id }}" {{ $gizi->id == $cropfarmer->ahli_gizi_id ? 'selected' : '' }}>{{ $gizi->name }}</option>
                @endforeach
            </select>
        </div>

        <a href="{{ route('cropfarmers.index') }}" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
