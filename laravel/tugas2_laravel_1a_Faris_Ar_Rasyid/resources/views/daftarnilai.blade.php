@php
$no = 1;
//array scalar
$s1 = ['nama'=>'Fawwaz','nilai'=>85];
$s2 = ['nama'=>'Bedu','nilai'=>58];
$s3 = ['nama'=>'Siti','nilai'=>95];
$s4 = ['nama'=>'Deden','nilai'=>30];
$judul = ['No','Nama','Nilai','Keterangan'];
//array assoc
$siswa = [$s1, $s2, $s3, $s4];

$ar_judul = ['No','Nama','Nilai','Keterangan'];
@endphp

<h3 align="center">Daftar Nilai Siswa</h3>
<table border="0" align="center" cellpadding="10" cellspacing="0">
    <thead>
        <tr bgcolor="tomato">
            @foreach($ar_judul as $jdl)
            <th>{{ $jdl }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ( $siswa as $sis)
        @php
        $ket = ($sis['nilai'] >= 60) ? 'Lulus' : 'Gagal';
        $warna = ($no % 2 == 1) ? 'green' : 'yellow';
        @endphp
        <tr bgcolor="{{ $warna }}">
            <td>{{ $no++ }}</td>
            <td>{{ $sis['nama'] }}</td>
            <td>{{ $sis['nilai']}}</td>
            <td>{{ $ket}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
