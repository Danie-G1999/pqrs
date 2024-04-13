<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   
    <div class="py-12">
        @if (isset($status))
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div id="alert-5" class="flex items-center p-4 rounded-lg bg-gray-50 dark:bg-gray-800" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium text-gray-800 dark:text-gray-300">
                        {{ $status }}
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-gray-50 text-gray-500 rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white" data-dismiss-target="#alert-5" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Solicitudes PQRS") }}
                    

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Radicado
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tipo
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Descripcion
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Archivo
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Estado
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Fecha
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($solicitudes as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$item->id}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$item->radicado}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$item->tipo_solicitud}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$item->descripcion}}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($item->archivo)
                                        
                                            <a href=" {{ asset('storage/archivos/' . $item->archivo) }}" target="_blank">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1.376A2.626 2.626 0 0 0 15 15.375v-1.75A2.626 2.626 0 0 0 12.375 11H11Zm1 5v-3h.375a.626.626 0 0 1 .625.626v1.748a.625.625 0 0 1-.626.626H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z" clip-rule="evenodd"/>
                                                </svg>
                                            </a>
                                        @else
                                            Sin Documento Soporte
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        @switch($item->estado)
                                            @case('P')
                                                Pendiente
                                                @break
                                            @case('C')
                                                Cancelada
                                                @break
                                            @case('R')
                                                Resuelto
                                                @break

                                            @default
                                                <!-- Código HTML o Blade para el caso por defecto -->
                                        @endswitch
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$item->fecha_creacion}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                    <button onclick="mostrarDetalle('{{ $item->id }}', '{{ $item->tipo_solicitud }}', '{{ $item->descripcion }}', '{{ $item->radicado }}')" class="text-indigo-600 hover:text-indigo-900">Ver Detalles</button>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Modal -->
                        <div id="modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center hidden">
                            <div class="bg-gray-800 p-8 rounded-lg " style="width: 30%;">
                                <h2 class="text-black dark:text-white font-bold mb-4">Detalles del Registro</h2>
                                <form action="{{ route('edit_solicitud') }}" method="POST" class="max-w-sm mx-auto">
                                @csrf
                                <div id="detalleRegistro"></div>
                                <button type="submit" class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Guardar</button>
                                <button onclick="cerrarModal()" class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Cerrar</button>
                                </form>
                                
                            </div>
                        </div>
                        <!-- Modal -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function mostrarDetalle(id, tipo_solicitud, descripcion, radicado) {
        // Aquí puedes realizar una solicitud AJAX para obtener los detalles del registro por su ID
        // Por ahora, simplemente mostraremos el ID del registro en el modal
        document.getElementById('detalleRegistro').innerHTML = `
      <p><strong>Tipo:</strong> ${tipo_solicitud}</p>
      <p><strong>Radicado:</strong> ${radicado}</p>
      <p><strong>Descripción:</strong> ${descripcion}</p>
      <br>
        <input id="id" name="id" class="hidden" value="${id}">
        <label for="respuesta">Responder:</label>
        <textarea required id="respuesta" name="respuesta" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe lo sucedido..."></textarea>
        <br>
        <label for="estado" class="mt-5">Estado:</label>
        <select required id="tipo_respuesta" name="tipo_respuesta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option hidden value="" selected>Seleccione...</option>    
            <option value="T">En proceso</option>
            <option value="R">Resuelto</option>
        </select>
    `;

        // Mostrar el modal
        document.getElementById('modal').classList.remove('hidden');
    }

    function cerrarModal() {
        // Ocultar el modal
        document.getElementById('modal').classList.add('hidden');
    }
    </script>
</x-app-layout>
