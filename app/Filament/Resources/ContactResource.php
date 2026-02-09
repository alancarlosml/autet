<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'Mensagens';

    protected static ?string $modelLabel = 'Mensagem';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::class::make('name')
                    ->required(),
                Forms\Components\TextInput::class::make('email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::class::make('subject')
                    ->required(),
                Forms\Components\Textarea::class::make('message')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::class::make('name')
                    ->label('Nome')
                    ->searchable(),
                Tables\Columns\TextColumn::class::make('email')
                    ->label('E-mail')
                    ->searchable(),
                Tables\Columns\TextColumn::class::make('subject')
                    ->label('Assunto'),
                Tables\Columns\TextColumn::class::make('created_at')
                    ->label('Enviado em')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::class::make(),
                Tables\Actions\DeleteAction::class::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::class::make([
                    Tables\Actions\DeleteBulkAction::class::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
        ];
    }
}
