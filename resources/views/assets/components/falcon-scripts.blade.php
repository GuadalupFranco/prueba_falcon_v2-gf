<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="/vendors/popper/popper.min.js"></script>
<script src="/vendors/bootstrap/bootstrap.min.js"></script>
<script src="/vendors/anchorjs/anchor.min.js"></script>
<script src="/vendors/is/is.min.js"></script>
<script src="/vendors/echarts/echarts.min.js"></script>
<script src="/vendors/fontawesome/all.min.js"></script>   {{-- Se va ??? --}}
<script src="/vendors/lodash/lodash.min.js"></script>
<script src="https:/polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="/vendors/list.js/list.min.js"></script>
<script src="/assets/js/theme.js"></script>
<script src="/assets/sweetalert/theme.js"></script>
@yield('extra-scripts')
{{-- PregĂșntarle a Pechir por estos Scripts
    <script src="/vendors/echarts/echarts.min.js"></script> -> Se usa ???
    <script src="/vendors/fontawesome/all.min.js"></script>
    <script src="/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/vendors/list.js/list.min.js"></script> -> Se usa ???
    <script src="/assets/js/config.js"></script>
    <script src="/assets/js/theme.js"></script>
    @yield('extra-scripts')
--}}