<?php

namespace App\Orchid\Layouts\Case;

use App\Models\Cases;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CaseListLayout extends Table
{
    protected $auth;
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'cases';

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
            TD::make('category', 'Category'),
            TD::make('Collected')
                ->render(function($case){
                    return $case->case_donation()->sum('amount');
                }),
            TD::make('amount', 'Amount'),
            
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Cases $case) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.cases.edit', $case->id)
                            ->icon('pencil')
                            ->canSee(Auth::user()->hasAccess('platform.case.update')),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $case->id,
                            ])
                            ->canSee(Auth::user()->hasAccess('platform.case.delete')),
                    ]))->canSee(Auth::user()->hasAnyAccess([
                        'platform.case.update',
                        'platform.case.delete'
                    ])),
        ];
    }
    
    /**
     * @return string
     */
    protected function textNotFound(): string
    {
        return __('There are no cases yet.');
    }

}
