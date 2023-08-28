<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                
                                <a href="{{ route('origenprospectos.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mb-4">
                                    Crear Origen de Prospecto
                                </a>
                
                                <div class="overflow-hidden overflow-x-auto mb-4 min-w-full align-middle sm:rounded-md">
                                    <table class="min-w-full border divide-y divide-gray-200">
                                        <thead>
                                            <tr>
                                                <th class="px-6 py-3 text-left bg-gray-50">
                                                    <span class="text-xs font-medium tracking-wider leading-4 text-gray-500 uppercase">Nombre</span>
                                                </th>
                                                <th class="px-6 py-3 text-left bg-gray-50 w-56">
                                                    <span class="text-xs font-medium tracking-wider leading-4 text-gray-500 uppercase">Acciones</span>
                                                </th>
                                            </tr>
                                        </thead>
                
                                        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                                            @foreach ($origenprospectos as $origenprospecto)
                                            <tr>
                                                <td class="px-6 py-3 text-left text-s font-medium tracking-wider leading-4 text-gray-500 ">{{ $origenprospecto->nombre }}</td>                                                
                                                <td class=" flex gap-x-5 px-6 py-3 text-left text-s font-medium tracking-wider leading-4 text-gray-500 ">
                                                    <a  href="{{ route('origenprospectos.edit', $origenprospecto) }}" class="inline-block mt-4 items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mb-4">
                                                        Editar
                                                    </a>
                                                        <form action="{{ route('origenprospectos.destroy', $origenprospecto) }}" method="POST" onsubmit="return confirm('estas seguro de eliminar?');" style="display: inline-block;">
                                                            @csrf
                                                            @method('delete')
                                                            <x-button class="mt-4">
                                                                {{ __('Eliminar') }}
                                                            </x-button>
                                                        </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th class="px-6 py-3 text-left bg-gray-50">
                                                    <span class="text-xs font-medium tracking-wider leading-4 text-gray-500 uppercase">nombre</span>
                                                </th>
                                                <th class="px-6 py-3 text-left bg-gray-50 w-56">
                                                    <span class="text-xs font-medium tracking-wider leading-4 text-gray-500 uppercase">Acciones</span>
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

</x-app-layout>