@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-black text-gray-200 p-12">

    <div class="max-w-3xl mx-auto">

        <!-- Title -->
        <h1 class="text-3xl font-bold text-white mb-6">
            {{ $blog['title'] }}
        </h1>

        <!-- Content -->
        <p class="text-gray-400 leading-relaxed text-lg">
            {{ $blog['content'] }}
        </p>

        <!-- Back Button -->
        <div class="mt-10">

            <a href="/"
               class="text-purple-400 hover:underline">

               ← Back to Home

            </a>

        </div>

    </div>

</div>

@endsection