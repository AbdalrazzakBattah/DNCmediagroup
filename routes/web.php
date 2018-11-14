<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::group(
//    ['prefix' => '{locale?}',
//        'middleware' => 'locale'], function () {
//    // This route is for the root page display
//
//    // This router is for displaying all pages
//});
Route::get('/', [
    'as'=>'voyager.login',
    'uses'=> 'ViewPagesController@index'
]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('customers/profile/{id}',[
        'as'=>'voyager.customers.profile',
        'uses'=>'VoyagerCustomerController@profile'
    ]);
    Route::post('customers/profile/notebook',[
        'as'=>'voyager.customers.notebook',
        'uses'=>'VoyagerCustomerController@storeNotebook'
    ]);
    Route::get('customers/briefing/{id}',[
        'as'=>'voyager.customer.briefing',
        'uses'=>'VoyagerCustomerController@briefing'
    ]);
    Route::get('websites/delete/{id}/{customer_id}',[
        'as'=>'voyager.websites.delete1',
        'uses'=>'Voyager\WebsitesController@delete'
    ]);
    Route::get('design/delete/{id}/{customer_id}',[
        'as'=>'voyager.designs.delete1',
        'uses'=>'Voyager\DesignController@delete'
    ]);
    Route::get('social/delete/{id}/{customer_id}',[
        'as'=>'voyager.socials.delete1',
        'uses'=>'Voyager\SocialsController@delete'
    ]);
    Route::get('legal/delete/{id}/{customer_id}',[
        'as'=>'voyager.legals.delete1',
        'uses'=>'Voyager\LegalController@delete'
    ]);
    Route::get('domain/delete/{id}/{customer_id}',[
        'as'=>'voyager.domains.delete1',
        'uses'=>'Voyager\DomainController@delete'
    ]);
    Route::get('clock/delete/{id}/{customer_id}',[
        'as'=>'voyager.clocks.delete1',
        'uses'=>'Voyager\ClockController@delete'
    ]);
    Route::get('section/delete/{id}/{customer_id}',[
        'as'=>'voyager.sections.delete1',
        'uses'=>'Voyager\SectionController@delete'
    ]);
    Route::get('logo/delete/{id}/{customer_id}',[
        'as'=>'voyager.logos.delete1',
        'uses'=>'Voyager\LogoController@delete'
    ]);
    Route::get('files/delete/{id}/{customer_id}',[
        'as'=>'voyager.files.delete1',
        'uses'=>'Voyager\FilesController@delete'
    ]);
    Route::get('references',[
        'as'=>'voyager.references',
        'uses'=>'Voyager\VoyagerReferencesController@index'
    ]);
    Route::get('references/search',[
        'as'=>'voyager.references.search',
        'uses'=>'Voyager\VoyagerReferencesController@search'
    ]);
});
