<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengurus') }}
        </h2>
    </x-slot>

    <div class="">

    </div>
    <div class="py-12">
        <div class="mx-150 sm:px-6 lg:px-8">
            <div class="mb-5 right-0">
                <a class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-6 rounded"
                    href="{{ route('pengurus.index') }}">
                    Edit
                </a>
            </div>

            <div class="py-12">
                <div class="mx-auto sm:px-6 lg:px-8">
                    <div class="mb-5 right-0">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-6 rounded"
                            href="{{ route('pengurus.index') }}">
                            Back
                        </a>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form class="w-full">
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-first-name">
                                            NAMA LENGKAP
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            id="namalengkap" type="text" placeholder="WAJIB DI ISI">
                                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-last-name">
                                            JABATAN
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="JABATAN" type="text" placeholder="WAJIB DI ISI">
                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-2">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 right-0">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-6 rounded"
                            href="{{ route('pengurus.create') }}">
                            Save
                        </a>
                    </div>
                </div>
            </div>
</x-app-layout>