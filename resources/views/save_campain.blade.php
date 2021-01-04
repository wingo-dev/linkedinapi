@extends('layouts.wagg_layout')
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Campaign
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div class="p-5" id="input">
                    <form>
                        <div class="preview">
                            <div>
                                <label>Job Title*</label>
                                <input type="text" class="input w-full border mt-2" placeholder="">
                            </div>
                            <div class="mt-3">
                                <label>Location</label>
                                <input type="text" class="input w-full border mt-2" placeholder="">
                            </div>
                            <div class="mt-3">
                                <label>Optional Fields</label>
                                <input type="text" class="input w-full border mt-2" placeholder="">
                            </div>
                            <div class="mt-3">
                                <label>Industry</label>
                                <input type="text" class="input w-full border mt-2" placeholder="">
                            </div>
                            <div class="mt-3">
                                <label>Industry</label>
                                <input type="text" class="input w-full border mt-2" placeholder="">
                            </div>
                            <div class="mt-3">
                                <label>Companies</label>
                                <input type="text" class="input w-full border mt-2" placeholder="">
                            </div>
                            <div class="intro-y col-span-12 flex items-center justify-center mt-5 mr-5">
                                <button class="button w-34 justify-center block bg-theme-1 text-white ml-2">Save
                                    Campaign</button>
                                <button type="submit"
                                    class="button w-24 justify-center block bg-theme-1 text-white ml-2">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Input -->
        </div>
    </div>
@endsection
