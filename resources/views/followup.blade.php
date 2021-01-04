@extends('layouts.wagg_layout')
@section('content')
    <form>

        <div class="px-5 sm:px-20 mt-10 border-gray-200">
            <div class="flex justify-center">
                <h2 class="intro-y text-lg font-medium">Automated Follow-up Messages</h2>
            </div>
            <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                <div class="intro-y col-span-12 sm:col-span-12">
                    <textarea class="w-full border flex-1 p-10" rows="10"
                        placeholder="I sent you a message a few days ago. I would like to follow up and see if there is anything ,we can do 
                                                                                                                    together that might benefical to us."></textarea>
                </div>

            </div>
            <p class="text-center"> This message will help you sent after few days.
            </p>
            <div class="text-center mt-3">
                <input type="text" class="border ml-3" placeholder="Tages">
                <input type="text" class="border ml-3" placeholder="First name">
                <input type="text" class="border ml-3" placeholder="Last Name">
            </div>
            <div class="mt-5">
                Send after (X) days of previous message
                <input type="text" placeholder="Number of days">
            </div>
            <div class="flex items-center text-gray-700 mt-5">
                <input type="checkbox" class="input border mr-2" id="vertical-remember-me">
                <label class="cursor-pointer select-none" for="vertical-remember-me">Disable Post Connection
                    Message</label>
            </div>
            <div class="mt-5">
                <button class="button w-62 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"> <i
                        data-feather="plus" class="w-14 h-4 mr-2"></i> Another Message </button>
            </div>
        </div>
        <div class="intro-y col-span-12 flex items-center justify-center mt-5 mr-5">
            <button class="button w-24 justify-center block bg-theme-1 text-white ml-2">Save</button>
            <button type="submit" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Cancel</button>
        </div>
    </form>
@endsection
