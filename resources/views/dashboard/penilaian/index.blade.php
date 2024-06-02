@extends('dashboard.layouts.main')

@section('content')
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
                                            <a class="btn btn-sm btn-info"
                                                href="{{ route('penilaian.show', $instrumen->id) }}">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
