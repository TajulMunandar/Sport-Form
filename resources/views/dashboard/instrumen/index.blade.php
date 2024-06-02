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

    <button class="btn btn-primary fs-5 fw-normal mt-2" data-bs-toggle="modal" data-bs-target="#tambahInstrument"><i
            class="fa-solid fa-square-plus fs-5 me-2"></i>Tambah</button>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card mt-2">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table w-100 table-borderless table-striped border-top border-bottom">
                            <thead class="align-middle border-bottom">
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA WASIT</th>
                                    <th>NAMA LOMBA</th>
                                    <th>PB/PEMPROV/KAB</th>
                                    <th>ALAMAT</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($instrumens as $instrumen)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $instrumen->Wasit->user->name }}</td>
                                        <td>{{ $instrumen->AcaraLomba->nama_acara }}</td>
                                        <td>{{ $instrumen->pb }}</td>
                                        <td>{{ $instrumen->alamat }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editInstrumen{{ $loop->iteration }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#hapusInstrumen{{ $loop->iteration }}">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                            <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                                data-bs-target="#modalInstrumen{{ $loop->iteration }}">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    {{-- Modal Edit User --}}
                                    <div class="modal fade" id="editInstrumen{{ $loop->iteration }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Edit User
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('instrumen.update', $instrumen->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @method('put')
                                                    @csrf
                                                    <div class="modal-body">

                                                        <div class="mb-3">
                                                            <label for="wasit" class="form-label">Wasit</label>
                                                            <select class="form-select" id="wasit" name="id_wasit">
                                                                @foreach ($wasits as $wasit)
                                                                    @if (old('id_wasit', $instrumen->id_wasit) == $wasit->id)
                                                                        <option value="{{ $wasit->id }}" selected>
                                                                            {{ $wasit->user->name }}</option>
                                                                    @else
                                                                        <option value="{{ $wasit->id }}">
                                                                            {{ $wasit->user->name }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="id_lomba" class="form-label">Nama Acara
                                                                Lomba</label>
                                                            <select class="form-select" id="id_lomba" name="id_lomba">
                                                                @foreach ($lombas as $lomba)
                                                                    @if (old('id_lomba', $instrumen->id_lomba) == $lomba->id)
                                                                        <option value="{{ $lomba->id }}" selected>
                                                                            {{ $lomba->nama_acara }}</option>
                                                                    @else
                                                                        <option value="{{ $lomba->id }}">
                                                                            {{ $lomba->nama_acara }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="pb" class="form-label">PB/Pemprov/KAB</label>
                                                            <input type="text"
                                                                class="form-control @error('pb') is-invalid @enderror"
                                                                name="pb" id="pb"
                                                                value="{{ old('pb', $instrumen->pb) }}" required autofocus>
                                                            @error('pb')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <input type="text"
                                                                class="form-control @error('alamat') is-invalid @enderror"
                                                                name="alamat" id="alamat"
                                                                value="{{ old('alamat', $instrumen->alamat) }}" required
                                                                autofocus>
                                                            @error('alamat')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
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
                                    <div class="modal fade" id="hapusInstrumen{{ $loop->iteration }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Hapus
                                                        Instrumen
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('instrumen.destroy', $instrumen->id) }}"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <div class="modal-body">

                                                        <p class="fs-5">Apakah anda yakin akan menghapus data instrumen
                                                            <b>{{ $instrumen->Wasit->user->name }} -
                                                                {{ $instrumen->AcaraLomba->nama_acara }}</b>?
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

                                    {{-- Modal Hapus User --}}
                                    <div class="modal fade" id="modalInstrumen{{ $loop->iteration }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal
                                                        Instrumen
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <p class="fs-3">
                                                        <b>{{ $instrumen->name }}</b>
                                                    </p>

                                                    <div class="row">
                                                        <div class="mb-2 col-lg-4">
                                                            <a href="{{ route('lari.index', ['id' => $instrumen->id]) }}">
                                                                <div class="shadow card">
                                                                    <div class="text-center card-body">
                                                                        Lari
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="mb-2 col-lg-4">
                                                            <a
                                                                href=" {{ route('lompat.index', ['id' => $instrumen->id]) }}">
                                                                <div class="shadow card">
                                                                    <div class="text-center card-body">
                                                                        Lompat
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="mb-2 col-lg-4">
                                                            <a
                                                                href="{{ route('jalan.index', ['id' => $instrumen->id]) }}">
                                                                <div class="shadow card">
                                                                    <div class="text-center card-body">
                                                                        Jalan
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="mb-2 col-lg-4">
                                                            <a
                                                                href="{{ route('lempar.index', ['id' => $instrumen->id]) }}">
                                                                <div class="shadow card">
                                                                    <div class="text-center card-body">
                                                                        Lempar
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- / Modal Hapus User  --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah User -->
    <div class="modal fade" id="tambahInstrument" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Tambah Instrumental</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('instrumen.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="wasit" class="form-label">Wasit</label>
                                <select class="form-select" id="wasit" name="id_wasit">
                                    @foreach ($wasits as $wasit)
                                        <option value="{{ $wasit->id }}" selected>{{ $wasit->user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="id_lomba" class="form-label">Nama Acara Lomba</label>
                                <select class="form-select" id="id_lomba" name="id_lomba">
                                    @foreach ($lombas as $lomba)
                                        <option value="{{ $lomba->id }}" selected>{{ $lomba->nama_acara }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pb" class="form-label">PB/PEMPROV/KAB</label>
                                <input type="pb" class="form-control @error('pb') is-invalid @enderror"
                                    name="pb" id="pb" placeholder="Enter your PB/PEMPROV/KAB" required
                                    autofocus>
                                @error('pb')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                    name="alamat" id="alamat" placeholder="Enter your Alamat" required autofocus>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
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
