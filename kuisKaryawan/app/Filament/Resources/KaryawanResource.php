<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KaryawanResource\Pages;
use App\Filament\Resources\KaryawanResource\RelationManagers;
use App\Models\Karyawan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KaryawanResource extends Resource
{
    protected static ?string $model = Karyawan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Karyawan'; 
    }

    public static function getPluralModelLabel(): string
    {
        return 'Karyawan'; 
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_karyawan') //sesuai sama migration tadi. jgn typo
                    ->label('Kode Proyek')
                    ->required(),

                Forms\Components\TextInput::make('nama_proyek') //sesuai sama migration tadi. jgn typo
                    ->label('Nama Proyek')
                    ->required(),

                Forms\Components\TextInput::make('jabatan') //sesuai sama migration tadi. jgn typo
                    ->label('Jabatan')
                    ->required(),

                Forms\Components\TextInput::make('nip') //sesuai sama migration tadi. jgn typo
                    ->label('NIP')
                    ->required(),

                Forms\Components\DateTimePicker::make('tanggal_masuk') //sesuai sama migration tadi. jgn typo
                    ->label('Tanggal Masuk')
                    ->required(),

                Forms\Components\TextInput::make('alamat') //sesuai sama migration tadi. jgn typo
                    ->label('Nama Proyek')
                    ->required(),

                Forms\Components\TextInput::make('no_hp') //sesuai sama migration tadi. jgn typo
                    ->label('No Hp')
                    ->required(),

                Forms\Components\TextInput::make('email') //sesuai sama migration tadi. jgn typo
                    ->label('Email')
                    ->required(),

                
                Forms\Components\TextInput::make('gaji') //sesuai sama migration tadi. jgn typo
                    ->label('Gaji Karyawan')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_karyawan') //jgn typo
                ->searchable()
                ->label('Kode Proyek'),

                Tables\Columns\TextColumn::make('nama_karyawan') //jgn typo
                ->searchable()
                ->label('Nama Karyawan'),

                Tables\Columns\TextColumn::make('jabatan') //jgn typo
                ->searchable()
                ->label('Jabatan'),

                Tables\Columns\TextColumn::make('nip') //jgn typo
                ->searchable()
                ->label('NIP'),

                Tables\Columns\TextColumn::make('tanggal_masuk') //jgn typo
                ->searchable()
                ->label('Tanggal Masuk'),

                Tables\Columns\TextColumn::make('alamat') //jgn typo
                ->searchable()
                ->label('Alamat'),

                Tables\Columns\TextColumn::make('no_hp') //jgn typo
                ->searchable()
                ->label('No HP'),

                Tables\Columns\TextColumn::make('email') //jgn typo
                ->searchable()
                ->label('Email'),

                Tables\Columns\TextColumn::make('gaji') //jgn typo
                ->searchable()
                ->label('Gaji Karyawan'),
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
            'index' => Pages\ListKaryawans::route('/'),
            'create' => Pages\CreateKaryawan::route('/create'),
            'edit' => Pages\EditKaryawan::route('/{record}/edit'),
        ];
    }
}
