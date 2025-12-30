@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>Edit Contact</h2>
        
        <form action="{{ route('admin.contacts.update', $contact) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="type">Type</label>
                <select id="type" name="type" required>
                    <option value="email" {{ $contact->type === 'email' ? 'selected' : '' }}>Email</option>
                    <option value="linkedin" {{ $contact->type === 'linkedin' ? 'selected' : '' }}>LinkedIn</option>
                    <option value="github" {{ $contact->type === 'github' ? 'selected' : '' }}>GitHub</option>
                    <option value="gitlab" {{ $contact->type === 'gitlab' ? 'selected' : '' }}>GitLab</option>
                    <option value="bitbucket" {{ $contact->type === 'bitbucket' ? 'selected' : '' }}>Bitbucket</option>
                    <option value="codewars" {{ $contact->type === 'codewars' ? 'selected' : '' }}>Codewars</option>
                    <option value="instagram" {{ $contact->type === 'instagram' ? 'selected' : '' }}>Instagram</option>
                    <option value="facebook" {{ $contact->type === 'facebook' ? 'selected' : '' }}>Facebook</option>
                    <option value="telegram" {{ $contact->type === 'telegram' ? 'selected' : '' }}>Telegram</option>
                    <option value="twitter" {{ $contact->type === 'twitter' ? 'selected' : '' }}>Twitter</option>
                    <option value="other" {{ $contact->type === 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="label">Label</label>
                <input type="text" id="label" name="label" value="{{ old('label', $contact->label) }}" required>
            </div>
            
            <div class="form-group">
                <label for="value">Value/URL</label>
                <input type="text" id="value" name="value" value="{{ old('value', $contact->value) }}" required>
            </div>
            
            <div class="form-group">
                <label for="order">Order</label>
                <input type="number" id="order" name="order" value="{{ old('order', $contact->order) }}">
            </div>
            
            <button type="submit" class="btn">Update</button>
            <a href="{{ route('admin.contacts.index') }}" class="btn" style="background: rgba(255, 255, 255, 0.1); margin-left: 1rem;">Cancel</a>
        </form>
    </div>
@endsection

