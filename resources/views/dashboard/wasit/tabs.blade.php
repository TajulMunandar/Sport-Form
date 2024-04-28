@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

    <button class="btn btn-primary fs-5 fw-normal mt-2" data-bs-toggle="modal" data-bs-target="#tambahUser"><i
            class="fa-solid fa-square-plus fs-5 me-2"></i>Tambah</button>
    <div class="row mt-3">
        <div class="col">
            <div class="card mt-2">
                <ul class="nav nav-pills p-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/wasit">Wasit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/pelatih">Penilai</a>
                    </li>
                </ul>
                <div class="card-body">

                    {{-- Tabel Data User --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>TEMPAT</th>
                                <th>TAHUN</th>
                                <th>JENIS KEGIATAN</th>
                                <th>KEGIATAN</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelatihs as $pelatih)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pelatih->user->name }}</td>
                                    <td>{{ $pelatih->tempat }}</td>
                                    <td>{{ $pelatih->tahun }}</td>
                                    <td>{{ $pelatih->jenis_kegiatan }}</td>
                                    <td>{{ $pelatih->keterangan }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editUser{{ $loop->iteration }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapusUser{{ $loop->iteration }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Modal Edit User --}}

                                <div class="modal fade" id="editUser{{ $loop->iteration }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Tambah Penilai
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('pelatih.update', $pelatih->id) }}" method="post">
                                                @method('put')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="id_user" class="form-label">Nama Penilai</label>
                                                        <select class="form-select" id="id_user" name="id_user">
                                                            @if (auth()->user()->status == 'PENILAI')
                                                                <option value="{{ auth()->user()->id }}">
                                                                    {{ auth()->user()->name }}
                                                                </option>
                                                            @else
                                                                @foreach ($useres as $user)
                                                                    <option value="{{ $user->id }}"
                                                                        @if ($user->id == $pelatih->user->id) selected @endif>
                                                                        {{ $user->name }}
                                                                    </option>
                                                                @endforeach
                                                            @endif

                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="tempat" class="form-label">Tempat</label>
                                                        <input type="name" class="form-control" id="tempat"
                                                            name="tempat" aria-describedby="emailHelp"
                                                            value="{{ old('tempat', $pelatih->tempat) }}">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="tahun" class="form-label">Tahun</label>
                                                        <input type="year" class="form-control" id="tahun"
                                                            name="tahun" aria-describedby="emailHelp"
                                                            value="{{ old('tahun', $pelatih->tahun) }}">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="jenis_kegiatan" class="form-label">Jenis
                                                            Kegiatan</label>
                                                        <input type="year" class="form-control" id="jenis_kegiatan"
                                                            name="jenis_kegiatan" aria-describedby="emailHelp"
                                                            value="{{ old('jenis_kegiatan', $pelatih->jenis_kegiatan) }}">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="keterangan" class="form-label">Keterangan</label>
                                                        <input type="text" class="form-control" id="keterangan"
                                                            name="keterangan" aria-describedby="emailHelp"
                                                            value="{{ old('keterangan', $pelatih->keterangan) }}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-warning">Edit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- / Modal Edit User --}}

                                {{-- Modal Hapus User --}}
                                <div class="modal fade" id="hapusUser{{ $loop->iteration }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Hapus Penilai
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('pelatih.destroy', $pelatih->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <div class="modal-body">
                                                    <p class="fs-5">Apakah anda yakin akan menghapus data Penilai
                                                        <b>{{ $pelatih->user->name }}</b>?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-danger">Hapus
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- / Modal Hapus User  --}}
                            @endforeach
                        </tbody>
                    </table>
                    {{-- / Tabel Data ... --}}
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Tambah User -->
    <div class="modal fade" id="tambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Tambah Penilai</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pelatih.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="id_user" class="form-label">Nama Penilai</label>
                            <select class="form-select" id="id_user" name="id_user">
                                @if (auth()->user()->status == 'PENILAI')
                                    <option value="{{ auth()->user()->id }}">
                                        {{ auth()->user()->name }}
                                    </option>
                                @else
                                    @foreach ($useres as $user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                @endif

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tempat" class="form-label">Tempat</label>
                            <input type="name" class="form-control" id="tempat" name="tempat"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="year" class="form-control" id="tahun" name="tahun"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kegiatan" class="form-label">Jenis Kegiatan</label>
                            <input type="year" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Akhir Modal Tambah User -->
@endsection
