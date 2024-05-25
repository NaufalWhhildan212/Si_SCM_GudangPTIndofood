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
<h3>Data Jadwal Report</h3>
</center>
<table id="customers">
    <tr><th>No</th>
        <th>Id_Jadwal</th>
        <th>Id_Pengiriman</th>
        <th>Jumlah_Barang</th>
        <th>Lokasi</th>
      </tr>
      @foreach ($dtCetakJadwal as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->Id_Jadwal }}</td>
        <td>{{ $item->Id_Pengiriman }}</td>
        <td>{{ $item->Jumlah_Barang }}</td>
        <td>{{ $item->Lokasi }}</td>
      </tr>
      @endforeach
</table>

</body>
</html>


