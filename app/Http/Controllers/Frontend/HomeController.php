<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Brand;
use App\Models\SeoSetting;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public  function index()
    {
        if (file_exists(storage_path('installed'))) {
            if (!Session::has('currency')) {
                Session::put('currency', Setting::where('slug', 'default_currency')->first()->value ?? 'USD');
            }
            $data['blogs'] = Blog::with('tags')->latest()->get();
            $data['brands'] = Brand::latest()->get();
            $data['products'] = $all_products->paginate(allsetting('home_products_page'));
            $data['new_arrivals'] = $all_products->where('New_Arrival', ACTIVE)->paginate(allsetting('home_trending_page'));
            $data['best_sellings'] = $all_products->where('Best_Selling', ACTIVE)->paginate(allsetting('home_trending_page'));
            $data['on_sales'] = $all_products->where('On_Sale', ACTIVE)->paginate(allsetting('home_trending_page'));
            $data['featured_products'] = $all_products->where('Featured_Product', ACTIVE)->paginate(allsetting('home_trending_page'));
            $seo = SeoSetting::where('slug', 'home')->first();
            $data['title'] = $seo->title;
            $data['description'] = $seo->description;
            $data['keywords'] = $seo->keywords;
            return view('front.index', $data);
        } else {
            return redirect()->to('/install');
        }
    }

}
