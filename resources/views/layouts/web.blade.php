@extends('layouts.master')
@section('title', 'Front Page')

@section('page')
<div class="min-h-screen bg-gray-100 contaiber mx-auto">
    @livewire('web.navigation')

    <div class="flex flex-wrap md:text-left mt-0 mx-auto">
        @yield('aside')

        <main class="px-4 w-full lg:w-5/6 md:w-3/4 text-center">
            {{ $slot }}
        </main>
    </div>
</div>
<x-web.footer></x-web.footer>
@endsection




@push('scripts')
 
@endpush