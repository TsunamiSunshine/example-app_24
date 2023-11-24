<?php use App\Models\Slider; ?>



<div class="tp-fullscreen-container revolution" style="background-color: grey">
    <div class="tp-fullscreen">
        <ul>@foreach (Slider::all() as $item)
            <li data-transition="fade"> <img src="{{ URL::asset('storage/'.$item->image) }}" alt=""
                    data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                <div class="tp-caption large sfb text-center" data-x="center" data-y="263" data-speed="900"
                    data-start="800" data-easing="Sine.easeOut">{{$item->clarge}}</div>
                <div class="tp-caption medium sfb text-center" data-x="center" data-y="348" data-speed="900"
                    data-start="1500" data-easing="Sine.easeOut">{{$item->cmedium}}</div>
                <div class="tp-caption sfb" data-x="center" data-y="420" data-speed="900" data-start="2200"
                    data-easing="Sine.easeOut" data-endspeed="100"><a href="#"
                        class="btn btn-large btn-border">Purchase Now</a></div>
            </li>
            @endforeach
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
    <!-- /.tp-fullscreen-container -->
</div>


