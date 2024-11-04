<?php

namespace App\Filament\Resources\KaryawanResource\Pages;

use App\Filament\Resources\KaryawanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKaryawans extends ListRecords
{
    protected static string $resource = KaryawanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetak_laporanKaryawan') //nama Fungsi yang dipanggil
            ->label('Cetak Laporan Karyawan') //label yang ditampilkan di button
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakLaporan()) // A99
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan Karyawan')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan Karyawan?'),
        ];
    }

    public static function cetakLaporan() // A99
    {
        // Ambil data pengguna
        $data = \App\Models\karyawan::all();
        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakKaryawan', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-karyawan.pdf');
    }
}
