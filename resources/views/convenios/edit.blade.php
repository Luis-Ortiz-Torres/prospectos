<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                            <x-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('convenios.update', $convenio) }}">
                                @csrf
                                @method('patch')
                                <div>
                                    <x-label for="codigo" value="{{ __('Código') }}" />
                                    <x-input id="codigo" class="block mt-1 w-full" type="number" name="codigo"
                                        :value="old('codigo', $convenio->codigo)" required autofocus autocomplete="codigo" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="nombre" value="{{ __('Nombre') }}" />
                                    <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                        :value="old('nombre', $convenio->nombre)" required autocomplete="nombre" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="descripcion" value="{{ __('Descripción') }}" />
                                    <textarea id="descripcion" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
                                    rows="3" name="descripcion" required autocomplete="descripcion">
                                    {{old('descripcion', $convenio->descripcion) }}
                                    </textarea>
                                </div>

                                <x-button class="mt-4">
                                    {{ __('Guardar') }}
                                </x-button>
                                <a href="{{ route('convenios.index') }}">{{ __('Cancel') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>