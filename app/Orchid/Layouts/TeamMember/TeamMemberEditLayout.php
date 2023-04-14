<?php

namespace App\Orchid\Layouts\TeamMember;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class TeamMemberEditLayout extends Rows
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
            Input::make('team_member.name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Name')),

            Select::make('team_member.gender')
                ->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                    'Other' => 'Other'
                ])
                ->required()
                ->title(__('Gender')),
            
            Input::make('team_member.contact')
                ->type('text')
                ->required()
                ->title(__('Contact')),

            TextArea::make('team_member.address')
                ->rows(5)
                ->required()
                ->title(__('Address')),
            
            Input::make('team_member.email')
                ->type('email')
                ->required()
                ->title(__('Email')),

            Cropper::make('team_member.image')
                ->title('image')
                ->maxSize(1024 * 1024 * 10)
                ->width(200)
                ->height(200)
                ->targetRelativeUrl()
                ->storage('public')
                ->path('team_members'),

            Select::make('team_member.designation')
                ->options([
                    'OB' => 'OB',
                    'Director' => 'Director',
                    'Deputy Director' => 'Deputy Director',
                    'Executive' => 'Executive',
                ])
                ->required()
                ->title(__('Designation')),
            
            Select::make('team_member.portfolio')
                ->options([
                    'General' => 'General',
                    'Finance' => 'Finance',
                    'Human Resource' => 'Human Resource',
                    'Social Media Marketing' => 'Social Media Marketing',
                    'Marketing' => 'Marketing',
                    'Admin Events' => 'Admin Events',
                    'Graphics' => 'Graphics',
                    'Publication' => 'Publication',
                    'Media and Coverage' => 'Media and Coverage',
                    'External Relations' => 'External Relations',
                    'Campus Ambassador' => 'Campus Ambassador',
                ])
                ->required()
                ->title(__('Portfolio')),
        ];
    }
}
