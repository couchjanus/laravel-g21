@extends('layouts.admin')

@section('sidebar')
    <h2>Sidebar</h2>
@endsection

@section('content')

<h1>Create New Category</h1>
<form method="POST" action="{{ route('admin.categories.store') }}">
@csrf

    <label $for="name">Category Name</label>
    <input name="name" id="name" placeholder="Enter Category Name" class="@error('name') is-invalid @enderror">
    @error('name')
    <div>{{ $message }}</div>
    @enderror
    <hr>
    <label $for="description">Category Description</label>
    <input name="description" id="description" placeholder="Enter Category Description">
    <hr>
    <label $for="status">Category Statue</label>
    <select name="status">
        <option>Choose one...</option> 
        @foreach([0=>"Not Active", 1=>"Active"] as $key => $val)
        <option value="{{ $key }}">{{ $val }}</option> 
        @endforeach
    </select>
    <hr>
    <input name="submit" type="submit" value="Create Category">
</form>

@endsection