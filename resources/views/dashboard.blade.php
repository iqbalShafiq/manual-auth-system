@extends('layouts.app')

@section('content')
<div class="w-full mx-auto">
    <p class="text-center py-56 text-5xl font-bold">
        Welcome home, <br>
        {{ auth()->user()->name }}
    </p>
</div>
@endsection
