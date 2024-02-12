@php
$no = 1;
// Array Scalar
$s1 = ['Nomor' => 1, 'Nama' => 'Fawwaz', 'Alamat' => 'Jakarta'];
$s2 = ['Nomor' => 2, 'Nama' => 'Inaya', 'Alamat' => 'Depok'];
$s3 = ['Nomor' => 3, 'Nama' => 'Zidan', 'Alamat' => 'Binjai'];
$s4 = ['Nomor' => 4, 'Nama' => 'Bambang', 'Alamat' => 'Mojokerto'];
$s5 = ['Nomor' => 5, 'Nama' => 'Unyil', 'Alamat' => 'Bandung'];
$judul = ['Nomor', 'Nama', 'Alamat'];
// Array Associative
$siswa = [$s1, $s2, $s3, $s4, $s5];
@endphp

<h1 align="center">Data Mahasantri</h1>
<table border="1" align="center" cellpadding="10">
    <thead>
        <tr>
            @foreach($judul as $jdl)
            <th><strong>{{ $jdl }}</strong></th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $sis)
        <tr>
            <td align="center"><strong>{{ $sis['Nomor'] }}</strong></td>
            <td>{{ $sis['Nama'] }}</td>
            <td>{{ $sis['Alamat'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>