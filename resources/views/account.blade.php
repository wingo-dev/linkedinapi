@extends('layouts.wagg_layout')
@section('content')
    <form>
        <div class="preview">
            <div>
                <label>Email</label>
                <input type="email" class="input w-full border mt-2" placeholder="">
            </div>
            <div class="mt-3">
                <label>Name</label>
                <input type="text" class="input w-full border mt-2" placeholder="First name Last name">
            </div>
            <div class="mt-3">
                <label>Current Password</label>
                <input type="password" class="input w-full border mt-2" placeholder="">
            </div>
            <div class="mt-3">
                <label>Confirm Password</label>
                <input type="password" class="input w-full border mt-2" placeholder="">
            </div>
            <div class="mt-3">
                <label>Service Start date</label>
                <input type="text" class="input w-full border mt-2" placeholder="">
            </div>
            <div class="mt-3">
                <label>Phone Number</label>
                <input type="text" class="input w-full border mt-2" placeholder="(254)657-6544">
            </div>
            <div class="intro-y col-span-12 flex items-center justify-center mt-5 mr-5">
                <button class="button w-34 justify-center block bg-theme-1 text-white ml-2">Update
                </button>
                <button type="submit" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Cancel</button>
            </div>
        </div>
    </form>
@endsection
