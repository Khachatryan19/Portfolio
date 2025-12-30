@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>Edit Technology</h2>
        
        <form action="{{ route('admin.technologies.update', $technology) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="category" name="category" value="{{ old('category', $technology->category) }}" required>
            </div>
            
            <div class="form-group">
                <label for="name">Technology Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $technology->name) }}" required>
            </div>
            
            <div class="form-group">
                <label for="order">Order</label>
                <input type="number" id="order" name="order" value="{{ old('order', $technology->order) }}">
            </div>
            
            <button type="submit" class="btn">Update</button>
            <a href="{{ route('admin.technologies.index') }}" class="btn" style="background: rgba(255, 255, 255, 0.1); margin-left: 1rem;">Cancel</a>
        </form>
    </div>
@endsection

