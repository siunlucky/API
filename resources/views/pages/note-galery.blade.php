@extends('layout.main')
@section('pages')
<div class="relative flex justify-center mt-12 top-1/3">




    <!-- This is an example component -->
    @foreach ($guests as $note)
    <div class="relative grid grid-cols-1 gap-4 p-4 mx-5 mb-8 bg-white border rounded-lg shadow-lg">
        <div class="relative flex gap-4">
            <img src="https://icons.iconarchive.com/icons/diversity-avatars/avatars/256/charlie-chaplin-icon.png"
                class="relative w-20 h-20 mr-2 -mb-4 bg-white border rounded-lg -top-8" alt="" loading="lazy">
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-between">
                    <p class="relative overflow-hidden text-xl truncate whitespace-nowrap">{{ $note->name }}</p>
                    <a class="text-xl text-gray-500" href="#"><i class="fa-solid fa-trash"></i></a>
                </div>
                <p class="text-sm text-gray-400">{{ $note->created_at }}</p>
            </div>
        </div>
        <p class="-mt-4 text-gray-500">{{ $note->note }}</p>

    </div>
    @endforeach




</div>

@endsection