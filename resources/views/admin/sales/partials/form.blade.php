<div class="flex flex-col mb-4">
    {!! Form::label('product_id', 'Product', ['class' => 'mb-2']) !!}    
    {!! Form::select('product_id', $products, null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'autofocus' => true]) !!}

    @error('product_id')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>