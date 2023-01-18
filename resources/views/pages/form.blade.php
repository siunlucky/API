@extends('layout.main')
@section('pages')
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px] bg-white">

        <form class="py-6 px-9" action="/form/store" method="POST">
            @csrf
            <div class="mb-5">
                <label for="Name" class="mb-3 block text-base font-medium text-[#07074D]">
                    Name
                </label>
                <input type="text" name="name" id="name" placeholder="Name"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="phone_number" class="mb-3 block text-base font-medium text-[#07074D]">
                    Phone
                </label>
                <input type="number" name="phone_number" id="phone_number" placeholder="0821xxxxx"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="address" class="mb-3 block text-base font-medium text-[#07074D]">
                    Address
                </label>
                <input type="text" name="address" id="address" placeholder="Jl. xxxx no. x"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="note" class="mb-3 block text-base font-medium text-[#07074D]">
                    Note
                </label>
                <textarea type="text" name="note" id="note" placeholder="Place your note here"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>

            </div>
            <div>
                <button
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Send File
                </button>
            </div>
        </form>
    </div>
</div>
@endsection