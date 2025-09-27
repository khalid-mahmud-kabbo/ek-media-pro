@extends('errors.layout')
@section('title', __('403 Forbidden'))
@section('content')


<div class="flex items-center justify-center h-screen">
    <div class="flex flex-col items-center justify-center max-w-lg">
        <div class="mb-4">
            <h1 class="text-5xl font-extrabold text-blue-600">403</h1>
        </div>
        <h3 class="mb-3 text-2xl font-bold text-center text-gray-700">
            Forbidden.
        </h3>
        <p class="text-sm text-center text-gray-600">
            {{__('Forbidden access. Click on the button below to do something, Thanks!')}}
        </p>
    </div>
</div>
@endsection

