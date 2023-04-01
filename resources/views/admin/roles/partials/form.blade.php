<div class="flex flex-col mb-4">
    {!! Form::label('name', 'Name of role', ['class' => 'mb-2']) !!}
    {!! Form::text('name', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Insert the role', 'autofocus' => true]) !!}
    
    @error('name')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<h2 class="h3 mb-2">Permission list</h2>

<div class="mb-4">
    @if ($permissions->isEmpty())
        <p class="py-2 px-3 rounded-lg bg-orange-100 ">No permissions</p>
    @endIf

    <ul class="grid md:grid-cols-2 lg:grid-cols-3">
        @foreach ($permissions as $permission)
            <li>
                <label>
                    {!! Form::checkbox('permissions[]', $permission->id, ($role->permissions->contains('id', $permission->id)), ['class' => 'mr-2']) !!}
                    {{ $permission->description }}
                </label>
            </li>
        @endforeach
    </ul>
</div>