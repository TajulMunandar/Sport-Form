@extends('form.component.main')

@section('content')
    <div class="container ">
        <div class="row mt-3">
            <div class="col">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center">
                <p class="fs-3 fw-bold mb-0">
                    Aspek Kerapian
                </p>
            </div>
        </div>
        <hr>
        <form action="{{ route('final.update', request('id')) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id_form" value="{{ request('id') }}">
            <label for="catatan Penilaian" class="form-label">Catatan Penilaian</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="catatan_penilaian" id="floatingTextarea" name="catatan_penilai"></textarea>
                <label for="floatingTextarea">Catatan Penilaian</label>
            </div>

            <hr>
            <footer class="footer px-5 py-3 text-end">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#selesai">Submit</a>
            </footer>
            <!-- Modal -->
            <div class="modal fade" id="selesai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Quiz</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah Anda Yakin Sudah Mengisi Soal dengan Benar?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection

@section('script')
    AOS.init();
@endsection
