<x-app-layout>
    <div class="container mx-auto">

        <!-- alert -->
        @if ( session()->has('info') )
            <x-alert-notification type="{{ session('info')['type'] }}" title="{{ session('info')['title'] }}" text="{{ session('info')['text'] }}" />
        @endif

        <div class="flex justify-between items-center">
            <h3 class="font-bold text-lg py-4">Update sale</h3>
            <a href="{{ route('admin.sales.index') }}" class="p-2 rounded-lg font-medium text-gray-200 bg-gray-700 hover:bg-gray-500">Back</a>
        </div>
        
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
            <div class="w-full bg-white px-6 py-4">
                {!! Form::model($sale, ['route' => ['admin.sales.update', $sale], 'method' => 'put']) !!}

                    @include('admin.sales.partials.form')

                    {!! Form::submit('Update', ['class' => 'p-2 rounded-lg font-medium text-gray-200 bg-green-700 hover:bg-green-500']) !!}

                {!! Form::close() !!}
            </div>
        </div>

    </div>
</x-app-layout>