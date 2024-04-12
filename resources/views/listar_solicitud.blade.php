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

                    <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative" style="height: 150px;">
                        <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
                            <thead>
                                <tr class="text-left">
                                    <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-3 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">#</th>
                                    <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-3 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">Tipo</th>
                                    <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-3 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">Descripcion</th>
                                    <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-3 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">Fecha Solicitud</th>
                                    <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-3 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
