<?php

namespace App\Orchid\Layouts\Project;

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ProjectListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'projects';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [                
            TD::make('id', 'ID'),
            TD::make('title', 'Title'),
            TD::make('outcome', 'Outcome'),
            TD::make('start_date', 'Start Date'),
            TD::make('end_date', 'End Date'),
            TD::make('status', 'Status'),
            
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Project $project) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.projects.edit', $project->id)
                            ->icon('pencil')
                            ->canSee(Auth::user()->hasAccess('platform.project.update')),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $project->id,
                            ])
                            ->canSee(Auth::user()->hasAccess('platform.project.delete')),
                    ]))->canSee(Auth::user()->hasAnyAccess([
                        'platform.project.update',
                        'platform.project.delete',
                    ])),
        ];    
    }

    /**
     * @return string
     */
    protected function textNotFound(): string
    {
        return __('There are no projects yet.');
    }

}
