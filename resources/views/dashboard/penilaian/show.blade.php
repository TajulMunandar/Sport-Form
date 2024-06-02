@extends('dashboard.layouts.main')

@section('content')
    <a href="/penilaian" class="btn btn-secondary">Kembali</a>

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
                                @if ($nilais->isNotEmpty())
                                    <td>{{ $nilais->first()->Instrumen->Wasit->user->name }}</td>
                                    <td>{{ $nilais->first()->Instrumen->pb }}</td>
                                    <td>{{ $nilais->first()->Instrumen->alamat }}</td>
                                    <td>{{ $nilais->first()->Instrumen->AcaraLomba->nama_acara }}</td>
                                    <td>{{ number_format($averagePersentase, 2) }}</td>
                                    <td>
                                        @if (number_format($averagePersentase, 2) >= 95)
                                            Sangat Baik
                                        @elseif (number_format($averagePersentase, 2) >= 85)
                                            Baik
                                        @elseif (number_format($averagePersentase, 2) >= 75)
                                            Cukup
                                        @elseif (number_format($averagePersentase, 2) >= 65)
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

    <div class="row mt-3">
        <div class="col-12">
            <div class="card mt-2">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table w-100 table-borderless table-striped border-top border-bottom">
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
                                @foreach ($nilais as $key => $nilai)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $nilai->created_at }}</td>
                                        <td>
                                            @if ($nilai->jenis == 3)
                                                Lompat
                                            @elseif ($nilai->jenis == 1)
                                                Lari
                                            @elseif ($nilai->jenis == 2)
                                                Lempar
                                            @elseif ($nilai->jenis == 4)
                                                Jalan
                                            @endif
                                        </td>
                                        <td>{{ number_format($nilai->persentase, 2) }}</td>
                                        <td>
                                            @if (number_format($nilai->persentase, 2) >= 95)
                                                Sangat Baik
                                            @elseif (number_format($nilai->persentase, 2) >= 85)
                                                Baik
                                            @elseif (number_format($nilai->persentase, 2) >= 75)
                                                Cukup
                                            @elseif (number_format($nilai->persentase, 2) >= 65)
                                                Sedang
                                            @else
                                                Kurang
                                            @endif
                                        </td>
                                        <td>{{ $nilai->catatan_penilai }}</td>

                                        <!-- Menampilkan persentase skor akhir -->
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
