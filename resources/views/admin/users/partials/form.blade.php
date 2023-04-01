<div class="flex flex-col mb-4">
    {!! Form::label('name', 'Name of user', ['class' => 'mb-2']) !!}
    {!! Form::text('name', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Insert the user', 'autofocus' => true]) !!}

    @error('name')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    {!! Form::label('email', 'Email', ['class' => 'mb-2']) !!}
    {!! Form::text('email', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Insert the email']) !!}

    @error('email')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    {!! Form::label('password', 'Password', ['class' => 'mb-2']) !!}
    {!! Form::password('password', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Insert the password']) !!}

    @error('password')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="flex flex-col mb-4">
    {!! Form::label('password_confirmation', 'Confirm password', ['class' => 'mb-2']) !!}
    {!! Form::password('password_confirmation', null, ['class' => 'py-2 px-3 rounded-lg bg-gray-100', 'placeholder' => 'Insert the password_confirmation']) !!}

    @error('password_confirmation')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

<h2 class="h3 mb-2">Role list</h2>

<div class="mb-4">
    @if ($roles->isEmpty())
        <p class="py-2 px-3 rounded-lg bg-orange-100 ">No roles</p>
    @endIf

    <ul class="grid md:grid-cols-2 lg:grid-cols-3">
        @foreach ($roles as $role)
            <li>
                <label>
                    {!! Form::checkbox('roles[]', $role->id, ($user->roles->contains('id', $role->id)), ['class' => 'mr-2']) !!}
                    {{ $role->name }}
                </label>
            </li>
        @endforeach
    </ul>
</div>