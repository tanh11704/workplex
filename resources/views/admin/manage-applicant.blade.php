@extends('admin.layouts.app')

@section('content')
    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-4">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h2 class="text-dark">Manage Applicant</h2>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-md-12">
                    <div class="px-3 py-4 bg-white rounded mb-3">
                  <span class="mb-0 fw-bold text-dark">
                    07 New Applicants Found
                  </span>
                    </div>

                    <div class="data-applicants">
                        <!-- Item -->
                        <div class="applicant-wrap bg-white rounded mb-3">
                            <div class="applicant-full bg-white rounded p-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img
                                            src="../img/t-3.png"
                                            class="img-fluid rounded-circle"
                                            width="70"
                                            alt=""
                                        />
                                    </div>
                                    <div>
                                        <div class="px-2">
                                            <h4 class="fs-5 mb-0 theme-cl">Sign Karan</h4>
                                            <div class="d-block mb-2 position-relative">
                                                <small>
                                                    <i class="lni lni-map-marker me-1"></i>United
                                                    States
                                                </small>
                                                <small class="ms-2">
                                                    <i class="lni lni-briefcase me-1"></i>Web
                                                    Designer
                                                </small>
                                            </div>
                                            <a
                                                download
                                                href="../img/about-1.png"
                                                class="px-2 py-1 bg-light-success rounded theme-cl"
                                            >
                                                <i class="lni lni-download me-1"></i>Download CV
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="text-left pe-3">
                                        <a href="#" class="me-3 agree-hover p-2 rounded-circle">
                                            <i class="lni lni-checkmark"></i>
                                        </a>
                                        <a href="#" class="close-hover p-2 rounded-circle">
                                            <i class="lni lni-close"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="applicant-footer p-3 br-top">
                                <div class="applicant-status bg-light-danger">
                                    <small class="text-danger p-2">Trashed</small>
                                </div>
                                <div class="applied-date">
                        <span>
                          <i class="lni lni-calendar me-1"></i>07 July 2017
                        </span>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="applicant-wrap bg-white rounded mb-3">
                            <div class="applicant-full bg-white rounded p-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img
                                            src="../img/t-3.png"
                                            class="img-fluid rounded-circle"
                                            width="70"
                                            alt=""
                                        />
                                    </div>
                                    <div>
                                        <div class="px-2">
                                            <h4 class="fs-5 mb-0 theme-cl">Sign Karan</h4>
                                            <div class="d-block mb-2 position-relative">
                                                <small>
                                                    <i class="lni lni-map-marker me-1"></i>United
                                                    States
                                                </small>
                                                <small class="ms-2">
                                                    <i class="lni lni-briefcase me-1"></i>Web
                                                    Designer
                                                </small>
                                            </div>
                                            <a
                                                download
                                                href="../img/about-1.png"
                                                class="px-2 py-1 bg-light-success rounded theme-cl"
                                            >
                                                <i class="lni lni-download me-1"></i>Download CV
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="text-left">
                                        <a
                                            href="#"
                                            data-bs-toggle="modal"
                                            data-bs-target="#edit"
                                            class="btn gray ft-medium apply-btn fs-sm rounded me-1"
                                        >
                                            <i class="lni lni-arrow-right-circle me-1"></i>Edit
                                        </a>
                                        <a
                                            href="javascript:void(0);"
                                            class="btn gray ft-medium apply-btn fs-sm rounded"
                                        >
                                            <i class="lni lni-heart me-1"></i>Save
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="applicant-footer p-3 br-top">
                                <div class="applicant-status bg-light-info">
                                    <small class="text-info p-2">Active New</small>
                                </div>
                                <div class="applied-date">
                        <span>
                          <i class="lni lni-calendar me-1"></i>07 July 2017
                        </span>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="applicant-wrap bg-white rounded mb-3">
                            <div class="applicant-full bg-white rounded p-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img
                                            src="../img/t-3.png"
                                            class="img-fluid rounded-circle"
                                            width="70"
                                            alt=""
                                        />
                                    </div>
                                    <div>
                                        <div class="px-2">
                                            <h4 class="fs-5 mb-0 theme-cl">Sign Karan</h4>
                                            <div class="d-block mb-2 position-relative">
                                                <small>
                                                    <i class="lni lni-map-marker me-1"></i>United
                                                    States
                                                </small>
                                                <small class="ms-2">
                                                    <i class="lni lni-briefcase me-1"></i>Web
                                                    Designer
                                                </small>
                                            </div>
                                            <a
                                                download
                                                href="../img/about-1.png"
                                                class="px-2 py-1 bg-light-success rounded theme-cl"
                                            >
                                                <i class="lni lni-download me-1"></i>Download CV
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="text-left">
                                        <a
                                            href="#"
                                            data-bs-toggle="modal"
                                            data-bs-target="#edit"
                                            class="btn gray ft-medium apply-btn fs-sm rounded me-1"
                                        >
                                            <i class="lni lni-arrow-right-circle me-1"></i>Edit
                                        </a>
                                        <a
                                            href="javascript:void(0);"
                                            class="btn gray ft-medium apply-btn fs-sm rounded"
                                        >
                                            <i class="lni lni-heart me-1"></i>Save
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="applicant-footer p-3 br-top">
                                <div class="applicant-status bg-light-success">
                                    <small class="text-success p-2">Interview</small>
                                </div>
                                <div class="applied-date">
                        <span>
                          <i class="lni lni-calendar me-1"></i>07 July 2017
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
