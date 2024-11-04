<!DOCTYPE html>
<html>
<head>
    <title>Laporan Total Biaya Proyek</title>
</head>
<body>
    <h1>Laporan Total Biaya Proyek</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Proyek</th>
                <th>Total Biaya Proyek</th>
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
