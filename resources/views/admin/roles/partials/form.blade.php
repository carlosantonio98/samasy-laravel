<div class="flex flex-col mb-4">
    <label for="name" class="mb-2">Name of role</label>
    <input type="text" name="name" id="name" placeholder="Insert the name" class="py-2 px-3 rounded-lg bg-gray-100" value="{{ old('name', $role->name) }}" autofocus>
    
    @error('name')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<h2 class="h3 mb-2">Permission list</h2>

<div class="mb-4">
    @if ($permissions->isEmpty())
        <p class="py-2 px-3 rounded-lg bg-orange-100 ">No permissions</p>
    @endIf

    @foreach ($permissions as $permission)
        <label>
            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" class="mr-2" {{ ($role->permissions->contains('id', $permission->id)) ? 'checked':'' }}>
            {{ $permission->description }}
        </label>
    @endforeach
</div>