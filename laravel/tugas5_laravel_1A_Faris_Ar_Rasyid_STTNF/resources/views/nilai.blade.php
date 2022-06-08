@php
$nama = "Abdul Aziz";
$matpel = "Matematika";
$nilai = 100;
@endphp
Nama: {{ $nama }}
<br />Mata Pelajaran: {{ $matpel }}
<br />Nilai: {{ $nilai }}
<br />Keterangan: {{ $nilai >= 60 ? 'Lulus' : 'Gagal' }}