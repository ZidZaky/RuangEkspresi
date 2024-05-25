@extends('layouts.layout')

@section('title')
    Manage User
@endsection

@section('content')
<div class="container">
    <h1>Manage Users</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->status }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <form action="{{ route('admin.users.updateStatus', $user->id) }}" method="POST">
                        @csrf
                        <select name="status">
                            <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            <option value="suspended" {{ $user->status == 'suspended' ? 'selected' : '' }}>Suspended</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </form>

                    <form action="{{ route('admin.users.updateRole', $user->id) }}" method="POST">
                        @csrf
                        <select name="role">
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="editor" {{ $user->role == 'editor' ? 'selected' : '' }}>Editor</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Update Role</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
