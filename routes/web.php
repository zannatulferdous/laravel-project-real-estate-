<?php

/*front end*/

Route::get('/',[
    'uses'=>'templeteController@index',
    'as'=>'home-front'
]);
Route::get('/contact',[
    'uses'=>'templeteController@contact',
    'as'=>'contact'
]);

Route::get('/about',[
    'uses'=>'templeteController@about',
    'as'=>'about'
]);

Route::get('/rent',[
    'uses'=>'templeteController@rent',
    'as'=>'rent'
]);

Route::get('/buy',[
    'uses'=>'templeteController@buy',
    'as'=>'buy'
]);
Route::get('/properties/details/{id}',[
    'uses' => 'templeteController@propertyDetails',
    'as' => 'property-details'
]);
/*front end*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*Category start*/

Route::get('/add/category',[
    'uses'=>'CategoryController@addCategory',
    'as'=>'add-category'
]);

Route::post('/save/category',[
    'uses'=>'CategoryController@saveCategory',
    'as'=>'new-category'
]);
Route::get('/manage/category',[
    'uses'=>'CategoryController@manageCategory',
    'as'=>'manage-category'
]);

Route::get('/category/unpublished/{id}',[
    'uses'=>'CategoryController@unpublishedCategory',
    'as'=>'unpublished-category'
]);

Route::get('/category/published/{id}',[
    'uses'=>'CategoryController@publishedCategory',
    'as'=>'published-category'
]);

Route::get('/category/edit/{id}',[
    'uses'=>'CategoryController@editCategory',
    'as'=>'edit-category'
]);
Route::post('/category/update',[
    'uses'=>'CategoryController@updateCategory',
    'as'=>'update-category'
]);

Route::get('/category/delete/{id}',[
    'uses'=>'CategoryController@deleteCategory',
    'as'=>'delete-category'
]);

/*Category end*/

/*property Start*/
Route::get('/add/property',[
    'uses'=>'PropertyController@addProperty',
    'as'=>'add-property'
]);

Route::post('/save/property',[
    'uses'=>'PropertyController@saveProperty',
    'as'=>'new-property'
]);
Route::get('/manage/property',[
    'uses'=>'PropertyController@manageProperty',
    'as'=>'manage-property'
]);
Route::get('/property/unpublished/{id}',[
    'uses'=>'PropertyController@unpublishedProperty',
    'as'=>'unpublished-property'
]);

Route::get('/property/published/{id}',[
    'uses'=>'PropertyController@publishedProperty',
    'as'=>'published-property'
]);

Route::get('/edit/property{id}',[
    'uses'=>'PropertyController@editProperty',
    'as'=>'edit-property'
]);

Route::post('/property/update',[
    'uses'=>'PropertyController@updateProperty',
    'as'=>'update-property'
]);

Route::get('/property/delete/{id}',[
    'uses'=>'PropertyController@deleteProperty',
    'as'=>'delete-property'
]);
/*end Properties*/
/*start agent*/
Route::get('/add/agent',[
    'uses'=>'AgentController@addAgent',
    'as'=>'add-agent'
]);
Route::post('/save/agent',[
    'uses'=>'AgentController@saveAgent',
    'as'=>'new-agent'
]);
Route::get('/manage/agent',[
    'uses'=>'AgentController@manageAgent',
    'as'=>'manage-agent'
]);
Route::get('/agent/unpublished/{id}',[
    'uses'=>'AgentController@unpublishedAgent',
    'as'=>'unpublished-agent'
]);

Route::get('/agent/published/{id}',[
    'uses'=>'AgentController@publishedAgent',
    'as'=>'published-agent'
]);
Route::get('/edit/agent{id}',[
    'uses'=>'AgentController@editAgent',
    'as'=>'edit-agent'
]);

Route::post('/agent/update',[
    'uses'=>'AgentController@updateAgent',
    'as'=>'update-agent'
]);

Route::get('/agent/delete/{id}',[
    'uses'=>'AgentController@deleteAgent',
    'as'=>'delete-agent'
]);
/*end agent*/
/*start  contact*/
Route::post('/save/contact',[
    'uses'=>'ContactController@saveContact',
    'as'=>'new-contact'
]);
Route::get('/manage/contact',[
    'uses'=>'ContactController@manageContact',
    'as'=>'manage-contact'
]);
Route::get('/contact/delete/{id}',[
    'uses'=>'ContactController@deleteContact',
    'as'=>'delete-contact'
]);

/*end contact*/
/*end blog*/
Route::get('/add/blog',[
    'uses'=>'BlogController@addBlog',
    'as'=>'add-blog'
]);
Route::post('/save/blog',[
    'uses'=>'BlogController@saveBlog',
    'as'=>'new-blog'
]);
Route::get('/manage/blog',[
    'uses'=>'BlogController@manageBlog',
    'as'=>'manage-blog'
]);
Route::get('/blog/unpublished/{id}',[
    'uses'=>'BlogController@unpublishedBlog',
    'as'=>'unpublished-blog'
]);

Route::get('/blog/published/{id}',[
    'uses'=>'BlogController@publishedBlog',
    'as'=>'published-blog'
]);
Route::get('/edit/blog{id}',[
    'uses'=>'BlogController@editBlog',
    'as'=>'edit-blog'
]);

Route::post('/blog/update',[
    'uses'=>'BlogController@updateBlog',
    'as'=>'update-blog'
]);

Route::get('/blog/delete/{id}',[
    'uses'=>'BlogController@deleteBlog',
    'as'=>'delete-blog'
]);
/*end blog*/