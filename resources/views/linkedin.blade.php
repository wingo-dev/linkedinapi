@extends('layouts.wagg_layout')
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Update account
        </h2>
    </div>
    <form>
        <div class="preview">
            <div>
                <label>Name</label>
                <input type="text" class="input w-full border mt-2" placeholder="">
            </div>
            <div class="mt-3">
                <label>Linkedin Email</label>
                <input type="text" class="input w-full border mt-2" placeholder="">
            </div>
            <div class="mt-3">
                <label>Linkedin Password</label>
                <input type="password" class="input w-full border mt-2" placeholder="">
            </div>
            <div class="mt-3">
                <label>Linkedin Password Confirmation</label>
                <input type="password" class="input w-full border mt-2" placeholder="">
            </div>
            <div class="mt-3">
                <label>Invitations Per Day</label>
                <input type="text" class="input w-full border mt-2" placeholder="">
            </div>
            <div class="mt-3">
                <label>Withdraw Invitation after Invitation Initated if Not Accepted</label>
                <select class="input w-full input--sm border mr-2">
                    <option>8 Days</option>
                    <option>6 Days</option>
                    <option>4 Days</option>
                </select>
            </div>
            <div class="intro-y col-span-12 flex items-center justify-center mt-5 mr-5">
                <button class="button w-34 justify-center block bg-theme-1 text-white ml-2">Save
                    Campaign</button>
                <button type="submit" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Cancel</button>
            </div>
        </div>
    </form>
@endsection
