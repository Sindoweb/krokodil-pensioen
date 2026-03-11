<?php

namespace App\Filament\Pages;

use App\Models\HomepageContent;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;

/**
 * @property-read Schema $form
 */
class ManageHomepage extends Page
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Homepage';

    protected static ?string $title = 'Homepage beheren';

    protected string $view = 'filament.pages.manage-homepage';

    /** @var array<string, mixed>|null */
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill($this->getRecord()?->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    FileUpload::make('hero_image')
                        ->label('Hoofdafbeelding')
                        ->image()
                        ->imageEditor()
                        ->disk('public')
                        ->directory('homepage')
                        ->visibility('public')
                        ->maxSize(5120)
                        ->columnSpanFull(),
                    RichEditor::make('body')
                        ->label('Tekst')
                        ->columnSpanFull(),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('save')
                                ->label('Opslaan')
                                ->submit('save')
                                ->keyBindings(['mod+s']),
                        ]),
                    ]),
            ])
            ->record($this->getRecord())
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $record = $this->getRecord();

        if (! $record) {
            $record = new HomepageContent;
        }

        $record->fill($data);
        $record->save();

        if ($record->wasRecentlyCreated) {
            $this->form->record($record)->saveRelationships();
        }

        Notification::make()
            ->success()
            ->title('Homepage opgeslagen')
            ->send();
    }

    public function getRecord(): ?HomepageContent
    {
        return HomepageContent::query()->first();
    }
}
