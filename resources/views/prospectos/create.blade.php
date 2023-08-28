<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                            <x-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('prospectos.store') }}">
                                @csrf
                                <div class="mt-4">
                                    <x-label for="codigo" value="{{ __('Tipo identificación') }}" />
                                    <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="tipoIdentificacion" id="tipoIdentificacion" required autofocus>
                                        <option value="cc">C.C.</option>
                                        <option value="ti">T.I.</option>
                                        <option value="ce">C.E.</option>
                                        <option value="nip">N.I.P.</option>
                                    </select>
                                    
                                </div>

                                <div class="mt-4">
                                    <x-label for="numeroIdentificacion" value="{{ __('Número de identificación') }}" />
                                    <x-input id="numeroIdentificacion" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="number" name="numeroIdentificacion"
                                        :value="old('numeroIdentificacion')" required autocomplete="numeroIdentificacion" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="primerNombre" value="{{ __('Primer nombre') }}" />
                                    <x-input id="primerNombre"  type="text" name="primerNombre" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                        :value="old('primerNombre')" required autocomplete="primerNombre" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="segundoNombre" value="{{ __('Segundo nombre') }}" />
                                    <x-input id="segundoNombre" class="block mt-1 w-full" type="text" name="segundoNombre"
                                        :value="old('segundoNombre')" required autocomplete="segundoNombre" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="primerApellido" value="{{ __('Primer apellido') }}" />
                                    <x-input id="primerApellido" class="block mt-1 w-full" type="text" name="primerApellido"
                                        :value="old('primerApellido')" required autocomplete="primerApellido" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="segundoApellido" value="{{ __('Segundo apellido') }}" />
                                    <x-input id="segundoApellido" class="block mt-1 w-full" type="text" name="segundoApellido"
                                        :value="old('segundoApellido')" required autocomplete="segundoApellido" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="direccion" value="{{ __('Dirección') }}" />
                                    <x-input id="direccion" class="block mt-1 w-full" type="text" name="direccion"
                                        :value="old('direccion')" required autocomplete="direccion" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="barrio" value="{{ __('Barrio') }}" />
                                    <x-input id="barrio" class="block mt-1 w-full" type="text" name="barrio"
                                        :value="old('barrio')" required autocomplete="barrio" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="municipio" value="{{ __('Municipio') }}" />
                                    <x-input id="municipio" class="block mt-1 w-full" type="text" name="municipio"
                                        :value="old('municipio')" required autocomplete="municipio" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="celular" value="{{ __('Celular') }}" />
                                    <x-input id="celular" class="block mt-1 w-full" type="number" name="celular"
                                        :value="old('celular')" required autocomplete="celular" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="telefono" value="{{ __('Teléfono') }}" />
                                    <x-input id="telefono" class="block mt-1 w-full" type="number" name="telefono"
                                        :value="old('telefono')" required autocomplete="telefono" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="correo" value="{{ __('Correo electrónico') }}" />
                                    <x-input id="correo" class="block mt-1 w-full" type="email" name="correo"
                                        :value="old('correo')" required autocomplete="correo"/>
                                </div>

                                <div class="mt-4">
                                    <x-label for="fechaIngreso" value="{{ __('Fecha ingreso') }}" />
                                    <x-input id="fechaIngreso" class="block mt-1 w-full" type="date" name="fechaIngreso"
                                        :value="old('fechaIngreso')" required autocomplete="fechaIngreso"/>
                                </div>

                                <div class="mt-4">
                                    <x-label for="fechaPrimerContacto" value="{{ __('Fecha primer contacto') }}" />
                                    <x-input id="fechaPrimerContacto" class="block mt-1 w-full" type="date" name="fechaPrimerContacto"
                                        :value="old('fechaPrimerContacto')" required autocomplete="fechaPrimerContacto"/>
                                </div>

                                <div class="mt-4">
                                    <x-label for="estado" value="{{ __('Estado') }}" />
                                    <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
                                    name="estado" id="estado" required autofocus>
                                        <option value="active">Activo</option>
                                        <option value="inactive">Inactivo</option>
                                        <option value="pending">Pendiente Por Aprobar</option>
                                    </select>
                                </div>

                                <div class="mt-4">
                                    <x-label for="enteroBeneficios" value="{{ __('Cómo se entero de los beneficios') }}" />
                                    <textarea id="enteroBeneficios" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
                                    rows="3" name="enteroBeneficios" required autocomplete="enteroBeneficios"></textarea>
                                </div>

                                <div class="mt-4">
                                    <x-label for="convenio_id" value="{{ __('Seleccine convenio') }}" />
                                    <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="convenio_id" id="convenio_id" required autofocus>
                                        @foreach ($convenios as $convenio)
                                            <option value={{$convenio->id}}>{{$convenio->nombre}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>

                                <div class="mt-4">
                                    <x-label for="origenprospecto_id" value="{{ __('Seleccine origen del prospecto') }}" />
                                    <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="origenprospecto_id" id="origenprospecto_id" required autofocus>
                                        @foreach ($origenprospectos as $origen)
                                            <option value={{$origen->id}}>{{$origen->nombre}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>

                                <div class="mt-4" x-data="{ mostrarCampos: false }">
                                    
                                    <x-label  value="{{ __('¿Tiene referido?') }}" />
                                    <label for="mostrar-campos" class="mt-1 inline-flex items-center p-1 cursor-pointer bg-gray-600 text-white rounded-md">
                                        <input id="mostrar-campos" x-model="mostrarCampos"  type="checkbox" class="hidden peer" wfd-id="id5">
                                        <span class="px-4 py-2 bg-gray-600 peer-checked:bg-gray-600 rounded-md">NO</span>
                                        <span class="px-4 py-2 bg-gray-600 peer-checked:bg-indigo-400 rounded-md">SI</span>
                                    </label>

                                    <div x-show="mostrarCampos">
                                      <!-- Aquí van los campos ocultos -->
                                      <div class="mt-4">
                                        <x-label for="nombreReferido" value="{{ __('Nombre del referido') }}" />
                                        <x-input id="nombreReferido" class="block mt-1 w-full" type="text" name="nombreReferido"
                                            :value="old('nombreReferido')"  autocomplete="nombreReferido"/>
                                    </div>
    
                                    <div class="mt-4">
                                        <x-label for="apellidoReferido" value="{{ __('Apellido del referido') }}" />
                                        <x-input id="apellidoReferido" class="block mt-1 w-full" type="text" name="apellidoReferido"
                                            :value="old('apellidoReferido')"  autocomplete="apellidoReferido"/>
                                    </div>
    
                                    <div class="mt-4">
                                        <x-label for="telefonoReferido" value="{{ __('Teléfono del referido') }}" />
                                        <x-input id="telefonoReferido" class="block mt-1 w-full" type="text" name="telefonoReferido"
                                            :value="old('telefonoReferido')"  autocomplete="telefonoReferido"/>
                                    </div>
                                    </div>
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