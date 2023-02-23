<x-app-layout>
    <div class="container mx-auto">
        
        <div class="flex justify-between items-center mb-5">
            <h3 class="font-bold text-lg py-4">Sales list</h3>
            <a href="{{ route('admin.sales.create') }}" class="p-2 rounded-lg font-medium text-gray-200 bg-blue-700 hover:bg-blue-500">Add New</a>
        </div>
          
        <!-- component -->
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">PRODUCT</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">PRICE</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">TYPE</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">FLAVOR</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">CREATED AT</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                    @forelse ($sales as $sale)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $sale->id }}</td>
                            <td class="px-6 py-4">{{ $sale->product->name }}</td>
                            <td class="px-6 py-4">{{ $sale->product->price }}</td>
                            <td class="px-6 py-4">{{ $sale->product->type->name }}</td>
                            <td class="px-6 py-4">{{ $sale->product->flavor->name }}</td>
                            <td class="px-6 py-4">{{ $sale->created_at->format('d/m/Y') }}</td>
                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                    
                                    @can('admin.sales.edit')
                                        <a class="p-2 rounded-lg font-medium text-gray-800 hover:text-gray-400 focus:outline-none focus:ring focus:ring-gray-400" href="{{ route('admin.sales.edit', $sale) }}"><i class="fa-solid fa-edit"></i></a>
                                    @endcan

                                    @can('admin.sales.destroy')
                                        <form action="{{ route('admin.sales.destroy', $sale) }}" method="post">
                                            @csrf
                                            @method('delete')
                    
                                            <button type="submit" class="p-2 rounded-lg font-medium text-gray-800 hover:text-gray-400 focus:outline-none focus:ring focus:ring-gray-400" href="{{ route('admin.sales.destroy', $sale) }}"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    @endcan

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="7" class="px-6 py-4">Sin registros</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>