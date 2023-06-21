@extends('statamic::layout')
@section('title', __('My Addon'))

@push('head')
    {{ app(\Illuminate\Foundation\Vite::class)(['resources/js/cp.js', 'resources/css/cp.css'], 'vendor/my-addon') }}
@endpush

@section('content')
    <div v-pre class="w-full">
        <div cp-data="counter()" class="flex flex-col">
            <button cp-on:click="increment()">Increment</button>

            <span cp-text="counter"></span>
            <div x-ignore>
                <template cp-for="t in test">
                    <div>
                        <button cp-on:click="increment()">Increment</button>
                        <span cp-text="t"></span>
                    </div>
                </template>
            </div>
        </div>
    </div>
@endsection

