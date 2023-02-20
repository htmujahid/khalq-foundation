<?php

namespace App\Orchid\Layouts\HeroSection;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class HeroSectionEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('hero_section.headline')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Headline')),
            
            Input::make('hero_section.subheadline')
                ->type('text')
                ->required()
                ->title(__('Subheadline')),

            Select::make('hero_section.status')
                ->options([
                    'Active' => 'Active',
                    'Inactive' => 'Inactive',
                ])
                ->required()
                ->title(__('Status')),

        ];
    }
}
