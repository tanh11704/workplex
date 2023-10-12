@extends('admin.layouts.app')

@section('content')
<div class="dashboard-content">
            <div class="dashboard-tlbar d-block mb-4">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-dark">Hello, Phuoc Anh</h2>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="dash-widgets py-5 px-4 bg-info rounded">
                            <h2 class="ft-medium mb-1 fs-xl text-light">46</h2>
                            <p class="p-0 m-0 text-light fs-md">Applied Jobs</p>
                            <i class="lni lni-empty-file"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="dash-widgets py-5 px-4 bg-dark rounded">
                            <h2 class="ft-medium mb-1 fs-xl text-light">87</h2>
                            <p class="p-0 m-0 text-light fs-md">Notifications</p>
                            <i class="lni lni-users"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="dash-widgets py-5 px-4 bg-warning rounded">
                            <h2 class="ft-medium mb-1 fs-xl text-light">312</h2>
                            <p class="p-0 m-0 text-light fs-md">Alert Jobs</p>
                            <i class="lni lni-bar-chart"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="dash-widgets py-5 px-4 bg-purple rounded">
                            <h2 class="ft-medium mb-1 fs-xl text-light">32</h2>
                            <p class="p-0 m-0 text-light fs-md">Bookmark jobs</p>
                            <i class="lni lni-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
