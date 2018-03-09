<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

   /* Schema::create('programmers' , function($myTable)
    {
            $myTable->increments('id');
            $myTable->string('name');
            $myTable->string('lastname',30);
            $myTable->string('description',500);
            $myTable->date('created');
            $myTable->string('age');
            $myTable->timestamps();
         });*/

// Schema::table('programmers' , function($myTable)
//  {
//      $myTable->dropColumn('age');
//     $myTable->string('fullname');
 
// });


    return view('welcome');
});

Route::get('about', function () {
    return 'welcome to about page';
});

Route::get('about/{Var}', function ($Var) {
    return $Var.'  welcome to my variale';
});


