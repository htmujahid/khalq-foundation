<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PlatformScreen extends Screen
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
        return 'Get Started';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'Welcome to You KHALQ Foundation Pakistan.';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Website')
                ->href('https://khalqfoundation.org/')
                ->icon('globe-alt'),

            Link::make()
                ->href('https://www.facebook.com/khalqfoundationpakistan')
                ->icon('social-facebook'),

            Link::make()
                ->href('https://twitter.com/KhalqPakistan')
                ->icon('social-twitter'),

            Link::make()
                ->href('https://www.instagram.com/khalqfoundationpakistan/')
                ->icon('social-instagram'),

        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            Layout::view('welcome'),
        ];
    }
}
