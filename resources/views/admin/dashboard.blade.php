@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>Dashboard</h2>
        <p>Welcome to the Portfolio Admin Panel. Use the sidebar to manage your portfolio content.</p>
    </div>
    
    <div class="card">
        <h3>Quick Stats</h3>
        <p>Technologies: {{ \App\Models\Technology::count() }}</p>
        <p>Projects: {{ \App\Models\Project::count() }}</p>
        <p>Contacts: {{ \App\Models\Contact::count() }}</p>
    </div>
@endsection

