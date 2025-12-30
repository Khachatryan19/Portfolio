@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>Edit About & Experience</h2>
        
        <form action="{{ route('admin.portfolio.update') }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="about_title">About Title</label>
                <input type="text" id="about_title" name="about_title" value="{{ old('about_title', $portfolioData->about_title) }}" required>
            </div>
            
            <div class="form-group">
                <label for="about_description">About Description</label>
                <textarea id="about_description" name="about_description" required>{{ old('about_description', $portfolioData->about_description) }}</textarea>
            </div>
            
            <div class="form-group">
                <label for="experience">Experience</label>
                <textarea id="experience" name="experience" required>{{ old('experience', $portfolioData->experience) }}</textarea>
            </div>
            
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
@endsection

