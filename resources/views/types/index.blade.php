@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        
        <div class="flex justify-between items-center mb-5">
            <h3 class="font-bold text-lg py-4">Types list</h3>
            <a href="{{ route('admin.types.create') }}" class="p-2 rounded-lg font-medium text-gray-200 bg-blue-700 hover:bg-blue-500">Add New</a>
        </div>
          
        <!-- component -->
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">NAME</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">CREATED AT</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                    @forelse ($types as $type)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $type->id }}</td>
                            <td class="px-6 py-4">{{ $type->name }}</td>
                            <td class="px-6 py-4">{{ $type->created_at->format('d/m/Y') }}</td>
                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                    <a class="p-2 rounded-lg font-medium text-gray-800 hover:text-gray-400 focus:outline-none focus:ring focus:ring-gray-400" href="{{ route('admin.types.edit', $type) }}"><i class="fa-solid fa-edit"></i></a>
                
                                    <form action="{{ route('admin.types.destroy', $type) }}" method="post">
                                        @csrf
                                        @method('delete')
                
                                        <button type="submit" class="p-2 rounded-lg font-medium text-gray-800 hover:text-gray-400 focus:outline-none focus:ring focus:ring-gray-400" href="{{ route('admin.types.destroy', $type) }}"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Sin registros</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection