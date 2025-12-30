@extends('admin.layout')

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h2>Technologies</h2>
            <a href="{{ route('admin.technologies.create') }}" class="btn">Add Technology</a>
        </div>
        
        @foreach($grouped as $category => $technologies)
            <div style="margin-bottom: 2rem;">
                <h3 style="margin-bottom: 1rem; color: #cbd5e1;">{{ $category }}</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Order</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($technologies as $technology)
                            <tr>
                                <td>{{ $technology->name }}</td>
                                <td>{{ $technology->order }}</td>
                                <td class="actions">
                                    <a href="{{ route('admin.technologies.edit', $technology) }}" class="btn" style="padding: 0.5rem 1rem; font-size: 0.875rem;">Edit</a>
                                    <form action="{{ route('admin.technologies.destroy', $technology) }}" method="POST" style="display: inline;">
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
        @endforeach
    </div>
@endsection

