<x-app-layout>
    <div class="container mx-auto">
        
        <div class="flex justify-between items-center mb-5">
            <h3 class="font-bold text-lg py-4">Expenses list</h3>

            @can('admin.expenses.create')
                <a href="{{ route('admin.expenses.create') }}" class="p-2 rounded-lg font-medium text-gray-200 bg-blue-700 hover:bg-blue-500">Add New</a>
            @endcan
        </div>
          
        <!-- component -->
        <div class="overflow-hidden overflow-x-auto rounded-lg border border-gray-200 shadow-md">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">PROVIDER</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">CONCEPT</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">AMOUNT</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">CREATED AT</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                    @forelse ($expenses as $expense)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $expense->id }}</td>
                            <td class="px-6 py-4">{{ $expense->provider }}</td>
                            <td class="px-6 py-4">{{ $expense->concept }}</td>
                            <td class="px-6 py-4">{{ $expense->amount }}</td>
                            <td class="px-6 py-4">{{ $expense->created_at->format('d/m/Y') }}</td>
                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">

                                    @can('admin.expenses.edit')
                                        <a class="p-2 rounded-lg font-medium text-gray-800 hover:text-gray-400 focus:outline-none focus:ring focus:ring-gray-400" href="{{ route('admin.expenses.edit', $expense) }}"><i class="fa-solid fa-edit"></i></a>
                                    @endcan
                
                                    @can('admin.expenses.destroy')
                                        <form action="{{ route('admin.expenses.destroy', $expense) }}" method="post">
                                            @csrf
                                            @method('delete')
                    
                                            <button type="submit" class="p-2 rounded-lg font-medium text-gray-800 hover:text-gray-400 focus:outline-none focus:ring focus:ring-gray-400" href="{{ route('admin.expenses.destroy', $expense) }}"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    @endcan

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="5" class="px-6 py-4">Sin registros</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>