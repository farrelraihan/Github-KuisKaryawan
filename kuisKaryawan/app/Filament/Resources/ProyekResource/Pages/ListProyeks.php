<?php

namespace App\Filament\Resources\ProyekResource\Pages;

use App\Filament\Resources\ProyekResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProyeks extends ListRecords
{
    protected static string $resource = ProyekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetak_laporanProyek') //nama Fungsi yang dipanggil
            ->label('Cetak Laporan Proyek') //label yang ditampilkan di button
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakLaporan()) // A99
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan Proyek')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan Proyek?'),

            Actions\Action::make('cetak_totalBiayaProyek')
            ->label('Cetak Total Biaya Proyek')
            ->icon('heroicon-o-calculator')
            ->action(fn() => static::cetakTotalBiayaProyek())
            ->requiresConfirmation()
            ->modalHeading('Cetak Total Biaya Proyek')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan total biaya untuk setiap proyek?'),
        ];
    }

    public static function cetakLaporan() // A99
    {
        // Ambil data pengguna
        $data = \App\Models\proyek::all();
        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakProyek', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-proyek.pdf');
    }

    public static function cetakTotalBiayaProyek()
    {
        // Query to calculate total cost per project
        $data = \DB::table('proyeks as p')
            ->join('karyawan_proyeks as kp', 'p.kode_proyek', '=', 'kp.kode_proyek')
            ->join('karyawans as k', 'kp.kode_karyawan', '=', 'k.kode_karyawan')
            ->select(
                'p.nama_proyek',
                \DB::raw('SUM(FLOOR(DATEDIFF(kp.tanggal_selesai_peran, kp.tanggal_mulai_peran) / 30) * k.gaji) as total_biaya_karyawan')
            )
            ->whereIn('p.nama_proyek', ['Proyek A', 'Proyek B', 'Proyek C'])
            ->groupBy('p.nama_proyek')
            ->get();

        // Load view for the total cost PDF
        $pdf = \PDF::loadView('laporan.cetakTotalBiayaProyek', ['data' => $data]);
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-total-biaya-proyek.pdf');
    }
}
