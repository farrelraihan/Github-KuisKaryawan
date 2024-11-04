<!DOCTYPE html>
<html>
<head>
    <title>Laporan Total Biaya Proyek</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #4A90E2;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        thead {
            background-color: #4A90E2;
            color: #ffffff;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody tr:hover {
            background-color: #f1f1f1;
        }
        th {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        table, th, td {
            border: none;
            border-radius: 8px;
        }
        td {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Laporan Total Biaya Proyek</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Proyek</th>
                <th>Total Biaya Karyawan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->nama_proyek }}</td>
                    <td>Rp {{ number_format($item->total_biaya_karyawan, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
