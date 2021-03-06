<?php

Route::group(['namespace' => 'Platform\Menu\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'menus', 'as' => 'menus.'], function () {
            Route::resource('', 'MenuController')->parameters(['' => 'menu']);

            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'MenuController@deletes',
                'permission' => 'menus.destroy',
            ]);
        });
    });
});
