@extends('welcome')

@section('name')
<div class="row g-0">
    <div class="col-lg-7 col-xl-8 pe-lg-2 mb-3">
        <div class="card h-lg-100 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive scrollbar">
                    <table class="table table-dashboard mb-0 table-borderless fs--1 border-200">
                        <thead class="bg-light">
                            <tr class="text-900">
                                <th>Best Selling Products</th>
                                <th class="text-end">Revenue ($3333)</th>
                                <th class="pe-card text-end" style="width: 8rem">Revenue (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative"><img
                                            class="rounded-1 border border-200" src="assets/img/products/12.png"
                                            width="60" alt="">
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link"
                                                    href="#!">Raven Pro</a></h6>
                                            <p class="fw-semi-bold mb-0 text-500">Landing</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semi-bold">$1311</td>
                                <td class="align-middle pe-card">
                                    <div class="d-flex align-items-center">
                                        <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                            <div class="progress-bar rounded-pill" role="progressbar"
                                                style="width: 39%;" aria-valuenow="39" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="fw-semi-bold ms-2">39%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative"><img
                                            class="rounded-1 border border-200" src="assets/img/products/10.png"
                                            width="60" alt="">
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link"
                                                    href="#!">Boots4</a></h6>
                                            <p class="fw-semi-bold mb-0 text-500">Portfolio</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semi-bold">$860</td>
                                <td class="align-middle pe-card">
                                    <div class="d-flex align-items-center">
                                        <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                            <div class="progress-bar rounded-pill" role="progressbar"
                                                style="width: 26%;" aria-valuenow="26" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="fw-semi-bold ms-2">26%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative"><img
                                            class="rounded-1 border border-200" src="assets/img/products/11.png"
                                            width="60" alt="">
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link"
                                                    href="#!">Falcon</a></h6>
                                            <p class="fw-semi-bold mb-0 text-500">Admin</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semi-bold">$539</td>
                                <td class="align-middle pe-card">
                                    <div class="d-flex align-items-center">
                                        <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                            <div class="progress-bar rounded-pill" role="progressbar"
                                                style="width: 16%;" aria-valuenow="16" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="fw-semi-bold ms-2">16%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative"><img
                                            class="rounded-1 border border-200" src="assets/img/products/14.png"
                                            width="60" alt="">
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link"
                                                    href="#!">Slick</a></h6>
                                            <p class="fw-semi-bold mb-0 text-500">Builder</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semi-bold">$343</td>
                                <td class="align-middle pe-card">
                                    <div class="d-flex align-items-center">
                                        <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                            <div class="progress-bar rounded-pill" role="progressbar"
                                                style="width: 10%;" aria-valuenow="10" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="fw-semi-bold ms-2">10%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative"><img
                                            class="rounded-1 border border-200" src="assets/img/products/13.png"
                                            width="60" alt="">
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link"
                                                    href="#!">Reign Pro</a></h6>
                                            <p class="fw-semi-bold mb-0 text-500">Agency</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semi-bold">$280</td>
                                <td class="align-middle pe-card">
                                    <div class="d-flex align-items-center">
                                        <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 8%;"
                                                aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="fw-semi-bold ms-2">8%</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-light py-2">
                <div class="row flex-between-center">
                    <div class="col-auto">
                        <select class="form-select form-select-sm">
                            <option>Last 7 days</option>
                            <option>Last Month</option>
                            <option>Last Year</option>
                        </select>
                    </div>
                    <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-xl-4 ps-lg-2 mb-3">
        <div class="card">
            <div class="card-header d-flex flex-between-center bg-light py-2">
                <h6 class="mb-0">Shared Files</h6><a class="py-1 fs--1 font-sans-serif" href="#!">View All</a>
            </div>
            <div class="card-body pb-0">
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2"
                            src="assets/img/products/5-thumb.png" alt="">
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold"
                                href="#!">apple-smart-watch.png</a></h6>
                        <div class="fs--1"><span class="fw-semi-bold">Antony</span><span
                                class="fw-medium text-600 ms-2">Just Now</span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" href="assets/img/icons/cloud-download.svg"
                                download="download" data-bs-original-title="Download" aria-label="Download"><img
                                    src="assets/img/icons/cloud-download.svg" alt="" width="15"></a>
                            <button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"
                                aria-label="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15"></button>
                        </div>
                    </div>
                </div>
                <hr class="bg-200">
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2"
                            src="assets/img/products/3-thumb.png" alt="">
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">iphone.jpg</a></h6>
                        <div class="fs--1"><span class="fw-semi-bold">Antony</span><span
                                class="fw-medium text-600 ms-2">Yesterday at 1:30 PM</span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" href="assets/img/icons/cloud-download.svg"
                                download="download" data-bs-original-title="Download" aria-label="Download"><img
                                    src="assets/img/icons/cloud-download.svg" alt="" width="15"></a>
                            <button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"
                                aria-label="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15"></button>
                        </div>
                    </div>
                </div>
                <hr class="bg-200">
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="img-fluid" src="assets/img/icons/zip.png" alt="">
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">Falcon v1.8.2</a>
                        </h6>
                        <div class="fs--1"><span class="fw-semi-bold">Jane</span><span
                                class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" href="assets/img/icons/cloud-download.svg"
                                download="download" data-bs-original-title="Download" aria-label="Download"><img
                                    src="assets/img/icons/cloud-download.svg" alt="" width="15"></a>
                            <button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"
                                aria-label="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15"></button>
                        </div>
                    </div>
                </div>
                <hr class="bg-200">
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2"
                            src="assets/img/products/2-thumb.png" alt="">
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">iMac.jpg</a></h6>
                        <div class="fs--1"><span class="fw-semi-bold">Rowen</span><span
                                class="fw-medium text-600 ms-2">23 Sep at 6:10 PM</span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" href="assets/img/icons/cloud-download.svg"
                                download="download" data-bs-original-title="Download" aria-label="Download"><img
                                    src="assets/img/icons/cloud-download.svg" alt="" width="15"></a>
                            <button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"
                                aria-label="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15"></button>
                        </div>
                    </div>
                </div>
                <hr class="bg-200">
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="img-fluid" src="assets/img/icons/docs.png" alt="">
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">functions.php</a>
                        </h6>
                        <div class="fs--1"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">1
                                Oct at 4:30 PM</span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" href="assets/img/icons/cloud-download.svg"
                                download="download" data-bs-original-title="Download" aria-label="Download"><img
                                    src="assets/img/icons/cloud-download.svg" alt="" width="15"></a>
                            <button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"
                                aria-label="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-sm-6 col-xxl-3 pe-sm-2 mb-3 mb-xxl-0">
        <div class="card">
            <div class="card-header d-flex flex-between-center bg-light py-2">
                <h6 class="mb-0">Active Users</h6>
                <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                        type="button" id="dropdown-active-user" data-bs-toggle="dropdown" data-boundary="viewport"
                        aria-haspopup="true" aria-expanded="false"><svg
                            class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                            </path>
                        </svg>
                        <!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-active-user"><a
                            class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                </div>
            </div>
            <div class="card-body py-2">
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-online">
                        <img class="rounded-circle" src="assets/img/team/1.jpg" alt="">

                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                href="pages/user/profile.html">Emma Watson</a></h6>
                        <p class="text-500 fs--2 mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-online">
                        <img class="rounded-circle" src="assets/img/team/2.jpg" alt="">

                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                href="pages/user/profile.html">Antony Hopkins</a></h6>
                        <p class="text-500 fs--2 mb-0">Moderator</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-away">
                        <img class="rounded-circle" src="assets/img/team/3.jpg" alt="">

                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                href="pages/user/profile.html">Anna Karinina</a></h6>
                        <p class="text-500 fs--2 mb-0">Editor</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-offline">
                        <img class="rounded-circle" src="assets/img/team/4.jpg" alt="">

                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                href="pages/user/profile.html">John Lee</a></h6>
                        <p class="text-500 fs--2 mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative false">
                    <div class="avatar avatar-2xl status-offline">
                        <img class="rounded-circle" src="assets/img/team/5.jpg" alt="">

                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                href="pages/user/profile.html">Rowen Atkinson</a></h6>
                        <p class="text-500 fs--2 mb-0">Editor</p>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2"
                    href="app/social/followers.html">All active users<svg
                        class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs--2" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                    <!-- <span class="fas fa-chevron-right ms-1 fs--2"></span> Font Awesome fontawesome.com --></a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xxl-3 ps-sm-2 order-xxl-1 mb-3 mb-xxl-0">
        <div class="card h-100">
            <div class="card-header bg-light d-flex flex-between-center py-2">
                <h6 class="mb-0">Bandwidth Saved</h6>
                <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                        type="button" id="dropdown-bandwidth-saved" data-bs-toggle="dropdown" data-boundary="viewport"
                        aria-haspopup="true" aria-expanded="false"><svg
                            class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                            </path>
                        </svg>
                        <!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-bandwidth-saved">
                        <a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                </div>
            </div>
            <div class="card-body d-flex flex-center flex-column">
                <!-- Find the JS file for the following chart at: src/js/charts/echarts/bandwidth-saved.js-->
                <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                <div class="echart-bandwidth-saved" data-echart-responsive="true" _echarts_instance_="ec_1647984590989"
                    style="-webkit-tap-highlight-color: transparent; user-select: none;">
                    <div
                        style="position: relative; width: 164px; height: 164px; padding: 0px; margin: 0px; border-width: 0px;">
                    </div>
                </div>
                <div class="text-center mt-3">
                    <h6 class="fs-0 mb-1"><svg class="svg-inline--fa fa-check fa-w-16 text-success me-1"
                            data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;">
                            <g transform="translate(256 256)">
                                <g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)">
                                    <path fill="currentColor"
                                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                                        transform="translate(-256 -256)"></path>
                                </g>
                            </g>
                        </svg>
                        <!-- <span class="fas fa-check text-success me-1" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com -->35.75
                        GB saved</h6>
                    <p class="fs--1 mb-0">38.44 GB total bandwidth</p>
                </div>
            </div>
            <div class="card-footer bg-light py-2">
                <div class="row flex-between-center">
                    <div class="col-auto">
                        <select class="form-select form-select-sm">
                            <option>Last 6 Months</option>
                            <option>Last Year</option>
                            <option>Last 2 Year</option>
                        </select>
                    </div>
                    <div class="col-auto"><a class="fs--1 font-sans-serif" href="#!">Help</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 px-xxl-2">
        <div class="card h-100">
            <div class="card-header bg-light py-2">
                <div class="row flex-between-center">
                    <div class="col-auto">
                        <h6 class="mb-0">Top Products</h6>
                    </div>
                    <div class="col-auto d-flex"><a class="btn btn-link btn-sm me-2" href="#!">View Details</a>
                        <div class="dropdown font-sans-serif btn-reveal-trigger">
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                type="button" id="dropdown-top-products" data-bs-toggle="dropdown"
                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg
                                    class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2"
                                aria-labelledby="dropdown-top-products"><a class="dropdown-item" href="#!">View</a><a
                                    class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body h-100">
                <!-- Find the JS file for the following chart at: src/js/charts/echarts/top-products.js-->
                <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                <div class="echart-bar-top-products h-100" data-echart-responsive="true"
                    _echarts_instance_="ec_1647984590988"
                    style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;">
                    <div
                        style="position: relative; width: 543px; height: 279px; padding: 0px; margin: 0px; border-width: 0px;">
                        <canvas data-zr-dom-id="zr_0" width="622" height="319"
                            style="position: absolute; left: 0px; top: 0px; width: 543px; height: 279px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection