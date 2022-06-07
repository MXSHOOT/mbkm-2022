@php
$no = 1;
//array scalar
$s1 = ['NIP'=>2345,'nama'=>'Fawwaz','Jabatan'=>'Manager','Divisi'=>'SDM','agama'=>'Islam'];
$s2 = ['NIP'=>2345,'nama'=>'Bedu','Jabatan'=>'Asisten','Divisi'=>'SDM','agama'=>'Islam'];
$s3 = ['NIP'=>2345,'nama'=>'Siti','Jabatan'=>'Manager','Divisi'=>'Keuangan','agama'=>'Islam'];
$s4 = ['NIP'=>2345,'nama'=>'Deden','Jabatan'=>'Kabag','Divisi'=>'SDM','agama'=>'Islam'];
$s5 = ['NIP'=>2345,'nama'=>'Yanyo','Jabatan'=>'Asisten','Divisi'=>'Keuangan','agama'=>'Islam'];
$s6 = ['NIP'=>2345,'nama'=>'Fathur','Jabatan'=>'Manager','Divisi'=>'Operasional','agama'=>'Islam'];
$s7 = ['NIP'=>2345,'nama'=>'Emilia','Jabatan'=>'Asisten','Divisi'=>'Operasional','agama'=>'Islam'];
$s8 = ['NIP'=>2345,'nama'=>'Rose','Jabatan'=>'Staff','Divisi'=>'Operasional','agama'=>'Islam'];
$s9 = ['NIP'=>2345,'nama'=>'Ema','Jabatan'=>'Manager','Divisi'=>'Marketing','agama'=>'Islam'];
$s10 = ['NIP'=>2345,'nama'=>'Nora','Jabatan'=>'Asisten','Divisi'=>'Marketing','agama'=>'Islam'];
$judul = ['No','NIP','Nama','Jabatan','Divisi','Agama'];
//array assoc
$pegawai = [$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10];

$ar_judul = ['No','NIP','Nama','Jabatan','Divisi','Agama','Gaji Pokok']
@endphp

<h3 align="center">Daftar Gaji_Pokok Pegawai</h3>
<table border="0" align="center" cellpadding="10" cellspacing="0">
    <thead>
        <tr bgcolor="tomato">
            @foreach($ar_judul as $jdl)
            <th>{{ $jdl }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
    
        @foreach ($pegawai as $p)
        @php
        $warna = ($no % 2 == 1) ? 'green' : 'yellow';
        @switch($p)
        @case(Jabatan = 'Manager')
            <p>Publish<p>
            @break
        @case('draft')
            <span class="status">Draft</span>
            @break
 
            @default
                <span class="status">Trash</span>
        @endswitch
        @endphp
        <tr bgcolor="{{ $warna }}">
            <td>{{ $no++ }}</td>
            <td>{{ $p['NIP'] }}</td>
            <td>{{ $p['nama'] }}</td>
            <td>{{ $p['Jabatan'] }}</td>
            <td>{{ $p['Divisi']}}</td>
            <td>{{ $p['agama']}}</td>
            <td>{{ $p['agama']}}</td>
            <td>{{ $p}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

