<?php

namespace App\Filament\Resources;

use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\ToggleButtons;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\ContactResource\Pages\EditEmailContact;
use App\Filament\Resources\ContactResource\Pages\ViewEmailContact;
use App\Filament\Resources\ContactResource\Pages\ListEmailContacts;

class EmailContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    public static function getModelLabel(): string
    {
        return __('Email received');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Emails received');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Users');
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->orderBy('answered', 'desc')->orderBy('created_at', 'asc');
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('answered', false)->count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        $countTotal = static::getModel()::count();
        $count = static::getModel()::where('answered', false)->count();
        $color = 'success';

        if ($count > 0) {
            $color = ($count * 100 / $countTotal) > 50 ? 'danger' : 'primary';
        }

        return $color;
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return __('Emails pending response');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns([
                        'sm' => 9,
                        'md' => 12,
                    ])
                    ->schema([
                        Fieldset::make()
                            ->label('User')
                            ->translateLabel()
                            ->columnSpan([
                                'sm' => 6,
                                'md' => 8,
                            ])
                            ->schema([
                                Placeholder::make('name')
                                    ->translateLabel()
                                    ->content(fn(Contact $record): string => $record->name),
                                Placeholder::make('last_name')
                                    ->translateLabel()
                                    ->content(fn(Contact $record): string => $record->last_name),

                            ]),
                        Fieldset::make()
                            ->label('Status')
                            ->translateLabel()
                            ->columnSpan(3)
                            ->schema([
                                ToggleButtons::make('answered')
                                    ->translateLabel()
                                    ->boolean()
                                    ->grouped()
                                    ->inline()
                                    ->options([
                                        true => __('Yes'),
                                        false => __('No'),
                                    ])
                                    ->icons([
                                        true => 'heroicon-o-check-circle',
                                        false => 'heroicon-o-x-circle',
                                    ])
                                    ->colors([
                                        true => 'success',
                                        false => 'danger',
                                    ]),
                            ]),
                        FieldSet::make()
                            ->label('Email')
                            ->translateLabel()
                            ->columnSpan('full')
                            ->schema([
                                Placeholder::make('')
                                    ->translateLabel()
                                    ->content(fn(Contact $record): string => $record->email)
                                    ->columnSpan('full'),
                            ]),
                        Fieldset::make()
                            ->label('Message')
                            ->translateLabel()
                            ->columnSpan('full')
                            ->schema([
                                Placeholder::make('')
                                    ->content(fn(Contact $record): string => $record->message)
                                    ->columnSpan('full'),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('last_name')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('email')
                    ->translateLabel()
                    ->searchable(),
                IconColumn::make('answered')
                    ->translateLabel()
                    ->alignCenter()
                    ->boolean(),
                TextColumn::make('created_at')
                    ->translateLabel()
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                ViewAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                DeleteBulkAction::make(),
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
            'index' => ListEmailContacts::route('/'),
            'view' => ViewEmailContact::route('/{record}'),
            'edit' => EditEmailContact::route('/{record}/edit'),
        ];
    }
}
