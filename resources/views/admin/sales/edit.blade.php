<x-app-layout>
    <div class="container mx-auto">
        
        <div class="flex justify-between items-center">
            <h3 class="font-bold text-lg py-4">Update sale</h3>
            <a href="{{ route('admin.sales.index') }}" class="p-2 rounded-lg font-medium text-gray-200 bg-gray-700 hover:bg-gray-500">Back</a>
        </div>
        
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
            <div class="w-full bg-white px-6 py-4">
                <form action="{{ route('admin.sales.update', $sale) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="flex flex-col mb-4">
                        <label for="product_id" class="mb-2">Product</label>
                        <select name="product_id" class="py-2 px-3 rounded-lg bg-gray-100" autofocus>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}" {{ ($product->id == $sale->product_id) ? 'Selected':'' }}>{{ $product->name }}</option>
                            @endforeach
                        </select>
                        
                        @error('flavor_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="p-2 rounded-lg font-medium text-gray-200 bg-green-700 hover:bg-green-500">Create</button>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>