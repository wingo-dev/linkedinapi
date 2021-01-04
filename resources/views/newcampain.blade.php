@extends('layouts.wagg_layout')
@section('content')
    <div class="flex item-center mt-8">
        <h2 class="intro-y text-lg font-medium">
            Custom Invite Message
        </h2>
    </div>
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <form action="{{ route('savecampain') }}" method="GET">
            @csrf
            <div class="px-1 sm:px-20">
                <div class="grid grid-cols-12">
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <textarea class="w-full border flex-1" rows="10"
                            placeholder=" Example: I just saw your profile here on Linkedin. I would like to connect if you are open to it"></textarea>
                    </div>

                </div>
            </div>
            <div class="px-5 sm:px-20 mt-10 border-gray-200">
                <p class="text-center">This message will help you connect with prospect better. It will be delivered with
                    your connection
                    request.</p>
                <div class="flex justify-center">
                    <h2 class="intro-y text-lg font-medium">Post Connection Message</h2>
                </div>
                <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <textarea class="w-full border flex-1" rows="10"
                            placeholder=" Example: I just saw your profile here on Linkedin. I would like to connect if you are open to it"></textarea>
                    </div>

                </div>
                <p class="text-center"> This message will help you sent after the prospect accepts your connection request.
                </p>
                <div class="text-center mt-3">
                    <input type="text" class="border ml-3" placeholder="Tages">
                    <input type="text" class="border ml-3" placeholder="First name">
                    <input type="text" class="border ml-3" placeholder="Last Name">
                </div>
                <div class="flex items-center text-gray-700 mt-5">
                    <input type="checkbox" class="input border mr-2" id="vertical-remember-me">
                    <label class="cursor-pointer select-none" for="vertical-remember-me">Disable Post Connection
                        Message</label>
                </div>
            </div>
            <div class="intro-y col-span-12 flex items-center justify-center mt-5 mr-5">
                <button class="button w-24 justify-center block bg-gray-200 text-gray-600">Previous</button>
                <button type="submit" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Next</button>
            </div>
        </form>
    </div>
    <!-- END: Wizard Layout -->
@endsection
