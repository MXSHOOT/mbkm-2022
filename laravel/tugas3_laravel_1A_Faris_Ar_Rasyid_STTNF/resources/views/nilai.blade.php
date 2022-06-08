@php
$nama = "Ahmad Maulani";
$matpel = "Matematika";
$nilai = 59.99999;
@endphp
Nama: {{ $nama }}
<br />Mata Pelajaran: {{ $matpel }}
<br />Nilai: {{ $nilai }}
<br />Keterangan: {{ $nilai >= 60 ? 'Lulus' : 'Gagal' }}