@extends('layouts.wagg_layout')
@section('content')
    <div class="flex">
        <div class="intro-y flex-col sm:flex-row items-center mt-8">
            <div>
                <h2 class="text-lg font-medium">Sales Cycle</h2>
            </div>
            <div class="sm:mt-2">
                <select class="input w-64 input--sm border mr-2">
                    <option>Chris Evans</option>
                    <option>Liam Neeson</option>
                    <option>Daniel Craig</option>
                </select>
            </div>
        </div>
        <div class="intro-y flex-col sm:flex-row items-center mt-8">
            <div>
                <h2 class="text-lg font-medium">Contract Status</h2>
            </div>
            <div class="sm:mt-2">
                <select class="input w-64 input--sm border mr-2">
                    <option>--select --</option>
                    <option>Liam Neeson</option>
                    <option>Daniel Craig</option>
                </select>
            </div>
        </div>
    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
                <tr>
                    <th class="border-b-2 whitespace-no-wrap">ID</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">First Name</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">Last Name</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">Follow-up messages</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">Linkedin profile</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">Email</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">Phone</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">Title</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">Company</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-b">
                        <div class="font-medium whitespace-no-wrap">18284</div>
                    </td>
                    <td class="border-b">
                        Jack
                    </td>
                    <td class="border-b">
                        Greten
                    </td>
                    <td class="text-center border-b">
                        <div class="mt-3">
                            <div class="mt-2"><input type="checkbox" class="input input--switch border"> </div>
                        </div>
                    </td>
                    <td class="text-center border-b"><a href="">Linkedin profile</a></td>
                    <td class="w-40 border-b">
                        sete@gmail.com
                    </td>
                    <td class="w-40 border-b">
                        535-233-2342
                    </td>
                    <td class="w-40 border-b">
                        change website
                    </td>
                    <td class="border-b w-5">
                        SEGA
                    </td>
                    <td class="border-b w-5">

                        <div class="flex sm:justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:" data-toggle="modal"
                                data-target="#superlarge-modal-size-preview"> <i data-feather="check-square"
                                    class="w-4 h-4 mr-1"></i> Edit </a>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- END: Datatable -->
    {{-- modal --}}
    <div class="modal" id="superlarge-modal-size-preview">
        <div class="modal__content modal__content--xl p-10">
            <form>
                <div class="preview">
                    <div>
                        <label>First Name</label>
                        <input type="text" class="input w-full border mt-2" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label>Last Name</label>
                        <input type="text" class="input w-full border mt-2" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label>Linkedin</label>
                        <input type="text" class="input w-full border mt-2" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label>Email</label>
                        <input type="text" class="input w-full border mt-2" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label>Phone</label>
                        <input type="text" class="input w-full border mt-2" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label>Title</label>
                        <input type="text" class="input w-full border mt-2" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label>Website</label>
                        <input type="text" class="input w-full border mt-2" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label>Company</label>
                        <input type="text" class="input w-full border mt-2" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label>Location</label>
                        <input type="text" class="input w-full border mt-2" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label>Sales Cycle</label>
                        <select class="input w-full input--sm border mr-2">
                            <option>Emailed</option>
                            <option>Called</option>
                            <option>In person Meeting</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label>Contract Status</label>
                        <select class="input w-full input--sm border mr-2">
                            <option>Prospect</option>
                            <option>Lead</option>
                            <option>Qualified</option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 flex items-center justify-center mt-5 mr-5">
                        <button class="button w-34 justify-center block bg-theme-1 text-white ml-2">Save
                            Change</button>
                        <button type="submit"
                            class="button w-24 justify-center block bg-theme-1 text-white ml-2">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
