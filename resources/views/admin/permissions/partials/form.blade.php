<div class="flex flex-col mb-4">
    {!! Form::label('name', 'Name of permission', ['class' => 'mb-2']) !!}
    {!! Form::text('name', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Example: admin.users.index', 'autofocus' => true]) !!}

    @error('name')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    {!! Form::label('description', 'Description of permission', ['class' => 'mb-2']) !!}
    {!! Form::text('description', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Example: See list of users']) !!}

    @error('description')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>