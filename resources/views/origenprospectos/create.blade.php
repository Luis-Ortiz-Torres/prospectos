<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                            <x-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('origenprospectos.store') }}">
                                @csrf
                                <div class="mt-4">
                                    <x-label for="nombre" value="{{ __('Nombre') }}" />
                                    <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                        :value="old('nombre')" required autocomplete="nombre" />
                                </div>
                                <x-button class="mt-4">
                                    {{ __('Guardar') }}
                                </x-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>