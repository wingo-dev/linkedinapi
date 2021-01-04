@extends('layouts.wagg_layout')

@section('content')

    <!-- END: Top Bar -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i>
                        Reload Data </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5 ">
                                <div class="text-3xl font-bold leading-8 mt-6 item-center">230</div>
                                <div class="text-base text-gray-600 mt-1 item-center">Connected</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="text-3xl font-bold leading-8 mt-6 item-center">230</div>
                                <div class="text-base text-gray-600 mt-1 item-center">Pending requests</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="text-3xl font-bold leading-8 mt-6 item-center">230</div>
                                <div class="text-base text-gray-600 mt-1 item-center">Declined/Withdrawn requests</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="text-3xl font-bold leading-8 mt-6 item-center">230</div>
                                <div class="text-base text-gray-600 mt-1 item-center">Follow-up Messages</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->

            <!-- BEGIN: Weekly Top Seller -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Connected and Withdrawn Declined requests
                    </h2>
                </div>
                <div class="intro-y box p-5 mt-5">
                    <canvas class="mt-3" id="report-pie-chart" height="280"></canvas>
                    <div class="mt-8">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                            <span class="truncate">17 - 30 Years old</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">62%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                            <span class="truncate">31 - 50 Years old</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">33%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                            <span class="truncate">>= 50 Years old</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">10%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Weekly Top Seller -->
            <!-- BEGIN: Sales Report -->
            <div class="col-span-12 lg:col-span-9 mt-8">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Invitations per day
                    </h2>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5">
                    <div class="flex flex-col xl:flex-row xl:items-center">
                        <div class="flex">
                            <div>
                                <div class="text-theme-20 text-lg xl:text-xl font-bold">$15,000</div>
                                <div class="text-gray-600">This Month</div>
                            </div>

                        </div>
                    </div>
                    <div class="report-chart">
                        <canvas id="report-line-chart" height="100" class="mt-6"></canvas>
                    </div>
                </div>
            </div>
            <!-- END: Sales Report -->

            <div class="col-span-12 mt-6">
                <div class="col-span-12 lg:col-span-12">
                    <!-- BEGIN: Vertical Bar Chart -->
                    <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                            <h2 class="font-medium text-base mr-auto">
                                Connected and Withdrawn / Declined requests per day
                            </h2>
                        </div>
                        <div class="p-5" id="vertical-bar-chart">
                            <div class="preview">
                                <canvas id="vertical-bar-chart-widget" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- END: Vertical Bar Chart -->
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            Follow-up Messages / day
                        </h2>
                    </div>
                    <div class="p-5" id="vertical-bar-chart1">
                        <div class="preview">
                            <canvas id="vertical-bar-chart-widget1" height="60"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            Post Connection Messaages / day
                        </h2>
                    </div>
                    <div class="p-5" id="vertical-bar-chart2">
                        <div class="preview">
                            <canvas id="vertical-bar-chart-widget2" height="60"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
