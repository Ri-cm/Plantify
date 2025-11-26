<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            margin-top: 15px;
        }
        table th, table td {
            border: 1px solid #666;
            padding: 8px;
            text-align: left;
        }
        table th {
            background: #e0e0e0;
        }
    </style>
</head>
<body>

<h2>Laporan Data Tanaman - PLANTIFY</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    @foreach($plants as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->category->name }}</td>
        <td>Rp {{ number_format($p->price) }}</td>
        <td>{{ $p->stock }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>
