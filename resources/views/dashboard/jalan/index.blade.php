@extends('dashboard.layouts.main')

@section('content')
    <form action="{{ route('utama.store') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="nama_wasit" class="form-label">Nama Wasit</label>
                    <input type="name" class="form-control" id="nama_wasit" name="nama_wasit" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="pb" class="form-label">PB/Pemprov</label>
                    <input type="name" class="form-control" id="pb" name="pb" aria-describedby="emailHelp">
                </div>
                <label for="pb" class="form-label">Alamat</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Alamat" id="floatingTextarea" name="alamat"></textarea>
                    <label for="floatingTextarea">Alamat</label>
                </div>
                <input type="hidden" value="4" name="jenis">
                <button class="btn btn-primary float-end mt-4">Simpan</button>
            </div>
        </div>
    </form>
@endsection
