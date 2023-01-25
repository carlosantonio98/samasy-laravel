<div class="flex flex-col mb-4">
    <label for="name" class="mb-2">Name of product</label>
    <input type="text" name="name" id="name" placeholder="Insert the product" class="py-2 px-3 rounded-lg bg-gray-100" value="{{ old('name', $product->name) }}" autofocus>
    
    @error('name')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    <label for="name" class="mb-2">Price</label>
    <input type="text" name="price" id="price" placeholder="Insert the price" class="py-2 px-3 rounded-lg bg-gray-100" value="{{ old('price', $product->price) }}">
    
    @error('price')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    <label for="name" class="mb-2">Type</label>
    <select name="type_id" class="py-2 px-3 rounded-lg bg-gray-100">
        @foreach ($types as $type)
            <option value="{{ $type->id }}" {{ ($product->type_id == $type->id) ? 'Selected':'' }}>{{ $type->name }}</option>
        @endforeach
    </select>
    
    @error('type_id')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    <label for="name" class="mb-2">Flavor</label>
    <select name="flavor_id" class="py-2 px-3 rounded-lg bg-gray-100">
        @foreach ($flavors as $flavor)
            <option value="{{ $flavor->id }}" {{ ($product->flavor_id == $flavor->id) ? 'Selected':'' }}>{{ $flavor->name }}</option>
        @endforeach
    </select>
    
    @error('flavor_id')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>