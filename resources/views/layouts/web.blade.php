@extends('layouts.master')
@section('title', 'Front Page')

@section('page')
<div class="flex min-h-screen">
    {{-- navbar --}}
    <div class="grid grid-cols-10 mt-20 mx-auto">
        @yield('aside')

        <main class="col-span-8 px-4 w-full">
            {{ $slot }}
        </main>
    </div>
</div>
<x-web.footer></x-web.footer>
@endsection




@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/web.js') }}"></script>
@endpush