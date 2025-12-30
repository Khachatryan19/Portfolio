@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>Add Technology</h2>
        
        <form action="{{ route('admin.technologies.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="category" name="category" value="{{ old('category') }}" required placeholder="e.g., Backend & Server-Side">
            </div>
            
            <div class="form-group">
                <label for="name">Technology Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="e.g., PHP, Laravel">
            </div>
            
            <div class="form-group">
                <label for="order">Order</label>
                <input type="number" id="order" name="order" value="{{ old('order', 0) }}">
            </div>
            
            <button type="submit" class="btn">Create</button>
            <a href="{{ route('admin.technologies.index') }}" class="btn" style="background: rgba(255, 255, 255, 0.1); margin-left: 1rem;">Cancel</a>
        </form>
    </div>
@endsection

