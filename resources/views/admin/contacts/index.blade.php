@extends('admin.layout')

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h2>Contacts</h2>
            <a href="{{ route('admin.contacts.create') }}" class="btn">Add Contact</a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Label</th>
                    <th>Value</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->type }}</td>
                        <td>{{ $contact->label }}</td>
                        <td>{{ $contact->value }}</td>
                        <td>{{ $contact->order }}</td>
                        <td class="actions">
                            <a href="{{ route('admin.contacts.edit', $contact) }}" class="btn" style="padding: 0.5rem 1rem; font-size: 0.875rem;">Edit</a>
                            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" style="display: inline;">
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

