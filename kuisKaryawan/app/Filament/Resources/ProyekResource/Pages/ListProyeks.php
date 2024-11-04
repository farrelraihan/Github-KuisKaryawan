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
}
