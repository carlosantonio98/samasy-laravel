<div class="flex flex-col mb-4">
    <label for="name" class="mb-2">Name of user</label>
    <input type="text" name="name" id="name" placeholder="Insert the user" class="py-2 px-3 rounded-lg bg-gray-100" value="{{ old('name', $user->name) }}" autofocus>
    
    @error('name')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    <label for="email" class="mb-2">Email</label>
    <input type="email" name="email" id="email" placeholder="Insert the email" class="py-2 px-3 rounded-lg bg-gray-100" value="{{ old('email', $user->email) }}">
    
    @error('email')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    <label for="password" class="mb-2">Password</label>
    <input type="password" name="password" id="password" placeholder="Insert the password" class="py-2 px-3 rounded-lg bg-gray-100"">
    
    @error('password')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    <label for="password_confirmation" class="mb-2">Confirm password</label>
    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Insert the password_confirmation" class="py-2 px-3 rounded-lg bg-gray-100">
    
    @error('password_confirmation')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>