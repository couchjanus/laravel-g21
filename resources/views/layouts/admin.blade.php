@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('page')
    @yield('sidebar')
    @yield('content')
@endsection

@push('scripts')
    <script src="{{ asset('js/admin.js') }}"></script>
@endpush