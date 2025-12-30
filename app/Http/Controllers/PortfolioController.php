<?php

namespace App\Http\Controllers;

use App\Models\PortfolioData;
use App\Models\Technology;
use App\Models\Project;
use App\Models\Contact;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolioData = PortfolioData::first();
        
        if (!$portfolioData) {
            $portfolioData = new PortfolioData([
                'about_title' => 'About Me',
                'about_description' => 'I am a Backend Developer with 4 years of professional experience, passionate about building scalable, efficient, and reliable web applications.',
                'experience' => 'I have experience handling complex projects that involve multiple technologies, third-party API integrations, server setups, and ensuring smooth end-to-end functionality.',
            ]);
        }
        
        // Get technologies grouped by category
        $technologies = Technology::orderBy('category')->orderBy('order')->get();
        $technologiesGrouped = $technologies->groupBy('category')->map(function ($items) {
            return $items->pluck('name')->toArray();
        })->toArray();
        
        // Get projects
        $projects = Project::orderBy('order')->get()->map(function ($project) {
            return [
                'name' => $project->name,
                'description' => $project->description,
            ];
        })->toArray();
        
        // Get contacts
        $contacts = Contact::orderBy('order')->get()->mapWithKeys(function ($contact) {
            return [$contact->type => [
                'value' => $contact->value,
                'label' => $contact->label,
            ]];
        })->toArray();
        
        $data = [
            'about' => [
                'title' => $portfolioData->about_title,
                'description' => $portfolioData->about_description,
            ],
            'technologies' => $technologiesGrouped,
            'projects' => $projects,
            'experience' => $portfolioData->experience,
            'contacts' => $contacts,
        ];

        return view('portfolio.index', compact('data'));
    }
}
