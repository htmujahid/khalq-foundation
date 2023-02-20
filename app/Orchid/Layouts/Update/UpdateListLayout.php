<?php

namespace App\Orchid\Layouts\Update;

use App\Models\Update;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class UpdateListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'updates';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [                
            TD::make('id', 'ID'),
            TD::make('link', 'Link'),
            TD::make('status', 'Status'),
            
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Update $update) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.updates.edit', $update->id)
                            ->icon('pencil')
                            ->canSee(Auth::user()->hasAccess('platform.update.update')),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $update->id,
                            ])
                            ->canSee(Auth::user()->hasAccess('platform.update.delete')),
                    ]))->canSee(Auth::user()->hasAnyAccess([
                        'platform.update.update',
                        'platform.update.delete',
                    ])),
        ];    
    }

    /**
     * @return string
     */
    protected function textNotFound(): string
    {
        return __('There are no updates yet.');
    }

}
