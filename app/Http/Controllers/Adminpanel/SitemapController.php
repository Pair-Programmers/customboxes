<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Crawler\Crawler;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.pages.other.sitemap');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = 'storage/sitemaps/';
        //$industrySitemap = Sitemap::create()->add(Industry::all());

        // SitemapGenerator::create(env('APP_URL'))
        // ->writeToFile(public_path($path . 'sitemap.xml'));

        // SitemapGenerator::create(env('APP_URL'))
        // ->configureCrawler(function (Crawler $crawler) {
        //     $crawler->setMaximumDepth(6);
        // })
        // ->writeToFile($path . 'sitemapUsingCrawler.xml');


        $sitemapGenerator = SitemapGenerator::create(env('APP_URL'))
        ->getSitemap();
        foreach (Industry::all() as $key => $industry) {
            foreach ($industry->products() as $key => $product) {
                $sitemapGenerator->add(Url::create('/industry'. '/' . $industry->slug . '/' . $product->slug)
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.1));
            }
        }
        $sitemapGenerator->writeToFile('sitemap.xml');

        //return Sitemap::create()->add(Product::all());
        //return Sitemap::create()->add(Industry::all());

        return redirect()->route('admin.sitemap.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
