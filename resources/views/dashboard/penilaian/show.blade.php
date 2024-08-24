@extends('dashboard.layouts.main')

@section('content')
    <a href="/penilaian" class="btn btn-secondary">Kembali</a>

    <h3 class="mt-3">Nilai Final</h3>
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <table class="table w-100 table-borderless table-striped border-top border-bottom">
                        <thead class="align-middle border-bottom">
                            <tr>
                                <th>Nama Wasit</th>
                                <th>PB/PEMPROV/KAB</th>
                                <th>TEMPAT</th>
                                <th>NAMA ACARA LOMBA</th>
                                <th rowspan="2">SKOR AKHIR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if ($penilaiData)
                                    <td>{{ $wasit->user->name }}</td>
                                    <td>{{ $instrumen->pb }}</td>
                                    <td>{{ $instrumen->alamat }}</td>
                                    <td>{{ $instrumen->AcaraLomba->nama_acara }}</td>
                                    <td>{{ number_format($averagePersentase, 2) }}</td>
                                    <td>
                                        @if ($averagePersentase >= 95)
                                            Sangat Baik
                                        @elseif ($averagePersentase >= 85)
                                            Baik
                                        @elseif ($averagePersentase >= 75)
                                            Cukup
                                        @elseif ($averagePersentase >= 65)
                                            Sedang
                                        @else
                                            Kurang
                                        @endif
                                    </td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @foreach ($penilaiData as $penilai => $dataList)
        <h3 class="mt-3">Nilai Detail untuk Penilai: {{ $penilai }}</h3>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table w-100 table-borderless table-striped border-top border-bottom">
                                <thead class="align-middle border-bottom">
                                    <tr>
                                        <th>NO</th>
                                        <th>TANGGAL</th>
                                        <th>NAMA LOMBA</th>
                                        <th>NILAI</th>
                                        <th>SIMPULAN PENILAIAN</th>
                                        <th>CATATAN PENILAI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataList as $key => $data)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $data['tanggal'] }}</td>
                                            <td>{{ $data['nama_lomba'] }}</td>
                                            <td>{{ $data['nilai'] }}</td>
                                            <td>{{ $data['simpulan'] }}</td>
                                            <td>{{ $data['catatan_penilai'] }}</td>
                                        </tr>
                                    @endforeach
                                    {{-- Di sini Anda bisa menambahkan perhitungan skor akhir untuk penilai ini jika diperlukan --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
