<?php
Route::get('Admin',  function () {
    return redirect()->route('admin.login');
});

Route::group(['namespace' => 'Auth'], function () {
    # Login Routes

    Route::get('login',     'LoginController@loginPage')->name('login');
    Route::post('login',    'LoginController@login');
    Route::post('logout',   'LoginController@logout')->name('logout');
});
Route::group(['middleware' => 'auth:admin'], function () {
    # admin update password
    Route::get('change-password',           'DashboardController@changePassword')->name('change-password');
    Route::patch('update-password',         'DashboardController@updatePassword')->name('update-password');

    // Route::get('/dashboard',                'DashboardController@index')->name('dashboard');
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/',                'DashboardController@index')->name('index');
    });

    Route::group(['prefix' => 'User', 'as' => 'User.'], function () {
        Route::get('/',                     'UserController@index')->name('index');
    });

    Route::group(['prefix' => 'Vendor', 'as' => 'Vendor.'], function () {
        Route::get('/',                     'VendorController@index')->name('index');
    });
});
