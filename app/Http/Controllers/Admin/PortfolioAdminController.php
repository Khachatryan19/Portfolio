<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioData;
use Illuminate\Http\Request;

class PortfolioAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $portfolioData = PortfolioData::first();
        
        if (!$portfolioData) {
            $portfolioData = PortfolioData::create([
                'about_title' => 'About Me',
                'about_description' => '',
                'experience' => '',
            ]);
        }

        return view('admin.portfolio.edit', compact('portfolioData'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'about_title' => 'required|string|max:255',
            'about_description' => 'required|string',
            'experience' => 'required|string',
        ]);

        $portfolioData = PortfolioData::firstOrNew();
        $portfolioData->about_title = $request->about_title;
        $portfolioData->about_description = $request->about_description;
        $portfolioData->experience = $request->experience;
        $portfolioData->save();

        return redirect()->route('admin.portfolio.edit')->with('success', 'Portfolio data updated successfully!');
    }
}
