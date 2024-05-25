<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1d528a;
  color: white;
}
</style>
</head>
<body>
<center>
<h3>Data Pegawai Report</h3>
</center>
<table id="customers">
    <tr><th>No</th>
        <th>Id_Supir</th>
        <th>Nama_Supir</th>
        <th>Alamat</th>
        <th>No_Telepon</th>
        <th>Id_Pegawai</th>
      </tr>
      @foreach ($dtCetakSupir as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->Id_Supir }}</td>
        <td>{{ $item->Nama_Supir }}</td>
        <td>{{ $item->Alamat }}</td>
        <td>{{ $item->No_Telepon }}</td>
        <td>{{ $item->Id_Pegawai }}</td>
      </tr>
      @endforeach
</table>

</body>
</html>


