<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Karyawan</title>
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
    <h2>Laporan Karyawan</h2>
    <table>
        <thead>
            <tr>
                <th>Kode Karyawan</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>NIP</th>
                <th>Tanggal Masuk</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Gaji</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $karyawan)
                <tr>
                    <td>{{ $karyawan->kode_karyawan }}</td>
                    <td>{{ $karyawan->nama_karyawan }}</td>
                    <td>{{ $karyawan->jabatan }}</td>
                    <td>{{ $karyawan->nip }}</td>
                    <td>{{ $karyawan->tanggal_masuk }}</td>
                    <td>{{ $karyawan->alamat }}</td>
                    <td>{{ $karyawan->no_hp }}</td>
                    <td>{{ $karyawan->gaji }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>