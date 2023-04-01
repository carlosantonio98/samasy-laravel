<div class="flex flex-col mb-4">
    {!! Form::label('provider', 'Name of provider', ['class' => 'mb-2']) !!}
    {!! Form::text('provider', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Insert the provider', 'autofocus' => true]) !!}

    @error('provider')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    {!! Form::label('concept', 'Spending concept', ['class' => 'mb-2']) !!}
    {!! Form::textarea('concept', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'rows' => '3', 'placeholder' => 'Insert the concept']) !!}

    @error('concept')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    {!! Form::label('amount', 'Amount', ['class' => 'mb-2']) !!}
    {!! Form::number('amount', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Insert the amount']) !!}

    @error('amount')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>