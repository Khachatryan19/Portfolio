@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>Add Contact</h2>
        
        <form action="{{ route('admin.contacts.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="type">Type</label>
                <select id="type" name="type" required>
                    <option value="email">Email</option>
                    <option value="linkedin">LinkedIn</option>
                    <option value="github">GitHub</option>
                    <option value="twitter">Twitter</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="label">Label</label>
                <input type="text" id="label" name="label" value="{{ old('label') }}" required placeholder="e.g., Email, LinkedIn">
            </div>
            
            <div class="form-group">
                <label for="value">Value/URL</label>
                <input type="text" id="value" name="value" value="{{ old('value') }}" required placeholder="e.g., email@example.com or https://linkedin.com/...">
            </div>
            
            <div class="form-group">
                <label for="order">Order</label>
                <input type="number" id="order" name="order" value="{{ old('order', 0) }}">
            </div>
            
            <button type="submit" class="btn">Create</button>
            <a href="{{ route('admin.contacts.index') }}" class="btn" style="background: rgba(255, 255, 255, 0.1); margin-left: 1rem;">Cancel</a>
        </form>
    </div>
@endsection

