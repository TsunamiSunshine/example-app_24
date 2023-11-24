@extends('layouts.master')
@section('content')

@foreach ($blog as $item)
<div class="col-sm-6 timeline-item">
    <div class="arrow"></div>
    <div class="post-content">
        <div class="row">
            <div class="col-sm-3 col-md-5">
                <figure><a href="#">
                        <div class="text-overlay">
                            <div class="info"><span>Read More</span></div>
                        </div>
                        <img src={{ URL::asset('storage/'.$item->image) }} alt="" />
                    </a></figure>
            </div>
            <!-- /column -->
            <div class="col-sm-9 col-md-7">
                <h4 class="post-title"><a href="#">{{$item->name}}</a></h4>
                <div class="meta"><span class="date"><a href="#" class="link-effect">30 March
                            2015</a></span><span class="category"><a href="#"
                            class="link-effect">Journal</a></span><span class="comments"><a
                            href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span>
                </div>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus
                    vel augue laoreet rutrum faucibus.</p>
                <a href="#" class="more link-effect">Read More »</a>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.post-content -->
</div>
@endforeach
@endsection

