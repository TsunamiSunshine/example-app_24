<?php

namespace App\Http\Controllers;

use App\Models\ProductGallery;
use Illuminate\Http\Request;
use App\Models\InfoCards;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Models\GalleryInfoCard;

class ProductGalleryController extends Controller
{
    public function index()
    {
        return view("admin.productgallery", ['category' => ProductGallery::all(), 'infoCards' => InfoCards::all()]);
    }

    public function store(Request $request)
    {
        $category = $request->all();
        $category['name_category'] = $request->name;
        $category['category_id'] = $request->category_id;

        ProductGallery::create($category);




        return redirect()->route('admin.productgallery');
    }

    public function storeInfoCards(Request $request)
    {
        $infoCards = $request->all();
        $infoCards['card_id'] = $request->category_id;
        $infoCards['clarge'] = $request->clarge;
        $infoCards['cmedium'] = $request->cmedium;
        $infoCards['image'] = $request->file('image')->store('image/gallery', 'public');

        $card_id = InfoCards::create($infoCards);
        $card = ProductGallery::find($request->category_id);
        $card->infocards()->attach($card_id->id);


        return redirect()->route('admin.productgallery');
    }

    public function showCategory($id){

        return view('admin.productgallery.show', ['gallery'=> ProductGallery::find($id)]);
    }

    public function showInfoCards($id){

        return view('admin.infocards.show', ['infocards'=> InfoCards::find($id)]);
    }

    public function updateGalleryCategory($id)
    {
        $category = ProductGallery::find($id);

        return view('admin.updateproductgallery', ['updategallery'=>[$category]]);
    }

    public function updateInfoCards($id)
    {

        $infoCards = InfoCards::find($id);

        return view('admin.updateinfocards' ,['updateinfocards'=>[$infoCards], 'category' => ProductGallery::all()]);
    }

    public function updateSubmit(Request $request,$id){
        $category = ProductGallery::find($id);
        $category['category_id'] = $request->category_id;
        $category['name_category'] = $request->name_category;
        $category->update($request->all());

        return redirect()->route('admin.productgallery',$id);
    }

    public function updateInfoCardsSubmit(Request $request,$id)
    {
        $infoCards = InfoCards::find($id);
        $infoCards['card_id'] = $request->category_id;
        $infoCards['clarge'] = $request->clarge;
        $infoCards['cmedium'] = $request->cmedium;
        $tpm = $infoCards['image'] = $request->file('image')->store('image/gallery', 'public');
        $infoCards->update( $request->all($tpm) );

        $card_id = InfoCards::find($id);

        $card = ProductGallery::find($request->category_id);
        $card->infocards()->attach($card_id->id);


        return redirect()->route('admin.productgallery', $id);
    }


    public function destroyStore(ProductGallery $category,$id)
    {
        $category = ProductGallery::find($id);
        $category->delete();

        return redirect()->route('admin.productgallery');
    }

    public function destroyInfoCards(InfoCards $infoCards,$id)
    {
        $infoCards = InfoCards::find($id);
        $infoCards->delete();

        return redirect()->route('admin.productgallery');
    }
}
