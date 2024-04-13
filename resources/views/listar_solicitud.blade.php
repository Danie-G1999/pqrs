<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Listado de mis solicitudes") }}

                    <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative" style="height: 450px;">
                        <table class="w-full h-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="top-0 sticky text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Radicado
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tipo Solicitud
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Descripcion
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Estado
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Documento Soporte
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Fecha Solicitud
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($solicitudes as $item)
                                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4">
                                            {{ $item->id }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->radicado }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->tipo }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->descripcion }}
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
                                            {{ $item->fecha_creacion }}
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        1
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Apple iMac 27"
                                    </th>
                                    <td class="px-6 py-4">
                                        Silver
                                    </td>
                                    <td class="px-6 py-4">
                                        PC Desktop
                                    </td>
                                    <td class="px-6 py-4">
                                        $3999
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
