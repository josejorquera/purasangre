<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Intranet PuraSangre</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/line-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('css/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

</head>
<body>
    <div id="app">
        
        @auth
            @include('layouts.header')
        @endauth

        <div @auth class="content-wrapper" @endauth   style="min-height:auto !important" >
          <div class="py-4 page-content">
              @yield('content')
          </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.rut.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>

    <script type="text/javascript">
        
        $(function(){

            // SIDEBAR ACTIVATE METISMENU
            $(".metismenu").metisMenu();
            

            // SIDEBAR TOGGLE ACTION
            $('.js-sidebar-toggler').click(function() {
                if( $('body').hasClass('drawer-sidebar') ) {
                    $('.page-sidebar').backdrop();
                } else {
                    $('.page-sidebar').toggleClass('opened');
                }
                $(this).toggleClass('active');
            });

            // LAYOUT STYLE
            $("[name='layout-style']").change(function(){
                if(+$(this).val()) $('body').addClass('boxed-layout');
                else $('body').removeClass('boxed-layout');
            });

            // drawer sidebar
            $('#_drawerSidebar').change(function(){
                $('.page-sidebar').removeClass('opened');
                if( $(this).is(':checked') ) {
                    $('body').addClass('drawer-sidebar');
                } else {
                    $('body').removeClass('drawer-sidebar');
                }
            });

            // THEMES COLOR CHANGE
            $('.color-skin-box input:radio').change(function() {
                var val = $(this).val();
                if(val != 'default') {
                    if(! $('#theme-style').length ) {
                        $('head').append( "<link href='assets/css/themes/"+val+".css' rel='stylesheet' id='theme-style' >" );
                    } else $('#theme-style').attr('href', 'assets/css/themes/'+val+'.css');
                } else $('#theme-style').remove();
            });

        });

    </script>

    @yield('scripts')



</body>
</html>
