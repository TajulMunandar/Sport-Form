@extends('dashboard.layouts.main')

@section('content')
@section('css')
    <style>
        .image {
            height: 270px;
            background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(90, 92, 106, 1) 0%, rgba(32, 45, 58, 1) 81.3%);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card {
            height: auto;
            border: none;
            box-shadow: 0 20px 34px rgb(196 201 219 / 50%);
            transition: 0.5s;
        }

        .card:hover {
            box-shadow: 0 20px 34px #3c91d65d;
        }

        .card-body {
            padding-left: 30px;
            padding-right: 40px;
            margin-top: 10px;
        }

        .caption {
            color: black;
            padding: 60px;
            padding-left: 110px;
        }
    </style>
@endsection

<div class="containter">
    <div class="wrapper d-flex flex-column min-vh-100 ">
        <div class="row-12 image d-flex mb-3">
            <div class="col caption d-none d-md-block text-white mt-3 ">
                <div id="current_date"></div>
                <p class="fs-2 mb-0 fw-bold ">Selamat Datang {{ auth()->user()->name }}!</p>
                <p>Semoga Harimu Menyenangkan.</p>
            </div>
            <div class="col d-flex justify-content-end">
                <div class="px-5">
                    <lottie-player src="https://lottie.host/3a3cba81-7c1a-43fa-b3f2-71b6964a60ce/6WZsFOX4Wb.json"
                        speed="1" style="width: 450px; height: 280px" loop autoplay direction="1"
                        mode="normal"></lottie-player>
                </div>
            </div>
        </div>

        {{--  ALERT  --}}
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
        {{--  ALERT  --}}

        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">
                    @if (!auth()->user()->status == 'WASIT')
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <div class="row p-2 mb-3 d-flex justify-content-center align-items-center">
                                        <div class="col-2 me-2">
                                            <i class="fa-solid fa-person-running-fast fa-2xl me-2"></i>
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title m-0">Lari</h5>
                                            <p class="card-text m-0">
                                                Form Wasit Lari
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-auto">
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                                            class="btn btn-primary  w-100">
                                            <i class="fa-solid fa-right-to-bracket"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <div class="row p-2 mb-3 d-flex justify-content-center align-items-center">
                                        <div class="col-2 me-2">
                                            <i class="fa-solid fa-person-walking fa-2xl me-2"></i>
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title m-0">Jalan</h5>
                                            <p class="card-text m-0 ">
                                                Form Wasit Jalan
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-auto">
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal4"
                                            class="btn btn-primary  w-100">
                                            <i class="fa-solid fa-right-to-bracket"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <div class="row p-2 mb-3 d-flex justify-content-center align-items-center">
                                        <div class="col-2  me-2">
                                            <i class="fa-solid fa-user-injured fa-2xl me-2"></i>
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title m-0">Lempar</h5>
                                            <p class="card-text m-0">
                                                Form Wasit Lempar
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-auto">
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                            class="btn btn-primary  w-100">
                                            <i class="fa-solid fa-right-to-bracket"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <div class="row p-2 mb-3 d-flex justify-content-center align-items-center">
                                        <div class="col-2 me-2">
                                            <i class="fa-solid fa-person-falling fa-2xl"></i>
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title m-0">Lompat</h5>
                                            <p class="card-text m-0">
                                                Form Wasit Lompat
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-auto">
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                            class="btn btn-primary  w-100">
                                            <i class="fa-solid fa-right-to-bracket"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    <form action="{{ route('utama.store') }}" method="post">
                        @csrf
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Lari</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama_wasit" class="form-label">Nama Wasit</label>
                                            <input type="name" class="form-control" id="nama_wasit"
                                                name="nama_wasit" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pb" class="form-label">PB/Pemprov</label>
                                            <input type="name" class="form-control" id="PB/Pemprov"
                                                name="pb" aria-describedby="emailHelp">
                                        </div>
                                        <label for="pb" class="form-label">Alamat</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Alamat" id="floatingTextarea" name="alamat"></textarea>
                                            <label for="floatingTextarea">Alamat</label>
                                        </div>
                                        <input type="hidden" value="1" name="jenis">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('utama.store') }}" method="post">
                        @csrf
                        <div class="modal fade" id="exampleModal2" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Lempar</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama_wasit" class="form-label">Nama Wasit</label>
                                            <input type="name" class="form-control" id="nama_wasit"
                                                name="nama_wasit" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pb" class="form-label">PB/Pemprov</label>
                                            <input type="name" class="form-control" id="pb" name="pb"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <label for="pb" class="form-label">Alamat</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Alamat" id="floatingTextarea" name="alamat"></textarea>
                                            <label for="floatingTextarea">Alamat</label>
                                        </div>
                                        <input type="hidden" value="2" name="jenis">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('utama.store') }}" method="post">
                        @csrf
                        <div class="modal fade" id="exampleModal3" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Lompat</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama_wasit" class="form-label">Nama Wasit</label>
                                            <input type="name" class="form-control" id="nama_wasit"
                                                name="nama_wasit" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pb" class="form-label">PB/Pemprov</label>
                                            <input type="name" class="form-control" id="pb" name="pb"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <label for="pb" class="form-label">Alamat</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Alamat" id="floatingTextarea" name="alamat"></textarea>
                                            <label for="floatingTextarea">Alamat</label>
                                        </div>
                                        <input type="hidden" value="3" name="jenis">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('utama.store') }}" method="post">
                        @csrf
                        <div class="modal fade" id="exampleModal4" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Jalan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama_wasit" class="form-label">Nama Wasit</label>
                                            <input type="name" class="form-control" id="nama_wasit"
                                                name="nama_wasit" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pb" class="form-label">PB/Pemprov</label>
                                            <input type="name" class="form-control" id="pb" name="pb"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <label for="pb" class="form-label">Alamat</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Alamat" id="floatingTextarea" name="alamat"></textarea>
                                            <label for="floatingTextarea">Alamat</label>
                                        </div>
                                        <input type="hidden" value="4" name="jenis">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        const zeroFill = n => {
            return ('0' + n).slice(-2);
        }

        // Creates interval
        const interval = setInterval(() => {
            // Get current time
            const now = new Date();

            // Format date as in mm/dd/aaaa hh:ii:ss
            const dateTime = zeroFill((now.getMonth() + 1)) + '/' + zeroFill(now.getUTCDate()) + '/' + now
                .getFullYear() + ' ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(
                    now.getSeconds());

            // Display the date and time on the screen using div#date-time
            document.getElementById('current_date').innerHTML = dateTime;
        }, 1000);
    </script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
@endsection

@endsection
