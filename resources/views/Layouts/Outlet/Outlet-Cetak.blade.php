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
<h3>Data Outlet Report</h3>
</center>
<table id="customers">
    <tr><th>No</th>
        <th>Id_Outlet</th>
        <th>Nama_Outlet</th>
        <th>Alamat_Outlet</th>
        <th>No_Telepon</th>
        <th>Id_Barang</th>
      </tr>
      @foreach ($dtCetakOutlet as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->Id_Outlet }}</td>
        <td>{{ $item->Nama_Outlet }}</td>
        <td>{{ $item->Alamat_Outlet }}</td>
        <td>{{ $item->No_Telepon }}</td>
        <td>{{ $item->Id_Barang }}</td>
      </tr>
      @endforeach
</table>

</body>
</html>


