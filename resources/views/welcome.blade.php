@extends('layout.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="p-8 bg-white shadow-lg rounded-2xl text-center">
            <h1 class="text-4xl font-bold text-blue-600 mb-4">Tailwind is working! 🎉</h1>
            <p class="text-gray-700">If you see this styled text, Tailwind is configured correctly.</p>
            <button class="mt-6 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Test Button
            </button>
        </div>
    </div>
@endsection
