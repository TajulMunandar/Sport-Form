@extends('dashboard.layouts.main')

@section('content')
    <a href="/instrumen" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label for="nama_penilai" class="form-label">Nama Penilai</label>
                <input type="name" class="form-control" value="{{ $instrumen->first()->Penilai->user->name }}" disabled>
            </div>
            <div class="mb-3">
                <label for="nama_wasit" class="form-label">Nama Wasit</label>
                <input type="name" class="form-control" value="{{ $instrumen->first()->Wasit->user->name }}" disabled>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Nama Acara Lomba</label>
                <input type="name" class="form-control" value="{{ $instrumen->first()->AcaraLomba->nama_acara }}"
                    disabled>
            </div>
            <div class="mb-3">
                <label for="pb" class="form-label">PB/Pemprov/Kab</label>
                <input type="name" class="form-control" value="{{ $instrumen->first()->pb }}" disabled>
            </div>
            <label for="pb" class="form-label">Tempat</label>
            <div class="form-floating">
                <textarea class="form-control"disabled> {{ $instrumen->first()->alamat }}</textarea>
                <label for="floatingTextarea">Tempat</label>
            </div>
            <form action="{{ route('utama.store') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $instrumen->first()->id }}" name="id_instrumen">
                <input type="hidden" value="1" name="jenis">
                <button class="btn btn-primary float-end mt-4">Buka Instrumen</button>
            </form>
        </div>
    </div>
@endsection
