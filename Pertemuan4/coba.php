<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: left;
        }
        .container {
            margin: 20px;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Sistem Pencatatan Data Penjualan</h2>
    <p>[Form Input untuk Data Penjualan]</p>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga Per Produk</th>
                <th>Jumlah Terjual</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody id="sales-data">
            <tr>
                <td>Produk A</td>
                <td>10000</td>
                <td>5</td>
                <td>50000</td>
            </tr>
            <tr>
                <td>Produk B</td>
                <td>7500</td>
                <td>10</td>
                <td>75000</td>
            </tr>
            <tr>
                <td>Produk C</td>
                <td>12000</td>
                <td>8</td>
                <td>96000</td>
            </tr>
            <tr>
                <th colspan="2">Total Penjualan</th>
                <th>23</th>
                <th>221000</th>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>