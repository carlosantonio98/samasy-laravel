<x-app-layout>
    <div class="container mx-auto">

        {{-- ADD ALERTS TO ALL --}}
        @if ( session()->has('info') )
            <x-alert-notification type="{{ session('info')['type'] }}" title="{{ session('info')['title'] }}" text="{{ session('info')['text'] }}" />
        @endif

        <div class="flex justify-between items-center mb-5">
            <h3 class="font-bold text-lg py-4">Flavors list</h3>

            @can('admin.flavors.create')
                <a href="{{ route('admin.flavors.create') }}" class="p-2 rounded-lg font-medium text-gray-200 bg-blue-700 hover:bg-blue-500">Add New</a>
            @endcan
        </div>
          
        <!-- component -->
        <div class="overflow-hidden overflow-x-auto rounded-lg border border-gray-200 shadow-md mb-5">
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

                    @forelse ($flavors as $flavor)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $flavor->id }}</td>
                            <td class="px-6 py-4">{{ $flavor->name }}</td>
                            <td class="px-6 py-4">{{ $flavor->created_at->format('d/m/Y') }}</td>
                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">

                                    @can('admin.flavors.edit')
                                        <a class="p-2 rounded-lg font-medium text-gray-800 hover:text-gray-400 focus:outline-none focus:ring focus:ring-gray-400" href="{{ route('admin.flavors.edit', $flavor) }}"><i class="fa-solid fa-edit"></i></a>
                                    @endcan
                
                                    @can('admin.flavors.destroy')
                                        <form action="{{ route('admin.flavors.destroy', $flavor) }}" method="post">
                                            @csrf
                                            @method('delete')
                    
                                            <button type="submit" class="p-2 rounded-lg font-medium text-gray-800 hover:text-gray-400 focus:outline-none focus:ring focus:ring-gray-400" href="{{ route('admin.flavors.destroy', $flavor) }}"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    @endcan

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="4" class="px-6 py-4">Sin registros</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

        <!-- pagination -->
        {{ $flavors->links() }}
    </div>
</x-app-layout>