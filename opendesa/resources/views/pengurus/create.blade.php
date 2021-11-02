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
            <div class="py-12">
                <div class="mx-auto sm:px-6 lg:px-8">
                    <div class="mb-5 right-0">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-6 rounded"
                            href="{{ url('pengurus') }}">
                            Back
                        </a>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form method="POST" action="{{url('pengurus/create')}}">
                                @csrf
                                <input type="text" name="nama" placeholder="nama lengkap">
                                <input type="text" name="jabatan" placeholder="jabatan">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-6 rounded">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>