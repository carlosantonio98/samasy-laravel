@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        
        <div class="flex justify-between items-center">
            <h3 class="font-bold text-lg py-4">Create new</h3>
            <a href="{{ route('admin.products.index') }}" class="p-2 rounded-lg font-medium text-gray-200 bg-gray-700 hover:bg-gray-500">Back</a>
        </div>
        
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
            <div class="w-full bg-white px-6 py-4">
                <form action="{{ route('admin.products.store') }}" method="post">
                    @csrf
        
                    @include('products.partials.form')

                    <button type="submit" class="p-2 rounded-lg font-medium text-gray-200 bg-green-700 hover:bg-green-500">Create</button>
                </form>
            </div>
        </div>

    </div>
@endsection