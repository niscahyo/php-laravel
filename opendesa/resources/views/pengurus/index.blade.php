<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengurus') }}
        </h2>
    </x-slot>

    <div class="">

    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5 right-0">
                <a class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-6 rounded"
                    href="{{ route('pengurus.create') }}">
                    Create
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nama</th>
                                <th class="px-4 py-2">Jabatan</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengurus as $p)
                            <tr>
                                <td class="border px-4 py-2">{{$p->nama}}</td>
                                <td class="border px-4 py-2">{{$p->jabatan}}</td>
                                <td class="border px-4 py-2"><a href="{{url('pengurus/edit/')}}">edit</a></td>
                                <td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>