<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PementoranResource\Pages;
use App\Filament\Resources\PementoranResource\RelationManagers;
use App\Models\pementoran_record;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class PementoranResource extends Resource
{
    protected static ?string $model = pementoran_record::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';

    protected static ?string $navigationGroup = 'Pementoran';
    protected static ?string $navigationLabel = 'Bimbingan';
    protected static ?string $modelLabel = 'Bimbingan';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Data Diri')
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('npm')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('alamat')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('Nomor hp')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('info bimbingan')
                    ->schema([
                        Forms\Components\TextInput::make('nama mentor')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Radio::make('')
                            ->label('Semester :')
                            ->options([
                                'Ganjil' => 'Ganjil',
                                'Genap' => 'Genap',
                                'Antara' => 'Antara',
                            ])->inline()
                            ->required(),
                        Forms\Components\Radio::make('')
                            ->label('Pertemuan :')
                            ->options([
                                'Awal' => 'Awal',
                                'Genap' => 'Genap',
                                'Akhir' => 'Akhir',
                            ])->inline()
                            ->required(),
                        Forms\Components\TextInput::make('ip')
                            ->numeric()
                            ->required()
                            ->maxLength(4),
                        Forms\Components\TextInput::make('ipk')
                            ->numeric()
                            ->required()
                            ->maxLength(4),
                        Forms\Components\DatePicker::make('Hari Tanggal')
                            ->required(),
                    ]),

                Forms\Components\Section::make('permasalahan')
                    ->schema([
                        Forms\Components\RichEditor::make('permasalahan / keluhan mahasiswa')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListPementorans::route('/'),
            'create' => Pages\CreatePementoran::route('/create'),
            'edit' => Pages\EditPementoran::route('/{record}/edit'),
        ];
    }
}
