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
                <div class="card-body">

                    {{-- Tabel Data User --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>JENIS KELAMIN</th>
                                <th>TEMPAT TANGGAL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>NO HP</th>
                                <th>STATUS</th>
                                <th>SERTIF</th>
                                <th>ROLE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->jenis_kelamin }}</td>
                                    <td>{{ $user->ttl }}</td>
                                    <td>{{ $user->alamat }}</td>
                                    <td>{{ $user->no_hp }}</td>
                                    <td>
                                        @php
                                            if ($user->status == 'WASIT') {
                                                $status = 'Wasit';
                                            } elseif ($user->status == 'PENILAI') {
                                                $status = 'Penilai';
                                            } else {
                                                $status = 'Admin';
                                            }
                                        @endphp
                                        {{ $status }}
                                    </td>
                                    <td>
                                        @if ($user->sertif)
                                            <a href="{{ asset($user->sertif) }}" download>
                                                <button type="button" class="btn btn-sm btn-info">
                                                    <i class="fa-solid fa-download"></i> Download
                                                </button>
                                            </a>
                                        @else
                                            File tidak tersedia
                                        @endif
                                    </td>
                                    <td>
                                        @php
                                            if ($user->role == 1) {
                                                $role = 'Admin';
                                            } elseif ($user->role == 2) {
                                                $role = 'User';
                                            }
                                        @endphp
                                        {{ $role }}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editUser{{ $loop->iteration }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapusUser{{ $loop->iteration }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <button class="btn btn-sm btn-dark" data-bs-toggle="modal"
                                            data-bs-target="#modalResetPassword{{ $loop->iteration }}">
                                            <i class="fa-regular fa-unlock-keyhole"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Modal Edit User --}}
                                <div class="modal fade" id="editUser{{ $loop->iteration }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Edit User
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('user.update', $user->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Nama</label>
                                                        <input type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" id="name"
                                                            value="{{ old('name', $user->name) }}" required autofocus>
                                                        @error('name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                                            <option value="laki-laki"
                                                                {{ $user->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>
                                                                Laki - Laki</option>
                                                            <option value="perempuan"
                                                                {{ $user->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>
                                                                Perempuan</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="ttl" class="form-label">Tempat Tanggal
                                                            Lahir</label>
                                                        <input type="text"
                                                            class="form-control @error('ttl') is-invalid @enderror"
                                                            name="ttl" id="ttl"
                                                            value="{{ old('ttl', $user->ttl) }}" required autofocus>
                                                        @error('ttl')
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
                                                            value="{{ old('alamat', $user->alamat) }}" required autofocus>
                                                        @error('alamat')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="no_hp" class="form-label">No HP</label>
                                                        <input type="text"
                                                            class="form-control @error('no_hp') is-invalid @enderror"
                                                            name="no_hp" id="no_hp"
                                                            value="{{ old('no_hp', $user->no_hp) }}" required autofocus>
                                                        @error('no_hp')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select class="form-select" id="status" name="status">
                                                            <option value="WASIT"
                                                                {{ $user->status == 'WASIT' ? 'selected' : '' }}>Wasit
                                                            </option>
                                                            <option value="PENILAI"
                                                                {{ $user->status == 'PENILAI' ? 'selected' : '' }}>Penilai
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="sertif" class="form-label">Upload Sertifikat
                                                            <i>(pdf)</i></label>
                                                        <input type="file"
                                                            class="form-control @error('sertif') is-invalid @enderror"
                                                            name="sertif" id="sertif">
                                                        @error('sertif')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" id="email"
                                                            value="{{ old('email', $user->email) }}" required autofocus>
                                                        @error('email')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="role" class="form-label">Role</label>
                                                        <select class="form-select" id="role" name="role">
                                                            <option value="1"
                                                                {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
                                                            <option value="2"
                                                                {{ $user->role == 2 ? 'selected' : '' }}>User</option>
                                                        </select>
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
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Hapus User
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <div class="modal-body">

                                                    <p class="fs-5">Apakah anda yakin akan menghapus data user
                                                        <b>{{ $user->name }}</b>?
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

                                {{-- Modal Reset Password Admin --}}
                                <div class="modal fade" id="modalResetPassword{{ $loop->iteration }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Reset Password
                                                    User
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('user.password', $user->id) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label text-dark">Password
                                                                Baru</label>
                                                            <input type="password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                id="password" name="password" autofocus required>
                                                            @error('password')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label text-dark">Confirmed
                                                                Password
                                                                Baru</label>
                                                            <input type="password"
                                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                                id="password_confirmation" name="password_confirmation"
                                                                required>
                                                            @error('password')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-dark">Reset
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- / Modal Reset Password Admin --}}
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Tambah User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="name" placeholder="Enter your nama"
                                    value="{{ old('nama') }}" required autofocus>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="laki-laki" selected>Laki - Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control @error('ttl') is-invalid @enderror"
                                    name="ttl" id="ttl" placeholder="Tempat / tanggal-bulan-tahun"
                                    value="{{ old('ttl') }}" required autofocus>
                                @error('ttl')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    name="alamat" id="alamat" placeholder="Enter your alamat"
                                    value="{{ old('alamat') }}" required autofocus>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No HP</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                    name="no_hp" id="no_hp" placeholder="Enter your No Hp"
                                    value="{{ old('no_hp') }}" required autofocus>
                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="WASIT" selected>Wasit</option>
                                    <option value="PENILAI">Penilai</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="sertif" class="form-label">Upload Sertifikat <i>(pdf)</i></label>
                                <input type="file" class="form-control @error('sertif') is-invalid @enderror"
                                    name="sertif" id="sertif" placeholder="Enter your sertif"
                                    value="{{ old('sertif') }}" required autofocus>
                                @error('sertif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Enter your email"
                                    value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" placeholder="••••••••" name="password"
                                    id="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" id="role" name="role">
                                    <option value="1" selected>Admin</option>
                                    <option value="2">User</option>
                                </select>
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
