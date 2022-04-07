<script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
}
</script>

<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }

    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">

            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="" data-bs-original-title="Toggle Navigation"
                aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>

        </div><a class="navbar-brand" href="index.html">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="/assets/img/icons/spot-illustrations/falcon.png" alt="" width="40"><span
                    class="font-sans-serif">falcon</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-chart-pie fa-w-17" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chart-pie" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-chart-pie"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>
                    <ul class="nav collapse show" id="dashboard">
                        <li class="nav-item"><a class="nav-link active" href="index.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/analytics.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Analytics</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/crm.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/e-commerce.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E
                                        commerce</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/project-management.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Management</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/saas.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">SaaS</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">App
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div>
                    <!-- parent pages--><a class="nav-link" href="app/calendar.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-calendar-alt fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="calendar-alt" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-calendar-alt"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Calendar</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link" href="app/chat.html" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-comments fa-w-18" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-comments"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Chat</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#mail" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-envelope-open fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="envelope-open" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M512 464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V200.724a48 48 0 0 1 18.387-37.776c24.913-19.529 45.501-35.365 164.2-121.511C199.412 29.17 232.797-.347 256 .003c23.198-.354 56.596 29.172 73.413 41.433 118.687 86.137 139.303 101.995 164.2 121.512A48 48 0 0 1 512 200.724V464zm-65.666-196.605c-2.563-3.728-7.7-4.595-11.339-1.907-22.845 16.873-55.462 40.705-105.582 77.079-16.825 12.266-50.21 41.781-73.413 41.43-23.211.344-56.559-29.143-73.413-41.43-50.114-36.37-82.734-60.204-105.582-77.079-3.639-2.688-8.776-1.821-11.339 1.907l-9.072 13.196a7.998 7.998 0 0 0 1.839 10.967c22.887 16.899 55.454 40.69 105.303 76.868 20.274 14.781 56.524 47.813 92.264 47.573 35.724.242 71.961-32.771 92.263-47.573 49.85-36.179 82.418-59.97 105.303-76.868a7.998 7.998 0 0 0 1.839-10.967l-9.071-13.196z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-envelope-open"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Email</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="mail">
                        <li class="nav-item"><a class="nav-link" href="app/email/inbox.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/email/email-detail.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email
                                        detail</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/email/compose.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#events" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-calendar-day fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="calendar-day" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h96c8.8 0 16 7.2 16 16v96c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-96zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-calendar-day"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Events</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="events">
                        <li class="nav-item"><a class="nav-link" href="app/events/create-an-event.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create an
                                        event</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/events/event-detail.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event
                                        detail</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/events/event-list.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event
                                        list</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="shopping-cart" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-shopping-cart"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">E commerce</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="e-commerce">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="product">
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/product-list.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product
                                                list</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/product-grid.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product
                                                grid</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="app/e-commerce/product/product-details.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product
                                                details</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="orders">
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/orders/order-list.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order
                                                list</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/orders/order-details.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order
                                                details</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/customers.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/customer-details.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customer
                                        details</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/shopping-cart.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shopping
                                        cart</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/checkout.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checkout</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/billing.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Billing</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/invoice.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invoice</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link" href="app/kanban.html" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-trello fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="trello" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M392.3 32H56.1C25.1 32 0 57.1 0 88c-.1 0 0-4 0 336 0 30.9 25.1 56 56 56h336.2c30.8-.2 55.7-25.2 55.7-56V88c.1-30.8-24.8-55.8-55.6-56zM197 371.3c-.2 14.7-12.1 26.6-26.9 26.6H87.4c-14.8.1-26.9-11.8-27-26.6V117.1c0-14.8 12-26.9 26.9-26.9h82.9c14.8 0 26.9 12 26.9 26.9v254.2zm193.1-112c0 14.8-12 26.9-26.9 26.9h-81c-14.8 0-26.9-12-26.9-26.9V117.2c0-14.8 12-26.9 26.8-26.9h81.1c14.8 0 26.9 12 26.9 26.9v142.1z">
                                    </path>
                                </svg>
                                <!-- <span class="fab fa-trello"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Kanban</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#social" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-share-alt fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="share-alt" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-share-alt"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Social</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="social">
                        <li class="nav-item"><a class="nav-link" href="app/social/feed.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feed</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/social/activity-log.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity
                                        log</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/social/notifications.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Notifications</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/social/followers.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Followers</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Pages
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div>
                    <!-- parent pages--><a class="nav-link" href="pages/starter.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-flag fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="flag" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M349.565 98.783C295.978 98.783 251.721 64 184.348 64c-24.955 0-47.309 4.384-68.045 12.013a55.947 55.947 0 0 0 3.586-23.562C118.117 24.015 94.806 1.206 66.338.048 34.345-1.254 8 24.296 8 56c0 19.026 9.497 35.825 24 45.945V488c0 13.255 10.745 24 24 24h16c13.255 0 24-10.745 24-24v-94.4c28.311-12.064 63.582-22.122 114.435-22.122 53.588 0 97.844 34.783 165.217 34.783 48.169 0 86.667-16.294 122.505-40.858C506.84 359.452 512 349.571 512 339.045v-243.1c0-23.393-24.269-38.87-45.485-29.016-34.338 15.948-76.454 31.854-116.95 31.854z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-flag"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Starter</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link" href="pages/landing.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-globe fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 496 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-globe"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Landing</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#authentication" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-lock fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-lock"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Authentication</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="authentication">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Simple</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="simple">
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/login.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Login</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/logout.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Logout</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/register.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Register</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/forgot-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/confirm-mail.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm
                                                mail</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/reset-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/lock-screen.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock
                                                screen</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#card"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="card">
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/login.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Login</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/logout.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Logout</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/register.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Register</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/forgot-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/confirm-mail.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm
                                                mail</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/reset-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/lock-screen.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock
                                                screen</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Split</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="split">
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/split/login.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Login</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/split/logout.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Logout</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/split/register.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Register</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/forgot-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/confirm-mail.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm
                                                mail</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/reset-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/lock-screen.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock
                                                screen</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/wizard.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#authentication-modal" data-bs-toggle="modal"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modal</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-user"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">User</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="user">
                        <li class="nav-item"><a class="nav-link" href="pages/user/profile.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/user/settings.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settings</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#pricing" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-tags fa-w-20" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-tags"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Pricing</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="pricing">
                        <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-default.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing
                                        default</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-alt.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing
                                        alt</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#faq" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="question-circle" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-question-circle"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Faq</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="faq">
                        <li class="nav-item"><a class="nav-link" href="pages/faq/faq-basic.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq basic</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/faq/faq-alt.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq alt</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/faq/faq-accordion.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq
                                        accordion</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#errors" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-exclamation-triangle fa-w-18" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="exclamation-triangle" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-exclamation-triangle"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Errors</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="errors">
                        <li class="nav-item"><a class="nav-link" href="pages/errors/404.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">404</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/errors/500.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">500</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#miscellaneous" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="miscellaneous">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-thumbtack fa-w-12" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="thumbtack" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M298.028 214.267L285.793 96H328c13.255 0 24-10.745 24-24V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v48c0 13.255 10.745 24 24 24h42.207L85.972 214.267C37.465 236.82 0 277.261 0 328c0 13.255 10.745 24 24 24h136v104.007c0 1.242.289 2.467.845 3.578l24 48c2.941 5.882 11.364 5.893 14.311 0l24-48a8.008 8.008 0 0 0 .845-3.578V352h136c13.255 0 24-10.745 24-24-.001-51.183-37.983-91.42-85.973-113.733z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-thumbtack"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Miscellaneous</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="miscellaneous">
                        <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/associations.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Associations</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/invite-people.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invite
                                        people</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/privacy-policy.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Privacy
                                        policy</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Modules
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#forms" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-file-alt fa-w-12" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="file-alt" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-file-alt"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Forms</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="forms">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="basic">
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/form-control.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Form
                                                control</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/input-group.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input
                                                group</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/select.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Select</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/checks.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Checks</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/range.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Range</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/layout.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Layout</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="advance">
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/forms/advance/advance-select.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance
                                                select</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/date-picker.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Date
                                                picker</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/editor.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Editor</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/emoji-button.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Emoji
                                                button</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/file-uploader.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">File
                                                uploader</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/rating.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Rating</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/forms/floating-labels.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Floating
                                        labels</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/forms/wizard.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/forms/validation.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Validation</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#tables" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-table fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-table"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Tables</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="tables">
                        <li class="nav-item"><a class="nav-link" href="modules/tables/basic-tables.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic
                                        tables</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/tables/advance-tables.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance
                                        tables</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/tables/bulk-select.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bulk
                                        select</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#charts" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-chart-line fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chart-line" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-chart-line"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Charts</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="charts">
                        <li class="nav-item"><a class="nav-link" href="modules/charts/chartjs.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Chartjs</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#eCharts"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ECharts</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="eCharts">
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/line-charts.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Line
                                                charts</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/bar-charts.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bar
                                                charts</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/charts/echarts/candlestick-charts.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Candlestick charts</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/geo-map.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Geo
                                                map</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/charts/echarts/scatter-charts.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scatter
                                                charts</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/pie-charts.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pie
                                                charts</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/radar-charts.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Radar
                                                charts</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/charts/echarts/heatmap-charts.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Heatmap
                                                charts</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/how-to-use.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">How to
                                                use</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#icons" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="icons">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-shapes fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="shapes" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M128,256A128,128,0,1,0,256,384,128,128,0,0,0,128,256Zm379-54.86L400.07,18.29a37.26,37.26,0,0,0-64.14,0L229,201.14C214.76,225.52,232.58,256,261.09,256H474.91C503.42,256,521.24,225.52,507,201.14ZM480,288H320a32,32,0,0,0-32,32V480a32,32,0,0,0,32,32H480a32,32,0,0,0,32-32V320A32,32,0,0,0,480,288Z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-shapes"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Icons</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="icons">
                        <li class="nav-item"><a class="nav-link" href="modules/icons/font-awesome.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Font
                                        awesome</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/icons/bootstrap-icons.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap
                                        icons</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/icons/feather.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feather</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/icons/material-icons.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Material
                                        icons</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#maps" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="maps">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-map fa-w-18" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="map" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M0 117.66v346.32c0 11.32 11.43 19.06 21.94 14.86L160 416V32L20.12 87.95A32.006 32.006 0 0 0 0 117.66zM192 416l192 64V96L192 32v384zM554.06 33.16L416 96v384l139.88-55.95A31.996 31.996 0 0 0 576 394.34V48.02c0-11.32-11.43-19.06-21.94-14.86z">
                                    </path>
                                </svg><!-- <span class="fas fa-map"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Maps</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="maps">
                        <li class="nav-item"><a class="nav-link" href="modules/maps/google-map.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Google
                                        map</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/maps/leaflet-map.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Leaflet
                                        map</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#components" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-puzzle-piece fa-w-18" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="puzzle-piece" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M519.442 288.651c-41.519 0-59.5 31.593-82.058 31.593C377.409 320.244 432 144 432 144s-196.288 80-196.288-3.297c0-35.827 36.288-46.25 36.288-85.985C272 19.216 243.885 0 210.539 0c-34.654 0-66.366 18.891-66.366 56.346 0 41.364 31.711 59.277 31.711 81.75C175.885 207.719 0 166.758 0 166.758v333.237s178.635 41.047 178.635-28.662c0-22.473-40-40.107-40-81.471 0-37.456 29.25-56.346 63.577-56.346 33.673 0 61.788 19.216 61.788 54.717 0 39.735-36.288 50.158-36.288 85.985 0 60.803 129.675 25.73 181.23 25.73 0 0-34.725-120.101 25.827-120.101 35.962 0 46.423 36.152 86.308 36.152C556.712 416 576 387.99 576 354.443c0-34.199-18.962-65.792-56.558-65.792z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-puzzle-piece"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Components</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="components">
                        <li class="nav-item"><a class="nav-link" href="modules/components/accordion.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Accordion</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/alerts.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Alerts</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/anchor.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Anchor</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/animated-icons.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Animated
                                        icons</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/background.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Background</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/badges.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Badges</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/breadcrumbs.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Breadcrumbs</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/buttons.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Buttons</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/calendar.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Calendar</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/cards.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cards</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Carousel</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="carousel">
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/carousel/bootstrap.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Bootstrap</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/carousel/swiper.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Swiper</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/collapse.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Collapse</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/cookie-notice.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cookie
                                        notice</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/countup.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Countup</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/draggable.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Draggable</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/dropdowns.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dropdowns</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/list-group.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List
                                        group</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/modals.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modals</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs &amp;
                                        Tabs</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="navs-_and_-Tabs">
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/navs-and-tabs/navs.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Navs</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/navs-and-tabs/navbar.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Navbar</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/navs-and-tabs/vertical-navbar.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical
                                                navbar</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/navs-and-tabs/top-navbar.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top
                                                navbar</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/navs-and-tabs/combo-navbar.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Combo
                                                navbar</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/navs-and-tabs/tabs.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Tabs</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/offcanvas.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Offcanvas</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pictures"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pictures</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="pictures">
                                <li class="nav-item"><a class="nav-link" href="modules/components/pictures/avatar.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Avatar</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/pictures/images.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Images</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/pictures/figures.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Figures</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/pictures/hoverbox.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Hoverbox</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/pictures/lightbox.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Lightbox</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/progress-bar.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Progress
                                        bar</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/placeholder.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Placeholder</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/pagination.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Pagination</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/popovers.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Popovers</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/scrollspy.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scrollspy</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/search.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Search</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/spinners.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spinners</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/toasts.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Toasts</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/tooltips.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tooltips</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/treeview.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Treeview</span><span
                                        class="badge rounded-pill ms-2 badge-soft-success">New</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/typed-text.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typed
                                        text</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#videos"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Videos</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="videos">
                                <li class="nav-item"><a class="nav-link" href="modules/components/videos/embed.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Embed</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/videos/plyr.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Plyr</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#utilities" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-fire fa-w-12" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="fire" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85 63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-fire"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Utilities</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="utilities">
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/borders.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Borders</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/clearfix.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Clearfix</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/colors.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colors</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/colored-links.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colored
                                        links</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/display.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Display</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/flex.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Flex</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/float.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Float</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/grid.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Grid</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/overlayscrollbars.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Overlayscrollbars</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/position.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Position</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/spacing.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spacing</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/sizing.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sizing</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/stretched-link.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stretched
                                        link</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/text-truncation.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Text
                                        truncation</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/typography.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Typography</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/vertical-align.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical
                                        align</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/utilities/visibility.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Visibility</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link" href="widgets.html" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-poll fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="poll" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM160 368c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16V240c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v128zm96 0c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16V144c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v224zm96 0c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16v-64c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v64z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-poll"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Widgets</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#multi-level" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-layer-group fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="layer-group" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M12.41 148.02l232.94 105.67c6.8 3.09 14.49 3.09 21.29 0l232.94-105.67c16.55-7.51 16.55-32.52 0-40.03L266.65 2.31a25.607 25.607 0 0 0-21.29 0L12.41 107.98c-16.55 7.51-16.55 32.53 0 40.04zm487.18 88.28l-58.09-26.33-161.64 73.27c-7.56 3.43-15.59 5.17-23.86 5.17s-16.29-1.74-23.86-5.17L70.51 209.97l-58.1 26.33c-16.55 7.5-16.55 32.5 0 40l232.94 105.59c6.8 3.08 14.49 3.08 21.29 0L499.59 276.3c16.55-7.5 16.55-32.5 0-40zm0 127.8l-57.87-26.23-161.86 73.37c-7.56 3.43-15.59 5.17-23.86 5.17s-16.29-1.74-23.86-5.17L70.29 337.87 12.41 364.1c-16.55 7.5-16.55 32.5 0 40l232.94 105.59c6.8 3.08 14.49 3.08 21.29 0L499.59 404.1c16.55-7.5 16.55-32.5 0-40z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-layer-group"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Multi level</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="multi-level">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level two</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="level-two">
                                <li class="nav-item"><a class="nav-link" href="#!.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item
                                                1</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#!.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item
                                                2</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-three"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level
                                        three</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="level-three">
                                <li class="nav-item"><a class="nav-link" href="#!.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item
                                                3</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-4"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-three">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item
                                                4</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                    <ul class="nav collapse false" id="item-4">
                                        <li class="nav-item"><a class="nav-link" href="#!.html" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Item 5</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#!.html" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Item 6</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level
                                        four</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="level-four">
                                <li class="nav-item"><a class="nav-link" href="#!.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item
                                                6</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-7"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-four">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item
                                                7</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                    <ul class="nav collapse false" id="item-7">
                                        <li class="nav-item"><a class="nav-link" href="#!.html" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Item 8</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-9"
                                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="item-7">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Item 9</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="item-9">
                                                <li class="nav-item"><a class="nav-link" href="#!.html"
                                                        aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text ps-1">Item 10</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#!.html"
                                                        aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text ps-1">Item 11</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Documentation
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div>
                    <!-- parent pages--><a class="nav-link" href="documentation/getting-started.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-rocket fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="rocket" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M505.12019,19.09375c-1.18945-5.53125-6.65819-11-12.207-12.1875C460.716,0,435.507,0,410.40747,0,307.17523,0,245.26909,55.20312,199.05238,128H94.83772c-16.34763.01562-35.55658,11.875-42.88664,26.48438L2.51562,253.29688A28.4,28.4,0,0,0,0,264a24.00867,24.00867,0,0,0,24.00582,24H127.81618l-22.47457,22.46875c-11.36521,11.36133-12.99607,32.25781,0,45.25L156.24582,406.625c11.15623,11.1875,32.15619,13.15625,45.27726,0l22.47457-22.46875V488a24.00867,24.00867,0,0,0,24.00581,24,28.55934,28.55934,0,0,0,10.707-2.51562l98.72834-49.39063c14.62888-7.29687,26.50776-26.5,26.50776-42.85937V312.79688c72.59753-46.3125,128.03493-108.40626,128.03493-211.09376C512.07526,76.5,512.07526,51.29688,505.12019,19.09375ZM384.04033,168A40,40,0,1,1,424.05,128,40.02322,40.02322,0,0,1,384.04033,168Z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-rocket"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Getting started</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#customization" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-wrench fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="wrench" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M507.73 109.1c-2.24-9.03-13.54-12.09-20.12-5.51l-74.36 74.36-67.88-11.31-11.31-67.88 74.36-74.36c6.62-6.62 3.43-17.9-5.66-20.16-47.38-11.74-99.55.91-136.58 37.93-39.64 39.64-50.55 97.1-34.05 147.2L18.74 402.76c-24.99 24.99-24.99 65.51 0 90.5 24.99 24.99 65.51 24.99 90.5 0l213.21-213.21c50.12 16.71 107.47 5.68 147.37-34.22 37.07-37.07 49.7-89.32 37.91-136.73zM64 472c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-wrench"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Customization</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="customization">
                        <li class="nav-item"><a class="nav-link" href="documentation/customization/configuration.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Configuration</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="documentation/customization/styling.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Styling</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="documentation/customization/dark-mode.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dark
                                        mode</span><span class="badge rounded-pill ms-2 badge-soft-success">New</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="documentation/customization/plugin.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plugin</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link" href="documentation/gulp.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-gulp fa-w-8" aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="gulp" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M209.8 391.1l-14.1 24.6-4.6 80.2c0 8.9-28.3 16.1-63.1 16.1s-63.1-7.2-63.1-16.1l-5.8-79.4-14.9-25.4c41.2 17.3 126 16.7 165.6 0zm-196-253.3l13.6 125.5c5.9-20 20.8-47 40-55.2 6.3-2.7 12.7-2.7 18.7.9 5.2 3 9.6 9.3 10.1 11.8 1.2 6.5-2 9.1-4.5 9.1-3 0-5.3-4.6-6.8-7.3-4.1-7.3-10.3-7.6-16.9-2.8-6.9 5-12.9 13.4-17.1 20.7-5.1 8.8-9.4 18.5-12 28.2-1.5 5.6-2.9 14.6-.6 19.9 1 2.2 2.5 3.6 4.9 3.6 5 0 12.3-6.6 15.8-10.1 4.5-4.5 10.3-11.5 12.5-16l5.2-15.5c2.6-6.8 9.9-5.6 9.9 0 0 10.2-3.7 13.6-10 34.7-5.8 19.5-7.6 25.8-7.6 25.8-.7 2.8-3.4 7.5-6.3 7.5-1.2 0-2.1-.4-2.6-1.2-1-1.4-.9-5.3-.8-6.3.2-3.2 6.3-22.2 7.3-25.2-2 2.2-4.1 4.4-6.4 6.6-5.4 5.1-14.1 11.8-21.5 11.8-3.4 0-5.6-.9-7.7-2.4l7.6 79.6c2 5 39.2 17.1 88.2 17.1 49.1 0 86.3-12.2 88.2-17.1l10.9-94.6c-5.7 5.2-12.3 11.6-19.6 14.8-5.4 2.3-17.4 3.8-17.4-5.7 0-5.2 9.1-14.8 14.4-21.5 1.4-1.7 4.7-5.9 4.7-8.1 0-2.9-6-2.2-11.7 2.5-3.2 2.7-6.2 6.3-8.7 9.7-4.3 6-6.6 11.2-8.5 15.5-6.2 14.2-4.1 8.6-9.1 22-5 13.3-4.2 11.8-5.2 14-.9 1.9-2.2 3.5-4 4.5-1.9 1-4.5.9-6.1-.3-.9-.6-1.3-1.9-1.3-3.7 0-.9.1-1.8.3-2.7 1.5-6.1 7.8-18.1 15-34.3 1.6-3.7 1-2.6.8-2.3-6.2 6-10.9 8.9-14.4 10.5-5.8 2.6-13 2.6-14.5-4.1-.1-.4-.1-.8-.2-1.2-11.8 9.2-24.3 11.7-20-8.1-4.6 8.2-12.6 14.9-22.4 14.9-4.1 0-7.1-1.4-8.6-5.1-2.3-5.5 1.3-14.9 4.6-23.8 1.7-4.5 4-9.9 7.1-16.2 1.6-3.4 4.2-5.4 7.6-4.5.6.2 1.1.4 1.6.7 2.6 1.8 1.6 4.5.3 7.2-3.8 7.5-7.1 13-9.3 20.8-.9 3.3-2 9 1.5 9 2.4 0 4.7-.8 6.9-2.4 4.6-3.4 8.3-8.5 11.1-13.5 2-3.6 4.4-8.3 5.6-12.3.5-1.7 1.1-3.3 1.8-4.8 1.1-2.5 2.6-5.1 5.2-5.1 1.3 0 2.4.5 3.2 1.5 1.7 2.2 1.3 4.5.4 6.9-2 5.6-4.7 10.6-6.9 16.7-1.3 3.5-2.7 8-2.7 11.7 0 3.4 3.7 2.6 6.8 1.2 2.4-1.1 4.8-2.8 6.8-4.5 1.2-4.9.9-3.8 26.4-68.2 1.3-3.3 3.7-4.7 6.1-4.7 1.2 0 2.2.4 3.2 1.1 1.7 1.3 1.7 4.1 1 6.2-.7 1.9-.6 1.3-4.5 10.5-5.2 12.1-8.6 20.8-13.2 31.9-1.9 4.6-7.7 18.9-8.7 22.3-.6 2.2-1.3 5.8 1 5.8 5.4 0 19.3-13.1 23.1-17 .2-.3.5-.4.9-.6.6-1.9 1.2-3.7 1.7-5.5 1.4-3.8 2.7-8.2 5.3-11.3.8-1 1.7-1.6 2.7-1.6 2.8 0 4.2 1.2 4.2 4 0 1.1-.7 5.1-1.1 6.2 1.4-1.5 2.9-3 4.5-4.5 15-13.9 25.7-6.8 25.7.2 0 7.4-8.9 17.7-13.8 23.4-1.6 1.9-4.9 5.4-5 6.4 0 1.3.9 1.8 2.2 1.8 2 0 6.4-3.5 8-4.7 5-3.9 11.8-9.9 16.6-14.1l14.8-136.8c-30.5 17.1-197.6 17.2-228.3.2zm229.7-8.5c0 21-231.2 21-231.2 0 0-8.8 51.8-15.9 115.6-15.9 9 0 17.8.1 26.3.4l12.6-48.7L228.1.6c1.4-1.4 5.8-.2 9.9 3.5s6.6 7.9 5.3 9.3l-.1.1L185.9 74l-10 40.7c39.9 2.6 67.6 8.1 67.6 14.6zm-69.4 4.6c0-.8-.9-1.5-2.5-2.1l-.2.8c0 1.3-5 2.4-11.1 2.4s-11.1-1.1-11.1-2.4c0-.1 0-.2.1-.3l.2-.7c-1.8.6-3 1.4-3 2.3 0 2.1 6.2 3.7 13.7 3.7 7.7.1 13.9-1.6 13.9-3.7z">
                                    </path>
                                </svg>
                                <!-- <span class="fab fa-gulp"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Gulp</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link" href="documentation/design-file.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-palette fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="palette" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M204.3 5C104.9 24.4 24.8 104.3 5.2 203.4c-37 187 131.7 326.4 258.8 306.7 41.2-6.4 61.4-54.6 42.5-91.7-23.1-45.4 9.9-98.4 60.9-98.4h79.7c35.8 0 64.8-29.6 64.9-65.3C511.5 97.1 368.1-26.9 204.3 5zM96 320c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm32-128c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128-64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-palette"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Design file</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link" href="changelog.html" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-code-branch fa-w-12" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="code-branch" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M384 144c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 36.4 24.3 67.1 57.5 76.8-.6 16.1-4.2 28.5-11 36.9-15.4 19.2-49.3 22.4-85.2 25.7-28.2 2.6-57.4 5.4-81.3 16.9v-144c32.5-10.2 56-40.5 56-76.3 0-44.2-35.8-80-80-80S0 35.8 0 80c0 35.8 23.5 66.1 56 76.3v199.3C23.5 365.9 0 396.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-34-21.2-63.1-51.2-74.6 3.1-5.2 7.8-9.8 14.9-13.4 16.2-8.2 40.4-10.4 66.1-12.8 42.2-3.9 90-8.4 118.2-43.4 14-17.4 21.1-39.8 21.6-67.9 31.6-10.8 54.4-40.7 54.4-75.9zM80 64c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16 7.2-16 16-16zm0 384c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zm224-320c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16 7.2-16 16-16z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-code-branch"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Changelog</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
