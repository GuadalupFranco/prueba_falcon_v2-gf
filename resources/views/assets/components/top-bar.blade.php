<script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
}
</script>

<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3 collapsed" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false"
        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="/">
        <div class="d-flex align-items-center"><img class="me-2" src="/UPQ-logo.svg"
                alt="" width="40"><span class="font-sans-serif">SIIUPQ</span></div>
    </a>
    <div class="navbar-collapse scrollbar collapse" id="navbarStandard" style="">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                            href="index.html">Default</a><a class="dropdown-item link-600 fw-medium"
                            href="dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium"
                            href="dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium"
                            href="dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium"
                            href="dashboard/project-management.html">Management</a><a
                            class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a></div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="">
                            <div class="row">
                                <div class="col-6 col-md-5">
                                    <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/calendar.html">Calendar</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="app/chat.html">Chat</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="app/kanban.html">Kanban</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Email</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/email/inbox.html">Inbox</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/email/email-detail.html">Email detail</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/email/compose.html">Compose</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Events</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/events/create-an-event.html">Create an event</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/events/event-detail.html">Event detail</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/events/event-list.html">Event list</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Social</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/feed.html">Feed</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/activity-log.html">Activity log</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/notifications.html">Notifications</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/followers.html">Followers</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/product/product-list.html">Product list</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/product/product-grid.html">Product grid</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/product/product-details.html">Product details</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/orders/order-list.html">Order list</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/orders/order-details.html">Order details</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/customers.html">Customers</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/customer-details.html">Customer details</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/shopping-cart.html">Shopping cart</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/checkout.html">Checkout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/billing.html">Billing</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/invoice.html">Invoice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                    <div class="card navbar-card-pages shadow-none dark__bg-1000">
                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="">
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/login.html">Login</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/logout.html">Logout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/register.html">Register</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/forgot-password.html">Forgot
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/confirm-mail.html">Confirm mail</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/reset-password.html">Reset password</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/lock-screen.html">Lock screen</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/login.html">Login</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/logout.html">Logout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/register.html">Register</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/forgot-password.html">Forgot password</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/confirm-mail.html">Confirm mail</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/reset-password.html">Reset password</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/lock-screen.html">Lock screen</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/login.html">Login</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/logout.html">Logout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/register.html">Register</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/forgot-password.html">Forgot password</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/confirm-mail.html">Confirm mail</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/reset-password.html">Reset password</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/lock-screen.html">Lock screen</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/wizard.html">Wizard</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="#authentication-modal"
                                            data-bs-toggle="modal">Modal</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/miscellaneous/associations.html">Associations</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/miscellaneous/invite-people.html">Invite people</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">User</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/user/profile.html">Profile</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/user/settings.html">Settings</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/pricing/pricing-default.html">Pricing default</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/pricing/pricing-alt.html">Pricing alt</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/errors/404.html">404</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/errors/500.html">500</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Others</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/starter.html">Starter</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/landing.html">Landing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                    <div class="card navbar-card-components shadow-none dark__bg-1000">
                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="">
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Components</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/accordion.html">Accordion</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/alerts.html">Alerts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/anchor.html">Anchor</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/animated-icons.html">Animated icons</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/background.html">Background</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/badges.html">Badges</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/breadcrumbs.html">Breadcrumbs</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/buttons.html">Buttons</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/calendar.html">Calendar</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/cards.html">Cards</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/carousel/bootstrap.html">Bootstrap carousel</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/carousel/swiper.html">Swiper</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column mt-md-4 pt-md-1"><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/collapse.html">Collapse</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/cookie-notice.html">Cookie notice</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/countup.html">Countup</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/draggable.html">Draggable</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/dropdowns.html">Dropdowns</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/list-group.html">List group</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/modals.html">Modals</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/navs.html">Navs</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/vertical-navbar.html">Vertical
                                            navbar</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/top-navbar.html">Top navbar</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/combo-navbar.html">Combo navbar</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/offcanvas.html">Offcanvas</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/avatar.html">Avatar</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/images.html">Images</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/figures.html">Figures</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/hoverbox.html">Hoverbox</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/lightbox.html">Lightbox</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/progress-bar.html">Progress bar</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/placeholder.html">Placeholder</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pagination.html">Pagination</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/popovers.html">Popovers</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/scrollspy.html">Scrollspy</a></div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/search.html">Search</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/spinners.html">Spinners</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/timeline.html">Timeline<span
                                                class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/toasts.html">Toasts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/tooltips.html">Tooltips</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/treeview.html">Treeview</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/typed-text.html">Typed text</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/videos/embed.html">Embed</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/videos/plyr.html">Plyr</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/form-control.html">Form control</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/input-group.html">Input group</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/select.html">Select</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/checks.html">Checks</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/range.html">Range</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/layout.html">Layout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/advance-select.html">Advance select</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/date-picker.html">Date picker</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/editor.html">Editor</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/emoji-button.html">Emoji button</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/file-uploader.html">File uploader</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/rating.html">Rating</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/floating-labels.html">Floating labels</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/wizard.html">Wizard</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/validation.html">Validation</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/tables/basic-tables.html">Basic tables</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/tables/advance-tables.html">Advance tables</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/tables/bulk-select.html">Bulk select</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/chartjs.html">Chartjs</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/line-charts.html">Line charts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/bar-charts.html">Bar charts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/candlestick-charts.html">Candlestick
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/geo-map.html">Geo map</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/scatter-charts.html">Scatter charts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/pie-charts.html">Pie charts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/radar-charts.html">Radar charts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/how-to-use.html">How to use</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/borders.html">Borders</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/clearfix.html">Clearfix</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/colors.html">Colors</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/colored-links.html">Colored links</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/display.html">Display</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/flex.html">Flex</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/float.html">Float</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/grid.html">Grid</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/overlayscrollbars.html">Overlayscrollbars</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/position.html">Position</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/spacing.html">Spacing</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/sizing.html">Sizing</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/stretched-link.html">Stretched link</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/text-truncation.html">Text truncation</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/typography.html">Typography</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column pt-xxl-1">
                                        <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/font-awesome.html">Font awesome</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/bootstrap-icons.html">Bootstrap icons</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/feather.html">Feather</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/material-icons.html">Material icons</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/maps/google-map.html">Google map</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/maps/leaflet-map.html">Leaflet map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="documentations">Documentation</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                            href="documentation/getting-started.html">Getting started</a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/configuration.html">Configuration</a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/styling.html">Styling</a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/dark-mode.html">Dark mode<span
                                class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/plugin.html">Plugin</a><a
                            class="dropdown-item link-600 fw-medium" href="documentation/faq.html">Faq</a><a
                            class="dropdown-item link-600 fw-medium" href="documentation/gulp.html">Gulp</a><a
                            class="dropdown-item link-600 fw-medium" href="documentation/design-file.html">Design
                            file</a><a class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2">
                <input class="form-check-input ms-0 theme-control-toggle-input" id="mode-fluid" type="checkbox" data-theme-control="isFluid">
                {{--<input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark">--}}
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="mode-fluid"
                    data-bs-toggle="tooltip" data-bs-placement="left" title=""
                    data-bs-original-title="Comprimir pantalla" aria-label="Cambiar a modo claro">
                    <span class="fas fa-compress-alt fa-w-16 fs-0"></span>
                </label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="mode-fluid"
                    data-bs-toggle="tooltip" data-bs-placement="left" title=""
                    data-bs-original-title="Expandir pantalla" aria-label="Cambiar a modo oscuro">
                    <span class="fas fa-expand-alt fa-w-16 fs-0"></span>
                </label>
            </div>
        </li>
        <!-- Botón para el modo claro/oscuro-->
        <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2">
                <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                    data-theme-control="theme" value="dark">
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" title=""
                    data-bs-original-title="Cambiar a modo claro" aria-label="Cambiar a modo claro"><svg
                        class="svg-inline--fa fa-sun fa-w-16 fs-0" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="sun" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z">
                        </path>
                    </svg><!-- <span class="fas fa-sun fs-0"></span> Font Awesome fontawesome.com -->
                </label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" title=""
                    data-bs-original-title="Cambiar a modo oscuro" aria-label="Cambiar a modo oscuro"><svg
                        class="svg-inline--fa fa-moon fa-w-16 fs-0" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="moon" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z">
                        </path>
                    </svg><!-- <span class="fas fa-moon fs-0"></span> Font Awesome fontawesome.com -->
                </label>
            </div>
        </li>
        <!-- Botón para el modo claro/oscuro -->

        <li class="nav-item dropdown">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><svg class="svg-inline--fa fa-bell fa-w-14" data-fa-transform="shrink-6"
                    style="font-size: 33px;transform-origin: 0.4375em 0.5em;" aria-hidden="true" focusable="false"
                    data-prefix="fas" data-icon="bell" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512" data-fa-i2svg="">
                    <g transform="translate(224 256)">
                        <g transform="translate(0, 0)  scale(0.625, 0.625)  rotate(0 0 0)">
                            <path fill="currentColor"
                                d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"
                                transform="translate(-224 -256)"></path>
                        </g>
                    </g>
                </svg>
                <!-- <span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span> Font Awesome fontawesome.com --></a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification"
                aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h6 class="card-header-title mb-0">Notificaciones</h6>
                            </div>
                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Marcar como leídos</a></div>
                        </div>
                    </div>
                    <div class="scrollbar-overlay os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"
                        style="max-height:19rem">
                        <div class="os-resize-observer-host observed">
                            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                        </div>
                        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                            <div class="os-resize-observer"></div>
                        </div>
                        <div class="os-content-glue" style="margin: 0px;"></div>
                        <div class="os-padding">
                            <div class="os-viewport os-viewport-native-scrollbars-invisible">
                                <div class="os-content" style="padding: 0px; height: 100%; width: 100%;">
                                    <div class="list-group list-group-flush fw-normal fs--1">
                                        <div class="list-group-title border-bottom">NEW</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle" src="/assets/img/team/1-thumb.png"
                                                            alt="">

                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your comment
                                                        : "Hello world 😍"</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">💬</span>Just now</span>

                                                </div>
                                            </a>

                                        </div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                        <strong>Mia Khalifa's</strong> status</p>
                                                    <span class="notification-time"><svg
                                                            class="svg-inline--fa fa-gratipay fa-w-16 me-2 text-danger"
                                                            aria-hidden="true" focusable="false" data-prefix="fab"
                                                            data-icon="gratipay" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm114.6 226.4l-113 152.7-112.7-152.7c-8.7-11.9-19.1-50.4 13.6-72 28.1-18.1 54.6-4.2 68.5 11.9 15.9 17.9 46.6 16.9 61.7 0 13.9-16.1 40.4-30 68.1-11.9 32.9 21.6 22.6 60 13.8 72z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="me-2 fab fa-gratipay text-danger"></span> Font Awesome fontawesome.com -->9hr</span>

                                                </div>
                                            </a>

                                        </div>
                                        <div class="list-group-title border-bottom">EARLIER</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle"
                                                            src="/assets/img/icons/weather-sm.jpg" alt="">

                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1">The forecast today shows a low of 20℃ in California.
                                                        See today's weather.</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">🌤️</span>1d</span>

                                                </div>
                                            </a>

                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle" src="/assets/img/logos/oxford.png"
                                                            alt="">

                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>University of Oxford</strong> created an
                                                        event : "Causal Inference Hilary 2019"</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">✌️</span>1w</span>

                                                </div>
                                            </a>

                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle" src="/assets/img/team/10.jpg" alt="">

                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>James Cameron</strong> invited to join the
                                                        group: United Nations International Children's Fund</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">🙋&zwj;</span>2d</span>

                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                            <div class="os-scrollbar-track os-scrollbar-track-off">
                                <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                            </div>
                        </div>
                        <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                            <div class="os-scrollbar-track os-scrollbar-track-off">
                                <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                            </div>
                        </div>
                        <div class="os-scrollbar-corner"></div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                            href="app/social/notifications.html">Ver todo</a></div>
                </div>
            </div>

        </li>
        {{--@php(dd(Auth::all()))--}}
        <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        @if(Auth::user()->profile_photo_path)
                            <img src="/storage/{{ Auth::user()->profile_photo_path }}" class="rounded-circle" height="100" width="100">
                        @else
                            <img src="{{ Auth::user()->profile_photo_url }}" class="rounded-circle" height="100" width="100">
                        @endif
                    @else
                        {{ Auth::user()->name }}

                        <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    @endif

                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <!-- Account Management -->
                    <h6 class="dropdown-header small text-muted">
                        {{ __('Administrar cuenta') }}
                    </h6>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Configuración') }}
                    </x-jet-dropdown-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                    @endif

                    <hr class="dropdown-divider">

                    <!-- Authentication -->
                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </x-jet-dropdown-link>
                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
    </ul>
</nav>
