<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto max-w-7xl sm:px-5 sm:py-5">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-3 bg-white border-b border-gray-200">

                            <a href="{{ route('prospectos.create') }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mb-4">
                                Crear Prospecto
                            </a>

                            <div class="overflow-hidden overflow-x-auto mb-4 min-w-full align-middle sm:rounded-md">
                                <table class="min-w-full border divide-y divide-gray-200">
                                    <thead>
                                        <tr class="bg-indigo-500">
                                            <th class="pl-5 pr-1 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">N°
                                                    Id</span>
                                            </th>
                                            <th class="px-1 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Nombre</span>
                                            </th>
                                            <th class="px-1 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Apellido</span>
                                            </th>
                                            <th class="px-1 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Estado</span>
                                            </th>
                                            <th class="px-1 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Convenio</span>
                                            </th>
                                            <th class="px-1 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Origen</span>
                                            </th>
                                            <th class="px-1 py-3 text-left  w-56">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Acciones</span>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                                        @foreach ($prospectos as $index => $prospecto)
                                            <tr class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-gray-50' }}">
                                                <td
                                                    class="pl-5 pr-2 py-1 text-left text-s font-medium tracking-wider leading-4 text-gray-500 ">
                                                    {{ $prospecto->numeroIdentificacion }}</td>
                                                <td
                                                    class="px-2 py-1 text-left text-s font-medium tracking-wider leading-4 text-gray-500 ">
                                                    {{ $prospecto->primerNombre }}</td>
                                                <td
                                                    class="px-2 py-1 text-left text-s font-medium tracking-wider leading-4 text-gray-500 ">
                                                    {{ $prospecto->primerApellido }}</td>
                                                <td
                                                    class="px-2 py-1 text-left text-s font-medium tracking-wider leading-4 text-gray-500 ">
                                                    {{ $prospecto->estado }}</td>
                                                <td
                                                    class="px-2 py-1 text-left text-s font-medium tracking-wider leading-4 text-gray-500 ">
                                                    {{ $prospecto->convenio->nombre }}</td>
                                                <td
                                                    class="px-2 py-1 text-left text-s font-medium tracking-wider leading-4 text-gray-500 ">
                                                    {{ $prospecto->origenprospecto->nombre }}</td>
                                                <td
                                                    class="flex gap-x-2 px-1 py-1 text-left text-s font-medium tracking-wider leading-4 text-gray-500 ">
                                                    <a href="{{ route('prospectos.edit', $prospecto) }}"
                                                        class="inline-block mt-4 items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mb-4">
                                                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg"
                                                            height="1em"
                                                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                            <path
                                                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('prospectos.show', $prospecto) }}"
                                                        class="inline-block mt-4 items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mb-4">
                                                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg"
                                                            height="1em"
                                                            viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                            <path
                                                                d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('prospectos.destroy', $prospecto) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('estas seguro de eliminar?');"
                                                        style="display: inline-block;">
                                                        @csrf
                                                        @method('delete')
                                                        <x-button class="mt-4">
                                                            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg"
                                                                height="1em"
                                                                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                <path
                                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                            </svg>
                                                        </x-button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    <tfoot>
                                        <tr class="bg-indigo-500">
                                            <th class="pl-5 pr-2 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">N°
                                                    Id</span>
                                            </th>
                                            <th class="px-1 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Nombre</span>
                                            </th>
                                            <th class="px-1 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Apellido</span>
                                            </th>
                                            <th class="px-1 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Estado</span>
                                            </th>
                                            <th class="px-1 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Convenio</span>
                                            </th>
                                            <th class="px-1 py-3 text-left ">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Origen</span>
                                            </th>
                                            <th class="px-1 py-3 text-left  w-56">
                                                <span
                                                    class="text-xs font-semibold tracking-wider leading-4 text-white uppercase">Acciones</span>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="mt-4">
                               {{ $prospectos->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
