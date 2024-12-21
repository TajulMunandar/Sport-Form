@extends('form.component.main')

@section('content')
    <div class="container">
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
            <div class="col">
                <p class="fs-3 fw-bold mb-2">
                    Aspek Tanggung Jawab Profesi
                </p>
                <p>
                    Keterangan:
                </p>
                <table class="table w-50">
                    <thead>
                      <tr>
                        <th scope="col" colspan="3">Keterangan:</th>
                        <th scope="col" colspan="3">Bobot Penilaian:</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>SS</td>
                        <td>=</td>
                        <td>Sangat Setuju</td>
                        <td>SS</td>
                        <td>=</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>S</td>
                        <td>=</td>
                        <td>Setuju</td>
                        <td>S</td>
                        <td>=</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>TS</td>
                        <td>=</td>
                        <td>Tidak Setuju</td>
                        <td>TS</td>
                        <td>=</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>STTS</td>
                        <td>=</td>
                        <td>Sangat Tidak Setuju</td>
                        <td>STS</td>
                        <td>=</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <hr>
        <form action="{{ route('tanggung.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_form" value="{{ request('id') }}">
            <div class="row">
                @foreach ($soals as $soal)
                    <div class="col-lg-12 p-3 mt-3">
                        <p class="fs-5 mb-0">{{ $loop->iteration }} . {{ $soal->soal }}</p>
                    </div>
                    <div class="col-lg-12">
                        <input type="hidden" name="id_soal[]" value="{{ $soal->id }}">
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="form-check mx-5">
                                <input class="form-check-input" type="radio" name="skor[{{ $soal->id }}]"
                                    id="jawaban{{ $soal->id }}_{{ $i }}" value="{{ $i }}" required>
                                <label class="form-check-label" for="jawaban{{ $soal->id }}_{{ $i }}">
                                    {{ $i }}
                                </label>
                            </div>
                        @endfor
                    </div>
                @endforeach
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
