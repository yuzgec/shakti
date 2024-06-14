<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/iletisim', [HomeController::class, 'contact'])->name('contactus');
Route::get('/kurumsal', [HomeController::class, 'corporate'])->name('corporate');
Route::get('/sayfa/{url}', [HomeController::class, 'corporatedetail'])->name('corporatedetail');

//Hizmetler Route
Route::get('/hizmetlerimiz', [HomeController::class, 'services'])->name('service');
Route::get('/kalbinekoklen/{url}', [HomeController::class, 'service'])->name('servicedetail');

Route::get('/sinir-sistemi-senaslari', [HomeController::class, 'sinirsistemi'])->name('sinirsistemi');
Route::get('/sinir-sistemi-seansi/{url}', [HomeController::class, 'sinir'])->name('sinir');

Route::get('/somatikyas', [HomeController::class, 'somatikyas'])->name('somatikyas');
Route::get('/somatik-yas/{url}', [HomeController::class, 'somatik'])->name('somatik');

Route::get('/cemberler', [HomeController::class, 'cemberler'])->name('cemberler');
Route::get('/cember/{url}', [HomeController::class, 'cember'])->name('cember');

Route::get('/meditasyonlar', [HomeController::class, 'meditasyonlar'])->name('meditasyonlar');
Route::get('/meditasyon/{url}', [HomeController::class, 'meditasyon'])->name('meditasyon');


Route::get('/ailedizimi', [HomeController::class, 'ailedizimi'])->name('ailedizimi');
Route::get('/aile-dizimi/{url}', [HomeController::class, 'aile'])->name('aile');

Route::get('/yazilar', [HomeController::class, 'yazilar'])->name('yazilar');
Route::get('/yazi/{url}', [HomeController::class, 'yazi'])->name('yazi');

Route::get('/siirler', [HomeController::class, 'siirler'])->name('siirler');
Route::get('/siir/{url}', [HomeController::class, 'siir'])->name('siir');

Route::get('/etkinlikler', [HomeController::class, 'etkinlikler'])->name('etkinlikler');
Route::get('/etkinlik/{url}', [HomeController::class, 'etkinlik'])->name('etkinlik');



//Hizmetler Route

Route::get('/projelerimiz', [HomeController::class, 'project'])->name('project');
Route::get('/proje/{url}', [HomeController::class, 'projectdetail'])->name('projectdetail');
Route::get('/makaleler', [HomeController::class, 'blog'])->name('blog');
Route::get('/makale/{url}', [HomeController::class, 'blogdetail'])->name('blogdetail');
Route::get('/sss', [HomeController::class, 'sss'])->name('sss');
Route::get('/video-galeri', [HomeController::class, 'video'])->name('video');
Route::get('/referanslarimiz', [HomeController::class, 'reference'])->name('reference');
Route::get('/sss', [HomeController::class, 'faq'])->name('faq');
Route::get('/egitmenlerimiz', [HomeController::class, 'team'])->name('team');
Route::get('/ik', [HomeController::class, 'hr'])->name('hr');
Route::get('/ders-programi', [HomeController::class, 'syllabus'])->name('syllabus');
Route::get('/önkayit', [HomeController::class, 'preregistration'])->name('pre-registration');




Route::post('/form', [HomeController::class, 'form'])->name('form');

Route::group(["prefix"=>"go", 'middleware' => ['auth','web', 'admin']],function() {
    Route::get('/', 'DashboardController@index')->name('go');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/formlar', 'DashboardController@formlar')->name('formlar');
    Route::delete('/formDelete/{id}', 'DashboardController@formDelete')->name('formDelete');
    Route::auto('/page', PageController::class);
    Route::auto('/page-categories', PageCategoryController::class);
    Route::auto('/blog', BlogController::class);
    Route::auto('/blog-categories', BlogCategoryController::class);
    Route::auto('/faq', FaqController::class);
    Route::auto('/faq-categories', FaqCategoryController::class);
    Route::auto('/gallery', GalleryController::class);
    Route::auto('/service', ServiceController::class);
    Route::auto('/service-categories', ServiceCategoryController::class);
    Route::auto('/gallery-categories', GalleryCategoryController::class);
    Route::auto('/slider', SliderController::class);
    Route::auto('/video', VideoController::class);
    Route::auto('/video-categories', VideoCategoryController::class);
    Route::auto('/settings', SettingController::class);
    Route::auto('/contact', ContactController::class);
    Route::auto('/features', FeaturesController::class);
    Route::auto('/reference', ReferenceController::class);
    Route::auto('/price', PriceController::class);

});

require __DIR__.'/auth.php';
