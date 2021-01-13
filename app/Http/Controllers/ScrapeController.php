<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Exports\ScrapeExport;
use App\Exports\RatingExport;
use App\Exports\ProductExport;
use App\Exports\ProductDetail;
use Maatwebsite\Excel\Facades\Excel;
use ZipArchive;
use File;





class ScrapeController extends Controller
{
    public function scrape(Request $request)
    {
        $pages = $request->page;
        $shopid = $request->shopid;
        $page = ($pages * 30) - 30;
        if ($request->filter == 1) {
            $responses[] = Http::get('https://shopee.co.id/api/v2/search_items/?by=pop&entry_point=ShopBySearch&limit=30&match_id='.$shopid.'&newest='.$page.'&order=desc&page_type=shop&version=2')['items'];
        }elseif ($request->filter == 2) {
            $responses[] = Http::get('https://shopee.co.id/api/v2/search_items/?by=ctime&entry_point=ShopBySearch&limit=30&match_id='.$shopid.'&newest='.$page.'&order=desc&page_type=shop&version=2')['items'];
        }elseif ($request->filter == 3) {
            $responses[] = Http::get('https://shopee.co.id/api/v2/search_items/?by=sales&entry_point=ShopBySearch&limit=30&match_id='.$shopid.'&newest='.$page.'&order=desc&page_type=shop&version=2')['items'];
        }elseif ($request->filter == 4) {
            $responses[] = Http::get('https://shopee.co.id/api/v2/search_items/?by=price&entry_point=ShopBySearch&limit=30&match_id='.$shopid.'&newest='.$page.'&order=asc&page_type=shop&version=2')['items'];
        }elseif ($request->filter == 5) {
            $responses[] = Http::get('https://shopee.co.id/api/v2/search_items/?by=price&entry_point=ShopBySearch&limit=30&match_id='.$shopid.'&newest='.$page.'&order=desc&page_type=shop&version=2')['items'];
        }

        if (sizeof($responses[0]) == 0) {
            return redirect()->back()->with('msg', 'Data yang dimasukan kosong');
        }else {
            for ($i=0; $i < count($responses); $i++) { 
                for ($j=0; $j < count($responses[$i]); $j++) { 
                $res[]  = Http::get('https://shopee.co.id/api/v2/item/get?itemid='.$responses[$i][$j]['itemid'].'&shopid='.$shopid)['item'];
                }
            }
            return Excel::download(new ScrapeExport($res), 'invoices.xlsx');
        }
    }
    public function rating()
    {
        return view('dashboard/rating');
    }
    public function ratingAction(Request $request)
    {
        $shopid = $request->shopid;
        $responses[] = Http::get('https://shopee.co.id/api/v2/shop/get_ratings?filter=0&limit=100&offset=0&shopid='.$shopid.'&type=0')['data']['items'];
        $result = $responses[0];
        if (sizeof($responses[0]) == 0) {
            return redirect()->back()->with('msg', 'Data yang dimasukan kosong');
        }else {
            for ($i=0; $i < count($result); $i++) { 
                $rating[] = $result[$i];
            }
            return Excel::download(new RatingExport($rating), 'invoices.xlsx');
        }
    }
    public function product()
    {
        return view('dashboard/product');
    }
    public function productdetail()
    {
        return view('dashboard/productdetail');
    }
    public function productdetailaction(Request $request)
    {
        $shopid = $request->shopid;
        $itemid = $request->itemid;
        $responses[] = Http::get('https://shopee.co.id/api/v2/item/get?itemid='.$itemid.'&shopid=100238623')['item'];
        return Excel::download(new Productdetail($responses), 'invoices.xlsx');
    }
    public function productAction(Request $request)
    {
        $keyword = $request->keyword;
        if ($request->filter == 1) {
            $responses[] = Http::get('https://shopee.co.id/api/v2/search_items/?by=relevancy&keyword='.$keyword.'&limit=100&newest=0&order=desc&page_type=search&version=2')['items'];
        }elseif ($request->filter == 2) {
            $responses[] = Http::get('https://shopee.co.id/api/v2/search_items/?by=ctime&keyword='.$keyword.'&limit=100&newest=0&order=desc&page_type=search&version=2')['items'];
        }elseif ($request->filter == 3) {
            $responses[] = Http::get('https://shopee.co.id/api/v2/search_items/?by=sales&keyword='.$keyword.'&limit=100&newest=0&order=desc&page_type=search&version=2')['items'];
        }elseif ($request->filter == 4) {
            $responses[] = Http::get('https://shopee.co.id/api/v2/search_items/?by=price&keyword='.$keyword.'&limit=100&newest=0&order=asc&page_type=search&version=2')['items'];
        }elseif ($request->filter == 5) {
            $responses[] = Http::get('https://shopee.co.id/api/v2/search_items/?by=price&keyword='.$keyword.'&limit=100&newest=0&order=desc&page_type=search&version=2')['items'];
        }
        $result = $responses[0];
        if (sizeof($responses[0]) == 0) {
            return redirect()->back()->with('msg', 'Data yang dimasukan kosong');
        }else {
            for ($i=0; $i < count($result); $i++) { 
                $product[] = $result[$i];
            }
            return Excel::download(new ProductExport($product), 'invoices.xlsx');
        }
    }
}
