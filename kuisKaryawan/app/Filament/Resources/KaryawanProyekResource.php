<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KaryawanProyekResource\Pages;
use App\Filament\Resources\KaryawanProyekResource\RelationManagers;
use App\Models\Karyawan_Proyek;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KaryawanProyekResource extends Resource
{
    protected static ?string $model = Karyawan_Proyek::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Karyawan Proyek'; 
    }

    public static function getPluralModelLabel(): string
    {
        return 'Karyawan Proyek'; 
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                Forms\Components\TextInput::make('kode_karyawanProyek') //sesuai sama migration tadi. jgn typo
                    ->label('Kode Karyawan Proyek')
                    ->required(),

                Forms\Components\TextInput::make('kode_karyawan') //sesuai sama migration tadi. jgn typo
                    ->label('Kode Karyawan')
                    ->required(),

                Forms\Components\TextInput::make('kode_proyek') //sesuai sama migration tadi. jgn typo
                    ->label('Kode Proyek')
                    ->required(),

                Forms\Components\TextInput::make('peran') //sesuai sama migration tadi. jgn typo
                    ->label('Peran')
                    ->required(),

                Forms\Components\DateTimePicker::make('tanggal_mulai_peran') //sesuai sama migration tadi. jgn typo
                    ->label('Tanggal Mulai Peran')
                    ->required(),
                
                Forms\Components\DateTimePicker::make('tanggal_selesai_peran') //sesuai sama migration tadi. jgn typo
                    ->label('Tanggal Selesai Peran')
                    ->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('kode_karyawanProyek')
                ->searchable()
                ->label('Kode Karyawan Proyek'), 
    
            Tables\Columns\TextColumn::make('kode_karyawan')
                ->searchable()
                ->label('Kode Karyawan'),
    
            Tables\Columns\TextColumn::make('kode_proyek')
                ->searchable()
                ->label('Kode Proyek'), 
    
            Tables\Columns\TextColumn::make('peran')
                ->searchable()
                ->label('Peran'),
    
            Tables\Columns\TextColumn::make('tanggal_mulai_peran')
                ->searchable()
                ->label('Tanggal Mulai Peran'), 
    
            Tables\Columns\TextColumn::make('tanggal_selesai_peran')
                ->searchable()
                ->label('Tanggal Selesai Peran'), 
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKaryawanProyeks::route('/'),
            'create' => Pages\CreateKaryawanProyek::route('/create'),
            'edit' => Pages\EditKaryawanProyek::route('/{record}/edit'),
        ];
    }
}
