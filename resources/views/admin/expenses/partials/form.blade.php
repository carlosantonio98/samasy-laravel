<div class="flex flex-col mb-4">
    <label for="provider" class="mb-2">Name of provider</label>
    <input type="text" name="provider" id="provider" placeholder="Insert the provider" class="py-2 px-3 rounded-lg bg-gray-100" value="{{ old('provider', $expense->provider) }}" autofocus>
    
    @error('provider')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    <label for="concept" class="mb-2">Spending concept</label>
    <textarea name="concept" id="concept" cols="3" class="py-2 px-3 rounded-lg bg-gray-100" placeholder="Insert the concept">{{ old('concept', $expense->concept) }}</textarea>
    
    @error('concept')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    <label for="amount" class="mb-2">Amount</label>
    <input type="text" name="amount" id="amount" placeholder="Insert the amount" class="py-2 px-3 rounded-lg bg-gray-100" value="{{ old('amount', $expense->amount) }}">
    
    @error('amount')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>