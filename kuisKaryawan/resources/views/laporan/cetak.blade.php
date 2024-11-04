<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Karyawan Proyek</title>
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
    <h2>Laporan Pengguna</h2>
    <table>
        <thead>
            <tr>
                <th>Kode Karpro</th>
                <th>Kode Karyawan</th>
                <th>Kode Proyek</th>
                <th>Peran</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $karyawan_proyek)
                <tr>
                    <td>{{ $karyawan_proyek->kode_karyawanProyek }}</td>
                    <td>{{ $karyawan_proyek->kode_karyawan }}</td>
                    <td>{{ $karyawan_proyek->kode_proyek }}</td>
                    <td>{{ $karyawan_proyek->peran }}</td>
                    <td>{{ $karyawan_proyek->tanggal_mulai_peran }}</td>
                    <td>{{ $karyawan_proyek->tanggal_selesai_peran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>