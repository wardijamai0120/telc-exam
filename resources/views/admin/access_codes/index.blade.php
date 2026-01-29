@extends('layouts.admin')

@section('content')
<h2>Access Codes</h2>

<a href="/admin/access-codes/create">➕ Create Code</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
<tr>
    <th>Code</th>
    <th>Expires</th>
    <th>Status</th>
    <th>Action</th>
</tr>

@foreach($codes as $code)
<tr>
    <td>{{ $code->code }}</td>
    <td>{{ $code->expires_at }}</td>
    <td>{{ $code->is_active ? 'Active' : 'Expired' }}</td>
    <td>
        <form method="POST" action="/admin/access-codes/{{ $code->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach

</table>
@endsection
