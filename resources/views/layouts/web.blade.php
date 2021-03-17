@extends('layouts.master')


@section('page')
    @yield('sidebar')
    @yield('content')
    <x-web.footer></x-web.footer>
@endsection


@push('scripts')
    <script src="{{ asset('js/web.js') }}"></script>
@endpush