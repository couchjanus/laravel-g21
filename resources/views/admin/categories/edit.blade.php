@extends('layouts.admin')

@section('sidebar')
    <h2>Sidebar</h2>
@endsection

@section('content')

<h1>Edit Category</h1>
<form method="POST" action="{{ route('admin.categories.update', $category->id) }}">
    @csrf
    @method("PUT")
    <label $for="name">Category Name</label>
    <input name="name" id="name" value="{{ $category->name }}" class="@error('name') is-invalid @enderror">
    @error('name')
    <div>{{ $message }}</div>
    @enderror
    <hr>
<label $for="description">Category Description</label>
<input name="description" id="description" value="{{ $category->description }}">
<hr>
<label $for="status">Category Statue</label>
<select name="status">
    <option>Choose one...</option> 
    @foreach([0=>"Not Active", 1=>"Active"] as $key => $val)
    <option value="{{ $key }}" {{ ($key==$category->status)?'selected':'' }}>{{ $val }}</option> 
    @endforeach
</select>
<hr>
<input name="submit" type="submit" value="Update Category">
</form>

@endsection