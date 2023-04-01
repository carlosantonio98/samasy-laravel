<div class="flex flex-col mb-4">
    {!! Form::label('name', 'Name of product', ['class' => 'mb-2']) !!}
    {!! Form::text('name', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Insert the product', 'autofocus' => true]) !!}

    @error('name')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    {!! Form::label('price', 'Price', ['class' => 'mb-2']) !!}
    {!! Form::number('price', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Insert the price']) !!}

    @error('price')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    {!! Form::label('type_id', 'Type', ['class' => 'mb-2']) !!}
    {!! Form::select('type_id', $types, null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100']) !!}
    
    @error('type_id')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    {!! Form::label('flavor_id', 'Flavor', ['class' => 'mb-2']) !!}
    {!! Form::select('flavor_id', $flavors, null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100']) !!}

    @error('flavor_id')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>