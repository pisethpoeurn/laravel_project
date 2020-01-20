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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/customer' ,'PagesController@customer') -> name('customer');
Route::get('/customer' ,'PagesController@listCustomer') -> name('customer');
Route::get('/action', 'PagesController@action') -> name ('action');
Route::get('/about' , 'PagesController@about') -> name('about');
Route::get('/join' , 'PagesController@join')-> name('join');
Route::get('/news' , 'PagesController@news')-> name('news');
Route::get('/contact' , 'PagesController@contact') -> name('contact');
Route::get('/teacher/{index}', function ($index) {
    // create new array
    $teachers = array("Channak", "Ronan", "Shieha", "Rady", "Rith");
    if ($index < sizeof($teachers)) {
        echo "This teacher is : " . $teachers[$index];
    } else {
        echo "This array is :";
        for ($i = 0; $i < sizeof($teachers); $i++) {
            $countIndex = sizeof($teachers) - 1;
            $result = "";
            if ($i < $countIndex) {
                $result.= "[$i] " . $teachers[$i] . ", ";
            } else {
                $result.= "[$i] " . $teachers[$i];
            }
            // return $result;
        }
        $message = $result. "<br> No Teacher with this index :" .$index ."<br> The largest index id :" . $countIndex;
    }
    return $message;

});
