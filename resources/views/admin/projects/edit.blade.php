@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>Edit Project</h2>
        
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="name">Project Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $project->name) }}" required>
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required>{{ old('description', $project->description) }}</textarea>
            </div>
            
            <div class="form-group">
                <label for="order">Order</label>
                <input type="number" id="order" name="order" value="{{ old('order', $project->order) }}">
            </div>
            
            <button type="submit" class="btn">Update</button>
            <a href="{{ route('admin.projects.index') }}" class="btn" style="background: rgba(255, 255, 255, 0.1); margin-left: 1rem;">Cancel</a>
        </form>
    </div>
@endsection

