<!DOCTYPE html>
<html dir="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    {{--<!-- Bootstrap 3.3.7 -->--}}
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/skin-blue.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/font-awesome-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/AdminLTE-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/rtl.css') }}">

        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>


    <style>
        .mr-2{
            margin-right: 5px;
        }

    </style>
    {{--<!-- jQuery 3 -->--}}
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>

    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/noty/noty.css') }}">
    <script src="{{ asset('backend/assets/plugins/noty/noty.min.js') }}"></script>

    {{--<!-- iCheck -->--}}
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/icheck/all.css') }}">

    {{--html in  ie--}}

</head>
<body class="hold-transition skin-blue sidebar-mini">
@include('Backend.layouts.dashboard.header')
@include('Backend.layouts.dashboard._aside')
@yield('content')
@include('Backend.partials._session')


    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016
            <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

</div><!-- end of wrapper -->

{{--<!-- Bootstrap 3.3.7 -->--}}
<script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>

{{--icheck--}}
<script src="{{ asset('backend/assets/plugins/icheck/icheck.min.js') }}"></script>

{{--<!-- FastClick -->--}}
<script src="{{ asset('backend/assets/js/fastclick.js') }}"></script>

{{--<!-- AdminLTE App -->--}}
<script src="{{ asset('backend/assets/js/adminlte.min.js') }}"></script>

{{--ckeditor standard--}}
<script src="{{ asset('backend/assets/plugins/ckeditor/ckeditor.js') }}"></script>

{{--jquery number--}}
<script src="{{ asset('backend/assets/js/jquery.number.min.js') }}"></script>

{{--custom js--}}
<script src="{{ asset('backend/assets/js/custom/image_preview.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/order.js') }}"></script>

<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree();

        //icheck
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });

        //delete
        $('.delete').click(function (e) {

            var that = $(this)

            e.preventDefault();

            var n = new Noty({
                text: "@lang('site.confirm_delete')",
                type: "warning",
                killer: true,
                buttons: [
                    Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),

                    Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });

            n.show();

        });//end of delete

        // // image preview
        // $(".image").change(function () {
        //
        //     if (this.files && this.files[0]) {
        //         var reader = new FileReader();
        //
        //         reader.onload = function (e) {
        //             $('.image-preview').attr('src', e.target.result);
        //         }
        //
        //         reader.readAsDataURL(this.files[0]);
        //     }
        //
        // });

        CKEDITOR.config.language =  "{{ app()->getLocale() }}";

    });//end of ready


</script>
</body>
</html>
