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
<h3>Data Barang Report</h3>
</center>
<table id="customers">
    <tr><th>No</th>
        <th>Id_Barang/th>
        <th>Nama_Barang</th>
        <th>Harga_Barang</th>
        <th>Berat_Barang</th>
        <th>Id_Gudang</th>
      </tr>
      @foreach ($dtCetakBarang as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->Id_Barang}}</td>
        <td>{{ $item->Nama_Barang }}</td>
        <td>{{ $item->Harga_Barang }}</td>
        <td>{{ $item->Berat_Barang }}</td>
        <td>{{ $item->Id_Gudang }}</td>
      </tr>
      @endforeach
</table>

</body>
</html>


