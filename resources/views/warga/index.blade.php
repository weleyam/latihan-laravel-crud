<table border="1">
    <tr>
        <th>NAMA</th>
        <th>NIK</th>
        <th>NO KK</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
    </tr>
    @foreach ($list_all_warga as $w)
    <tr>
        <td>{{$w->id}}</td>
        <td>{{$w->nama}}</td>
        <td>{{$w->nik}}</td>
        <td>{{$w->no_kk}}</td>
        <td>{{$w->alamat}}</td>
    </tr>
    @endforeach
</table>