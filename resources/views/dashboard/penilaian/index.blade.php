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
                                    <th>PB</th>
                                    <th>ALAMAT</th>
                                    <th>EMAIL</th>
                                    <th>JENIS</th>
                                    <th>SIMPULAN PENILAIAN</th>
                                    <th>SKOR AKHIR</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($nilais as $key => $nilai)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $nilai->nama_wasit }}</td>
                                        <td>{{ $nilai->pb }}</td>
                                        <td>{{ $nilai->alamat }}</td>
                                        <td>{{ $nilai->email }}</td>
                                        <td>{{ $nilai->jenis }}</td>
                                        <td>{{ $nilai->simpulan_penilaian }}</td>
                                        <td>{{ number_format($nilai->persentase, 2) }}%</td> <!-- Menampilkan persentase skor akhir -->
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
