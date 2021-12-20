<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <button class="bg-green-900 w-20 h-10 font-sanss rounded-t-lg text-center text-indigo-50 italic">Enviar</button>
               
            </div>
        </div>
    </div>
</x-app-layout>
