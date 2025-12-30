@extends('admin.layout')

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h2>Projects</h2>
            <a href="{{ route('admin.projects.create') }}" class="btn">Add Project</a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ Str::limit($project->description, 50) }}</td>
                        <td>{{ $project->order }}</td>
                        <td class="actions">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn" style="padding: 0.5rem 1rem; font-size: 0.875rem;">Edit</a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="padding: 0.5rem 1rem; font-size: 0.875rem;" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

