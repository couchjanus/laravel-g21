@extends('layouts.admin')

@section('sidebar')
    <h2>Sidebar</h2>
@endsection

@section('content')
<a href="{{ route('admin.categories.create') }}"><button>Add New</button></a>
    <h1>Categories List</h1>
    {{-- @forelse($categories as $category)
        <li>{{ $category->id }} | {{ $category->name }}</li>
    @empty
        <p>No categories yet</p>
    @endforelse --}}

    @isset($categories)
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>

         @foreach($categories as $category)
            <tr>
                @if($loop->even)
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                @elseif($loop->odd)
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                @endif

                <td><button>View</button><a href="{{ route('admin.categories.edit', $category->id) }}"><button>Edit</button></a><button>Delete</button></td>
            </tr>
            @endforeach
        </table>

    @endisset
    @empty($categories)
     <p>No categories yet</p>
    @endempty
@endsection
