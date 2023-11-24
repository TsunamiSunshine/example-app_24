@extends('layouts.master')
@section('content')
@section('title', 'Home')


@include('components.slider')
<!-- /.revolution -->

<div class="light-wrapper">
    <div class="container inner">
        <div class="headline text-center">
            <h2>Hello! Welcome to Hygge</h2>
            <p class="lead animated-text letters type"> <span>a multipurpose HTML5 template which is suitable for</span>
                <span class="animated-text-wrapper waiting"> <b class="is-visible">creative agencies</b> <b>personal
                        blogs</b> <b>digital studios</b> <b>or any business owners</b> </span> </p>
        </div>
        <div class="divide30"></div>
        <div class="row services">
            <div class="col-sm-4">
                <div class="service text-center">
                    <div class="icon"> <img src="style/images/icons/lulu-web-browser.png" alt="" /> </div>
                    <h4>Responsive Layout</h4>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus
                        commodo.</p>
                </div>
                <!--/.service -->
            </div>
            <!--/column -->
            <div class="col-sm-4">
                <div class="service text-center">
                    <div class="icon"> <img src="style/images/icons/lulu-paint-palette.png" alt="" /> </div>
                    <h4>Color Palette</h4>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus
                        commodo.</p>
                </div>
                <!--/.service -->
            </div>
            <!--/column -->
            <div class="col-sm-4">
                <div class="service text-center">
                    <div class="icon"> <img src="style/images/icons/lulu-coding.png" alt="" /> </div>
                    <h4>Clear Coding</h4>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus
                        commodo.</p>
                </div>
                <!--/.service -->
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->
        <div class="divide30"></div>
        <div class="row services">
            <div class="col-sm-4">
                <div class="service text-center">
                    <div class="icon"> <img src="style/images/icons/lulu-chats.png" alt="" /> </div>
                    <h4>Personal Support</h4>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus
                        commodo.</p>
                </div>
                <!--/.service -->
            </div>
            <!--/column -->
            <div class="col-sm-4">
                <div class="service text-center">
                    <div class="icon"> <img src="style/images/icons/lulu-tv.png" alt="" /> </div>
                    <h4>Video Support</h4>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus
                        commodo.</p>
                </div>
                <!--/.service -->
            </div>
            <!--/column -->
            <div class="col-sm-4">
                <div class="service text-center">
                    <div class="icon"> <img src="style/images/icons/lulu-clipboard.png" alt="" /> </div>
                    <h4>Extensive Documentation</h4>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus
                        commodo.</p>
                </div>
                <!--/.service -->
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /.light-wrapper -->

<div class="inverse-wrapper inner bp0">
    <div class="container">
        <div class="thin text-center">
            <div class="headline text-center">
                <h2>Rich layouts & unlimited combinations</h2>
                <p class="lead">Create a unique website easily with the help of tons of features</p>
            </div>
            <!-- /.headline -->
            <div class="divide30"></div>
            <figure>
                <img src="style/images/art/hygge.png" alt="" />
            </figure>
        </div>
        <!-- /.thin -->

    </div>
    <!-- /.container -->
</div>
<!-- /.inverse-wrapper -->

<div class="light-wrapper">
    <div class="container inner">
        <div class="section-title text-center">
            <h3>The Product Gallery</h3>
            <p class="lead">awesome products prepared with creative ideas and great design</p>
        </div>
        @include('components.cbp-panel')
        <!--/.cbp-panel -->
    </div>
    <!-- /.container -->
</div>
<!-- /.light-wrapper -->


@include('components.videowrap')

<!-- /.inverse-wrapper -->

@include('components.timeblog')
<!-- /.light-wrapper -->

@include('components.about')
<!-- /.white-wrapper -->

<div class="light-wrapper">
    <div class="container inner">
        <div class="section-title text-center">
            <h3>Process Model</h3>
            <p class="lead">our process on creating awesome projects</p>
        </div>
        <div class="thin3">
            <div class="row circle-wrapper">
                <div class="col-sm-6 col-md-3">
                    <div class="circle blue-bg">
                        <div class="text">1. Envisioning</div>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-sm-6 col-md-3">
                    <div class="circle red-bg">
                        <div class="text">2. Planning</div>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-sm-6 col-md-3">
                    <div class="circle green-bg">
                        <div class="text">3. Development</div>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-sm-6 col-md-3">
                    <div class="circle yellow-bg">
                        <div class="text">4. Stabilization</div>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
            <div class="divide30"></div>
            <p class="text-center">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque
                ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh. Fusce dapibus, tellus ac cursus
                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras justo odio,
                dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                dolor auctor.</p>
        </div>
        <!--/.thin -->
    </div>
    <!--/.container -->
</div>
<!-- /.light-wrapper -->

<div class="light-wrapper">
    <div class="container inner">
        <div class="section-title text-center">
            <h3>Meet Our Team</h3>
        </div>
        <div class="row grid-view">
            <div class="col-sm-3 text-center">
                <figure><img src="style/images/art/t1.jpg" alt="" /></figure>
                <h4 class="post-title">Nikolas Brooten</h4>
                <div class="meta">Sales Manager</div>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo.</p>
                <ul class="social">
                    <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-s-gplus"></i></a></li>
                </ul>
            </div>
            <!-- /column -->
            <div class="col-sm-3 text-center">
                <figure><img src="style/images/art/t2.jpg" alt="" /></figure>
                <h4 class="post-title">Coriss Ambady</h4>
                <div class="meta">Marketing Specialist</div>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros sed posuere quam.</p>
                <ul class="social">
                    <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- /column -->
            <div class="col-sm-3 text-center">
                <figure><img src="style/images/art/t3.jpg" alt="" /></figure>
                <h4 class="post-title">Barclay Widerski</h4>
                <div class="meta">Computer Engineer</div>
                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis.</p>
                <ul class="social">
                    <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-s-github"></i></a></li>
                    <li><a href="#"><i class="icon-s-gplus"></i></a></li>
                </ul>
            </div>
            <!-- /column -->
            <div class="col-sm-3 text-center">
                <figure><img src="style/images/art/t4.jpg" alt="" /></figure>
                <h4 class="post-title">Elsie Spear</h4>
                <div class="meta">Strategy Director</div>
                <p>Maecenas faucibus mollis interdum. Aenean eu leo quam ornare sem lacinia.</p>
                <ul class="social">
                    <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!--/.container -->
</div>
<!-- /.light-wrapper -->
@endsection
