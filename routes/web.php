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



Route::get('/', 'HomeController@index')->name('home');





// Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){

Route::middleware(['auth'])->name('admin.')->group(function(){

    // Route::get('/home', 'HomeController@index')->name('admin.home');

    // Route::get('home', 'HomeController@index')->name('admin.home');

    //   Route::get('/posts',[

    //     'uses' => 'PostsController@index',
    //     'name' => 'posts'

    // ]);
    // Route::get('/posts')

    
});
    
    // Route::get('/post/create',[

    //     'uses' => 'PostsController@create',
    //     'name' => 'post.create'

    // ]);


    // Route::post('/post/store',[

    //     'uses' => 'PostsController@store',
    //     'name' => 'post.store'

    // ]);
    
    // Route::get('/post/edit/{id}',[

    //     'uses' => 'PostsController@edit',
    //     'name' => 'post.edit'

    // ]);
    
    // Route::post('/post/update/{id}',[

    //     'uses' => 'PostsController@update',
    //     'name' => 'post.update'

    // ]);
    
    // Route::get('/post/delete/{id}',[

    //     'uses' => 'PostsController@destroy',
    //     'name' => 'post.delete'

    // ]);
    
    // Route::get('/posts',[

    //     'uses' => 'PostsController@index',
    //     'name' => 'posts'

    // ]);

    // Route::get('/posts/trashed',[

    //     'uses' => 'PostsController@trashed',
    //     'name' => 'posts.trashed'

    // ]);

    // Route::get('/post/kill/{id}',[

    //     'uses' => 'PostsController@kill',
    //     'name' => 'post.kill'

    // ]);

    // Route::get('/post/restore/{id}',[

    //     'uses' => 'PostsController@restore',
    //     'name' => 'post.restore'

    // ]);
    
    // Route::get('/category/create',[

    //     'uses' => 'CategoriesController@create',
    //     'name' => 'category.create'

    // ]); 

    // Route::post('/category/store',[

    //     'uses' => 'CategoriesController@store',
    //     'name' => 'category.store'

    // ]);    

    // Route::get('/category',[

    //     'uses' => 'CategoriesController@index',
    //     'name' => 'categories'

    // ]); 

    // Route::get('/category/edit/{id}',[

    //     'uses' => 'CategoriesController@edit',
    //     'name' => 'category.edit'
        
    // ]); 

    // Route::post('/category/update/{id}',[

    //     'uses' => 'CategoriesController@update',
    //     'name' => 'category.update'
        
    // ]);    

    // Route::get('/category/delete/{id}',[

    //     'uses' => 'CategoriesController@destroy',
    //     'name' => 'category.delete'
        
    // ]);    

    // Route::get('/tags',[

    //     'uses' => 'TagsController@index',
    //     'name' => 'tags'

    // ]);  
    
    // Route::get('/tag/create',[

    //     'uses' => 'TagsController@create',
    //     'name' => 'tag.create'

    // ]); 

    // Route::post('/tag/store',[

    //     'uses' => 'TagsController@store',
    //     'name' => 'tag.store'

    // ]);    

    // Route::get('/tag/edit/{id}',[

    //     'uses' => 'TagsController@edit',
    //     'name' => 'tag.edit'

    // ]);

    // Route::post('/tag/update/{id}',[

    //     'uses' => 'TagsController@update',
    //     'name' => 'tag.update'

    // ]);

    // Route::get('/tag/delete/{id}',[

    //     'uses' => 'TagsController@destroy',
    //     'name' => 'tag.delete'

    // ]);

// });

