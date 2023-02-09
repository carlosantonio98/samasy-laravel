<div class="flex flex-col mb-4">
    <label for="product" class="mb-2">product</label>
    <select name="product_id" class="py-2 px-3 rounded-lg bg-gray-100" id="product">
        @foreach ($products as $product)
            <option value="{{ $product->id }}" {{ ($stock->product_id == $product->id) ? 'Selected':'' }}>{{ $product->name }}</option>
        @endforeach
    </select>
    
    @error('flavor_id')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    <label for="amount" class="mb-2">Amount product</label>
    <input type="number" name="amount" id="amount" placeholder="Insert the amount" class="py-2 px-3 rounded-lg bg-gray-100" value="{{ old('amount', $stock->amount) }}" autofocus>
    
    @error('amount')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>