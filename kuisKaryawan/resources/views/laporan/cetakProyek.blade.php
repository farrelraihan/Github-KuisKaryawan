<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Proyek</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h2>Laporan Proyek</h2>
    <table>
        <thead>
            <tr>
                <th>Kode Proyek</th>
                <th>Nama Proyek</th>
                <th>Klien</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Status</th>
                <th>Anggaran</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $proyek)
                <tr>
                    <td>{{ $proyek->kode_proyek }}</td>
                    <td>{{ $proyek->nama_proyek }}</td>
                    <td>{{ $proyek->klien }}</td>
                    <td>{{ $proyek->tanggal_mulai }}</td>
                    <td>{{ $proyek->tanggal_selesai }}</td>
                    <td>{{ $proyek->status }}</td>
                    <td>{{ $proyek->anggaran }}</td>
                    <td>{{ $proyek->deskripsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>