<?php

namespace App\Filament\Resources\KaryawanProyekResource\Pages;

use App\Filament\Resources\KaryawanProyekResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;


class ListKaryawanProyeks extends ListRecords
{
    protected static string $resource = KaryawanProyekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetak_laporan') //nama Fungsi yang dipanggil
            ->label('Cetak Laporan KarPro') //label yang ditampilkan di button
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakLaporan()) // A99
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan KarPro')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan KarPro?'),
        ];
    }

    public static function cetakLaporan() // A99
    {
        // Ambil data pengguna
        $data = \App\Models\karyawan_proyek::all();
        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetak', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-karpro.pdf');
    }

}
