<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logos/logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <title>Register | Sport</title>
</head>

<body class="bg-light">
    <!-- container -->
    <div class="container d-flex flex-column p-3">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">

                <div class="row">
                    <div class="col-sm-6 col-md">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @elseif (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <a href="#" class="d-flex justify-content-center">
                                <img src="{{ asset('img/logo.png') }}" class="img-fluid mb-6" alt="Sport"
                                    style="width: 60%">
                            </a>
                            <p class="mb-5">Please enter your user information.</p>
                        </div>
                        <!-- Form -->
                        <form action="/register" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Username -->
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
                            <!-- Checkbox -->
                            
                            <!--wasit dan penilai-->
                            <p class="fw-bold">Riwayat Tugas Wasit/Penilai</p>
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

                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="showpsd">
                                    <label class="form-check-label" for="showpsd">Show Password</label>
                                </div>
                                <a href="/login" class="mb-3">Sudah Punya Akun?</a>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#showpsd').click(function() {
                $(this).is(':checked') ? $('#password').attr('type', 'text') : $('#password').attr('type',
                    'password');
            });
        });
    </script>
</body>

</html>
