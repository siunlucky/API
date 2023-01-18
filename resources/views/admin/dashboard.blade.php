@extends('layout.main')
@section('pages')
<div class="mt-6 overflow-x-auto">
    <table class="w-full border-collapse table-auto">
        <thead>
            <tr class="text-sm font-medium text-left text-gray-700 rounded-lg" style="font-size: 0.9674rem">
                <th class="px-4 py-2" style="background-color:#f8f8f8">No</th>
                <th class="px-4 py-2 w-60" style="background-color:#f8f8f8">Name</th>
                <th class="px-4 py-2" style="background-color:#f8f8f8">Address</th>
                <th class="px-4 py-2 w-44" style="background-color:#f8f8f8">Phone Number</th>
                <th class="px-4 py-2 w-44" style="background-color:#f8f8f8">Note</th>
                <th class="px-4 py-2" style="background-color:#f8f8f8">Action</th>
            </tr>
        </thead>
        <tbody class="text-sm font-normal text-gray-700">
            @foreach ($guests as $index => $note)
            <tr class="py-10 border-b border-gray-200 hover:bg-gray-100">
                <td class="px-4 py-4"> {{ $index + 1 }}</td>
                <td class="px-4 py-4">{{ $note->name }}</td>
                <td class="px-4 py-4">{{ $note->address }}</td>
                <td class="px-4 py-4">+62 {{ $note->phone_number }}</td>
                <td class="px-4 py-4">{{ $note->note }}</td>
                <td class="px-4 py-4">
                    <div class="flex justify-center item-center">
                        <a href="#" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                        <a href="/admin/destroy/{{ $note->id }}"
                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection