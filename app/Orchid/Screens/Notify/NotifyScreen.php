<?php

namespace App\Orchid\Screens\Notify;

use App\Mail\TestMail;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Facades\Mail;
use Orchid\Support\Facades\Toast;

class NotifyScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Notify';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Send'))
                ->icon('paper-plane')
                ->method('send'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('subject')
                    ->title('Subject')
                    ->required()
                    ->placeholder('Message subject line'),
    
                Relation::make('emails.')
                    ->title('Recipients')
                    ->multiple()
                    ->required()
                    ->placeholder('Email addresses')
                    ->fromModel(TeamMember::class,'name','email'),
    
                Quill::make('content')
                    ->title('Content')
                    ->required()
                    ->placeholder('Insert text here ...'),
            ]),
        ];
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    public function send(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
            'emails' => 'required',
        ]);

        $subject = $request->input('subject');
        $emails = $request->input('emails');
        $content = $request->input('content');
        $sender = $request->user()->name;

        Mail::to($emails)
            ->send(new TestMail($subject,$content, $sender)); 

        Toast::info(__('Emails sent successfully.'));

        return redirect()->route('platform.notify');
    }
}
