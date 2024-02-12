@php
$no = 1;
//Array Scalar
$s1 = ['nama' => 'Hasan', 'nilai' => 90];
$s2 = ['nama' => 'Haeril', 'nilai' => 89];
$s3 = ['nama' => 'Irsyad', 'nilai' => 60];
$s4 = ['nama' => 'Rio', 'nilai' => 80];
$judul = ['No','Nama','Nilai','Keterangan'];
//Array Associative
$siswa = [$s1,$s2,$s3,$s4];
@endphp
<h3 align="center">Daftar Nilai Siswa</h3>
<table border="1" align="center" cellpadding="10">
    <thead>
        <tr bgcolor="pink">
            @foreach($judul as $jdl)
            <th>{{ $jdl }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $sis)
        {{-- logic kelulusan dan warna-warni dgn ternary --}}
        @php
        $ket = ($sis['nilai'] >= 60) ? 'Lulus' : 'Gagal';
        $warna = ($no % 2 == 0) ? 'greenyellow' : 'yellow';
        @endphp
        <tr bgcolor="{{ $warna }}">
            <td>{{ $no++ }}</td>
            <td>{{ $sis['nama'] }}</td>
            <td>{{ $sis['nilai'] }}</td>
            <td>{{ $ket }}</td>
        </tr>
        @endforeach
    </tbody>
</table>