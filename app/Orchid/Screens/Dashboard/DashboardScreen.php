<?php

namespace App\Orchid\Screens\Dashboard;

use App\Models\CaseDonation;
use App\Models\Cases;
use App\Models\Donor;
use App\Models\Project;
use App\Models\ProjectDonation;
use App\Models\User;
use App\Orchid\Layouts\Examples\ChartBarExample;
use App\Orchid\Layouts\Examples\ChartLineExample;
use App\Orchid\Layouts\Examples\ChartPercentageExample;
use App\Orchid\Layouts\Examples\ChartPieExample;
use App\Orchid\Layouts\Examples\TabMenuExample;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Repository;
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class DashboardScreen extends Screen
{
    /**
     * Fish text for the table.
     */
    public const TEXT_EXAMPLE = 'Lorem ipsum at sed ad fusce faucibus primis, potenti inceptos ad taciti nisi tristique
    urna etiam, primis ut lacus habitasse malesuada ut. Lectus aptent malesuada mattis ut etiam fusce nec sed viverra,
    semper mattis viverra malesuada quam metus vulputate torquent magna, lobortis nec nostra nibh sollicitudin
    erat in luctus.';

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'case_categories'  => [
                [
                    'name'   => 'Categories',
                    'values' => [
                        Cases::where('category', 'Education')->count(),
                        Cases::where('category', 'Medical')->count(),
                        Cases::whereNotIn('category', ['Education', 'Medical'])->count(),
                    ],
                    'labels' => ['Education', 'Medical', 'Others'],
                ],
            ],

            'metrics' => [
                'donation'    => ['value' => number_format(CaseDonation::sum('amount') + ProjectDonation::sum('amount'))],
                'cases' => ['value' => number_format(Cases::count())],
                'projects'   => ['value' => number_format(Project::count())],
                'donors'    => number_format(Donor::count()),
            ],

            'case' => Cases::with('case_donation')->orderBy('id', 'desc')->first(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Dashboard';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            // Button::make('Export file')
            //     ->method('export')
            //     ->icon('cloud-download')
            //     ->rawClick()
            //     ->novalidate(),

        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            Layout::metrics([
                'Donations'    => 'metrics.donation',
                'Donors' => 'metrics.donors',
                'Cases' => 'metrics.cases',
                'Projects' => 'metrics.projects',
            ]),

            Layout::columns([
                Layout::legend('case', [
                    Sight::make('id'),
                    Sight::make('title'),
                    Sight::make('category'),
                    Sight::make('status', 'Status'),
                    Sight::make('Required')->render(function (Cases $case) {
                        return number_format($case->amount);
                    }),
                    Sight::make('Collected')->render(function (Cases $case) {
                        return number_format($case->case_donation->sum('amount'));
                    }),
                    Sight::make('start_date', 'Started'),
                ]),
                
                ChartPieExample::make('case_categories', 'Case Categories'),

            ]),


        ];
    }

    /**
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function export()
    {
        return response()->streamDownload(function () {
            $csv = tap(fopen('php://output', 'wb'), function ($csv) {
                fputcsv($csv, ['header:col1', 'header:col2', 'header:col3']);
            });

            collect([
                ['row1:col1', 'row1:col2', 'row1:col3'],
                ['row2:col1', 'row2:col2', 'row2:col3'],
                ['row3:col1', 'row3:col2', 'row3:col3'],
            ])->each(function (array $row) use ($csv) {
                fputcsv($csv, $row);
            });

            return tap($csv, function ($csv) {
                fclose($csv);
            });
        }, 'File-name.csv');
    }
}
