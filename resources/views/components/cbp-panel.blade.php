<div class="light-wrapper">
    <div class="container inner">
        <div class="cbp-panel">
            <div id="filters-container" class="cbp-filter-container text-center">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
                @foreach ($category as $categories)
                    <div data-filter=".{{$categories['category_id']}}" class="cbp-filter-item cbp-filter-item">{{ $categories['name_category'] }}
                    </div>
                    @endforeach
        </div>
        <div id="grid-container" class="cbp">
            @foreach ($infocards as $card)
            <div class="cbp-item {{$card->card_id}}">
                        <a href=""class="cbp-caption cbp-singlePageInline">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ URL::asset('storage/' . $card->image) }}" alt="" />
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">{{ $card->clarge }}</div>
                                        <div class="cbp-l-caption-desc">{{ $card->cmedium }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
        </div>
    </div>
    <!--/.cbp -->
    <div class="divide30"></div>
    <div class="text-center">
        <div id="loadMore-container" class=""> <a href="ajax/loadmore.html"
                class="cbp-l-loadMore-link btn btn-border dark"> <span class="cbp-l-loadMore-defaultText">LOAD
                    MORE</span> <span class="cbp-l-loadMore-loadingText">LOADING...</span> <span
                    class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span> </a> </div>
    </div>
    <!--/.text-center -->
</div>
<!--/.cbp-panel -->
</div>
<!-- /.container -->
</div>
<!-- /.light-wrapper -->
