@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        
        <div class="flex justify-between items-center">
            <h3 class="font-bold text-lg py-4">Update type</h3>
            <a href="{{ route('admin.types.index') }}" class="p-2 rounded-lg font-medium text-gray-200 bg-gray-700 hover:bg-gray-500">Back</a>
        </div>
        

        <form action="{{ route('admin.types.update', $type) }}" method="post">
            @csrf
            @method('put')

            <div class="flex flex-col mb-4">
                <label for="name" class="mb-2">Name of type</label>
                <input type="text" name="name" id="name" placeholder="Insert the type" class="py-2 px-3 rounded-lg" value="{{ old('name', $type->name) }}">
                
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="p-2 rounded-lg font-medium text-gray-200 bg-green-700 hover:bg-green-500">Update</button>
        </form>

    </div>
@endsection