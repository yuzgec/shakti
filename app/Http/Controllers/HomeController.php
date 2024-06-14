<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\Form;
use App\Models\Page;
use App\Models\Service;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){

        $About = Page::where('id',1)->first();
        return view('frontend.index',compact('About'));
    }

    
    public function contact(){
        return view('frontend.contact');
    }

    public function corporatedetail($slug){
        $Detay = Page::where('slug', $slug)->firstOrFail();
        return view('frontend.page.index', compact('Detay'));

    }

    public function sinirsistemi(){
        $Title = "Sinir Sistemi Seansları";

        $All = Service::where('category', 12)->get();
        return view('frontend.service.index',compact('All', 'Title'));
    }

    public function sinir($slug){
        $Detay = Service::where('slug', $slug)->firstOrFail();
        return view('frontend.service.sinir', compact('Detay'));

    }

    public function somatik($slug){
        $Detay = Service::where('slug', $slug)->firstOrFail();
        return view('frontend.service.somatik', compact('Detay'));

    }

    public function somatikyas(){
        $Title = "Somatik Yas Seansları";
        $All = Service::where('category', 11)->get();
        return view('frontend.service.index',compact('All', 'Title'));
    }

    public function ailedizimi(){
        $Title = "Aile Dizimi";
        $All = Service::where('category', 10)->get();
        return view('frontend.service.index',compact('All', 'Title'));
    }


    public function aile($slug){
        $Detay = Service::where('slug', $slug)->firstOrFail();
        return view('frontend.service.aile', compact('Detay'));

    }

    public function cemberler(){
        $Title = "Çemberler";
        $All = Service::where('category', 9)->get();
        return view('frontend.service.index',compact('All', 'Title'));
    }

    public function cember($slug){
        $Detay = Service::where('slug', $slug)->firstOrFail();
        return view('frontend.service.cember', compact('Detay'));

    }


    public function meditasyonlar(){
        $Title = "Meditasyonlar";
        $All = Service::where('category', 8)->get();
        return view('frontend.service.index',compact('All', 'Title'));
    }

    public function meditasyon($slug){
        $Detay = Service::where('slug', $slug)->firstOrFail();
        return view('frontend.service.meditasyon', compact('Detay'));

    }

    public function sinirdetay($slug){
        $Detay = Service::where('category', 1)->where('slug', $slug)->firstOrFail();
        return view('frontend.service.detail', compact('Detay'));
    }

    public function siirler(){
        $Title = "Şiirler";
        $All = Blog::where('category', 1)->get();
        return view('frontend.blog.siirler',compact('All', 'Title'));
    }

    public function siir($slug){
        $Detay = Blog::where('category', 1)->where('slug', $slug)->firstOrFail();
        return view('frontend.blog.siir', compact('Detay'));
    }

    public function yazilar(){
        $Title = "Yazılar";
        $All = Blog::where('category', 2)->get();
        return view('frontend.blog.yazilar',compact('All', 'Title'));
    }

    public function yazi($slug){
        $Detay = Blog::where('category', 2)->where('slug', $slug)->firstOrFail();
        return view('frontend.blog.yazi', compact('Detay'));
    }

    public function etkinlikler(){
        $Title = "Etkinlikler";
        $All = Blog::where('category', 3)->get();
        return view('frontend.blog.etkinlikler',compact('All', 'Title'));
    }

    public function form(ContactRequest $request){
        $New = new Form;
        $New->name =  $request->name;
        $New->email =  $request->email;
        $New->phone =  $request->phone;
        $New->subject =  $request->subject;
        $New->message =  $request->message;
        $New->save();

        Mail::send("mail.form",compact('New'),function ($message) use($New) {
            $message->to('olcayy@gmail.com')->subject($New->name.' - Site Bilgi Formu');
        });

        return redirect()->route('home');
    }

}
