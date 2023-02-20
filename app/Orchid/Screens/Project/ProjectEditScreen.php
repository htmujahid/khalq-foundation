<?php

namespace App\Orchid\Screens\Project;

use App\Models\Project;
use App\Orchid\Layouts\Project\ProjectEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ProjectEditScreen extends Screen
{
    public $project;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Project $project): iterable
    {
        return [
            'project' => $project, 
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Project';
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
            Layout::block(ProjectEditLayout::class)
                ->title(__('Project Information')),
        ];
    }
    
    /**
     * @param Project $project
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Project $project, Request $request)
    {
        $request->validate([
            'project.title' => 'required',
            'project.description' => 'required',
            'project.status' => 'required',
        ]);

        $project->fill($request->get('project'))
        ->fill([
                $project->exists? 'updated_by': 'created_by' 
                    => auth()->user()->email,
            ])
            ->save();

        Toast::info(__('Project was saved'));

        return redirect()->route('platform.projects');
    }
}
