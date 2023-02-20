<?php

namespace App\Orchid\Screens\Review;

use App\Models\Review;
use App\Orchid\Layouts\Review\ReviewEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ReviewEditScreen extends Screen
{
    public $review;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Review $review): iterable
    {
        return [
            'review' => $review,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Review';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Save'))
                ->icon('check')
                ->method('save'),
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
            Layout::block(ReviewEditLayout::class)
                ->title(__('Review Information')),
        ];
    }
    
    /**
     * @param Review $review
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Review $review, Request $request)
    {
        $request->validate([
            'review.name' => 'required',
            'review.message' => 'required',
        ]);

        $review->fill($request->get('review'))
            ->fill([
                    $review->exists? 'updated_by': 'created_by' 
                        => auth()->user()->email,
                ])
            ->save();

        Toast::info(__('Review was saved'));

        return redirect()->route('platform.reviews');
    }
}
