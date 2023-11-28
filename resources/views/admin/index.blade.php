@extends('admin.layouts.master')
@section('content')
@section('title', 'Analytics - Dashboard')
<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->

@include('admin.layouts.header')

<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->

    @include('admin.layouts.sidebar')

    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">

                @yield('imageupload')
                @yield('sliderAdmin')
                @yield('blog')
                @yield('employees')
                @yield('sliderAdminUpdate')
                @yield('showSlider')
                @yield('video')
                @yield('VideoAdminUpdate')
                @yield('productgallery')
                @yield('GalleryAdminUpdate')
                @yield('AdminUpdateInfocards')
                @yield('Message Register')
                @yield('marketAdmin')
                @yield('marketproductAdmin')

            </div>
        </div>

        <!--footer-->
        @include('admin.layouts.footer')
    </div>
    <!--  END CONTENT AREA  -->


</div>
<!-- END MAIN CONTAINER -->
@endsection
