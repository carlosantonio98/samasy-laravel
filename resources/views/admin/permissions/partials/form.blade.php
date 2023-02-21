<div class="flex flex-col mb-4">
    <label for="name" class="mb-2">Name of permission</label>
    <input type="text" name="name" id="name" placeholder="Example: admin.users.index" class="py-2 px-3 rounded-lg bg-gray-100" value="{{ old('name', $permission->name) }}" autofocus>
    
    @error('name')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    <label for="description" class="mb-2">Description of permission</label>
    <input type="text" name="description" id="description" placeholder="Example: See list of users" class="py-2 px-3 rounded-lg bg-gray-100" value="{{ old('description', $permission->description) }}" autofocus>
    
    @error('description')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>