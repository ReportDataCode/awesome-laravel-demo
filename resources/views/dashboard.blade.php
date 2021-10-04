<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!, Below are my proof of concepts in different APIs and technologies
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="https://buy.stripe.com/test_eVacMZcDq9Og1Py7st"> Buy me a Taho<a/>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="https://buy.stripe.com/test_eVacMZcDq9Og1Py7st"> Map Navigation Using Azure Map API<a/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
