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
<h3>Data Pengiriman Report</h3>
</center>
<table id="customers">
    <tr><th>No</th>
        <th>Id_Pengiriman</th>
        <th>Berat_Muatan</th>
        <th>Id_Truk</th>
        <th>Id_Pegawai</th>
        <th>Id_Barang</th>
        <th>Id_Jadwal</th> 
        <th>Id_Rute</th>
        <th>Id_Supir</th>
      </tr>
      @foreach ($dtCetakPengiriman as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->Id_Pengiriman }}</td>
        <td>{{ $item->Berat_Muatan }}</td>
        <td>{{ $item->Id_Truk}}</td>
        <td>{{ $item->Id_Pegawai }}</td>
        <td>{{ $item->Id_Barang }}</td>
        <td>{{ $item->Id_Jadwal }}</td>
        <td>{{ $item->Id_Rute }}</td>
        <td>{{ $item->Id_Supir }}</td>
      </tr>
      @endforeach
</table>

</body>
</html>


