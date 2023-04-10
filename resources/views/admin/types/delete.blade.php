<div 
    x-data="{ show: true }" 
    x-show="show" 
    x-cloak 
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
>

    <div
        x-show="show"
        class="fixed inset-0 transform transition-all"
        x-on:click="show = false" 
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
    </div>

    <div
        x-show="show"
        class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        <form action="{{ route('admin.types.destroy', $type) }}" method="post" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                Are you sure you want to delete the type?
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Once the type is deleted, all your resources and data will be permanently deleted.
            </p>

            <div class="mt-6 flex justify-end">
                <button 
                    x-on:click="show = false" 
                    type="button" 
                    class="inline-flex items-center px-4 py-2 mr-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                >
                    Cancel
                </button>

                <button 
                    type="submit" 
                    class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"
                >
                    Delete Type
                </button>
            </div>
        </form>
    </div>

</div>