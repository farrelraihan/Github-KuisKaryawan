<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProyekResource\Pages;
use App\Filament\Resources\ProyekResource\RelationManagers;
use App\Models\Proyek;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProyekResource extends Resource
{
    protected static ?string $model = Proyek::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Proyek'; 
    }

    public static function getPluralModelLabel(): string
    {
        return 'Proyek'; 
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_proyek') //sesuai sama migration tadi. jgn typo
                    ->label('Kode Proyek')
                    ->required(),

                Forms\Components\TextInput::make('nama_proyek') //sesuai sama migration tadi. jgn typo
                    ->label('Nama Proyek')
                    ->required(),

                Forms\Components\TextInput::make('klien') //sesuai sama migration tadi. jgn typo
                    ->label('Klien')
                    ->required(),

                Forms\Components\DateTimePicker::make('tanggal_mulai') //sesuai sama migration tadi. jgn typo
                    ->label('Tanggal Mulai')
                    ->required(),

                Forms\Components\DateTimePicker::make('tanggal_selesai') //sesuai sama migration tadi. jgn typo
                    ->label('Tanggal Selesai')
                    ->required(),

                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'Berjalan' => 'Berjalan',
                        'Selesai' => 'Selesai',
                        'Tertunda' => 'Tertunda',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('anggaran') //sesuai sama migration tadi. jgn typo
                    ->label('Anggaran ')
                    ->required(),

                Forms\Components\TextInput::make('deskripsi') //sesuai sama migration tadi. jgn typo
                    ->label('Deskripsi')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_proyek') //jgn typo
                ->searchable()
                ->label('Kode Proyek'),

                Tables\Columns\TextColumn::make('nama_proyek') //jgn typo
                ->searchable()
                ->label('Nama Proyek'),

                Tables\Columns\TextColumn::make('klien') //jgn typo
                ->searchable()
                ->label('Klien'),

                Tables\Columns\TextColumn::make('tanggal_mulai') //jgn typo
                ->searchable()
                ->label('Tanggal Mulai'),

                Tables\Columns\TextColumn::make('tanggal_selesai') //jgn typo
                ->searchable()
                ->label('Tanggal Selesai'),

                Tables\Columns\TextColumn::make('status') //jgn typo
                ->searchable()
                ->label('Status'),

                Tables\Columns\TextColumn::make('anggaran') //jgn typo
                ->searchable()
                ->label('Anggaran'),

                Tables\Columns\TextColumn::make('deskripsi') //jgn typo
                ->searchable()
                ->label('Deskripsi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListProyeks::route('/'),
            'create' => Pages\CreateProyek::route('/create'),
            'edit' => Pages\EditProyek::route('/{record}/edit'),
        ];
    }
}
