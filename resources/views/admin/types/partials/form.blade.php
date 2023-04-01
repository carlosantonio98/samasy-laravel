<div class="flex flex-col mb-4">
    {!! Form::label('name', 'Name of type', ['class' => 'mb-2']) !!}
    {!! Form::text('name', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Insert the type', 'autofocus' => true]) !!}

    @error('name')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>