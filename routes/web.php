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

Route::get('/test', function(){
	return App\customers_registration::find(5)->customer_profile;
});


Route::get('/', [
	'uses' => 'FrontEndController@index',
	'as' => 'index'
]);

Route::get('/category/{slug}', [
	'uses' => 'FrontEndController@category',
	'as' => 'category.single'
]);

Route::get('/sub-category/{slug}', [
	'uses' => 'FrontEndController@subcategory',
	'as' => 'sub_category.single'
]);


Route::get('/product/{slug}', [
	'uses' => 'FrontEndController@singleProduct',
	'as' => 'product.single'
	]);

Route::get('/tag/{id}', [
	'uses' => 'FrontEndController@tag',
	'as' => 'tag.single'
]);

Route::get('/popular', [
	'uses' => 'FrontEndController@Popular',
	'as' => 'popular'
]);

Route::get('/price-asce', [
	'uses' => 'FrontEndController@PriceAsce',
	'as' => 'price_asce'
]);

Route::get('/price-desc', [
	'uses' => 'FrontEndController@PriceDesc',
	'as' => 'price_desc'
]);

Route::get('/results', [
	'uses' => 'FrontEndController@mysearch',
	'as' => 'my.search'                  
]);

//HERE START --Cart-- ROUTE TASK
Route::post('/cart/add', [
	'uses' => 'shoppingController@add_to_cart',
	'as' => 'cart.add'
	]);

Route::get('/cart', [
	'uses' => 'shoppingController@cart',
	'as' => 'cart'
	]);

Route::get('/cart/delete/{id}', [
		'uses' => 'shoppingController@cart_delete',
		'as' => 'cart.delete'
	]);

Route::get('/cart/incr/{id}/{qty}', [
		'uses' => 'shoppingController@incr',
		'as' => 'cart.incr'
	]);

Route::get('/cart/decr/{id}/{qty}', [
		'uses' => 'shoppingController@decr',
		'as' => 'cart.decr'
	]);

Route::get('/cart/rapid/add/{id}', [
		'uses' => 'shoppingController@rapid_add',
		'as' => 'cart.rapid.add'
	]);


//HERE START --Cart-- ROUTE TASK
Route::get('/cart/checkout', [
	'uses' => 'CheckoutController@index',
	'as' => 'cart.checkout'
	]);

Route::post('/billing/store', [
	'uses' => 'CheckoutController@store',
	'as' => 'billing.store'
	]);

Route::get('/cart/order', [
	'uses' => 'CheckoutController@order',
	'as' => 'cart.order'
	]);

Route::post('/cart/checkout/payment', [
	'uses' => 'CheckoutController@pay',
	'as' => 'cart.payment'
	]);

Route::get('/cart/checkout/payment/bkash', [
	'uses' => 'CheckoutController@pay_bkash',
	'as' => 'cart.payment_bkash'
	]);


//HERE START --> Customer Registration <-- ROUTE TASK
Route::get('/customer/register', [
	'uses' => 'CustomerRegisterController@index',
	'as' => 'customer.register'
]);

Route::post('/customer/store', [
	'uses' => 'CustomerRegisterController@store',
	'as' => 'customer.store'
]);



//HERE START --Customer Login-- ROUTE TASK
Route::get('/customer/login', [
	'uses' => 'CustomerLoginController@index',
	'as' => 'customer.login'
]);

Route::post('/customer/login/check', [
	'uses' => 'CustomerLoginController@login',
	'as' => 'customer.login_check'
]);

Route::post('/customer/login/check_two', [
	'uses' => 'CustomerLoginController@login_two',
	'as' => 'customer.login_check_two'
]);

Route::get('/customer/logout', [
	'uses' => 'CustomerLoginController@logout',
	'as' => 'customer.logout'
]);

Route::get('/customer/profile', [
	'uses' => 'CustomerController@index',
	'as' => 'customer.profile'
]);

Route::post('/customer/profile/update', [
	'uses' => 'CustomerController@update',
	'as' => 'customer.profile.update'
	]);


//Route::post('/customerLogin/cehck', 'CustomerLoginController@login');





Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){

	Route::get('/dashboard', 'HomeController@index')->name('home');

	//HERE START --CATAGORY-- ROUTE TASK
	Route::get('/catagory/create', [
		'uses' => 'CategoriesController@create',
		'as' => 'category.create'
	]);

	Route::post('/catagory/store', [
		'uses' => 'CategoriesController@store',
		'as' => 'catagory.store'
	]);

	Route::get('/catagory/index', [
	'uses' => 'CategoriesController@index',
	'as' => 'categories.index'
	]);

	Route::get('/category/edit/{id}', [
	'uses' => 'CategoriesController@edit',
	'as' => 'category.edit'
	]);

	Route::post('/category/update/{id}', [
	'uses' => 'CategoriesController@update',
	'as' => 'catagory.update'
	]); 

	Route::get('/category/delete/{id}', [
	'uses' => 'CategoriesController@destroy',
	'as' => 'category.delete'
	]);

	Route::post('/sub-catagory/store', [
		'uses' => 'CategoriesController@sub_store',
		'as' => 'sub-catagory.store'
	]);

	Route::get('/sub-catagory', [
	'uses' => 'CategoriesController@sub_index',
	'as' => 'sub_index'
	]);

	Route::get('/sub-category/edit/{id}', [
		'uses' => 'CategoriesController@sub_edit',
		'as' => 'sub_category.edit'
	]);

	Route::post('/sub-category/update/{id}', [
	'uses' => 'CategoriesController@sub_update',
	'as' => 'sub_catagory.update'
	]);

	Route::get('/sub-category/delete/{id}', [
		'uses' => 'CategoriesController@sub_destroy',
		'as' => 'sub_category.delete'
	]);

	//HERE START --Product-- ROUTE TASK
	Route::get('/products/create', [
	'uses' => 'ProductsController@create',
	'as' => 'products.create'
	]);

	Route::post('/product/store', [
	'uses' => 'ProductsController@store',
	'as' => 'products.store'
	]);

	Route::get('/products/', [
	'uses' => 'ProductsController@index',
	'as' => 'products.index'
	]);

	Route::get('/product/delete/{id}', [
	'uses' => 'ProductsController@destroy',
	'as' => 'product.delete'
	]);

	Route::get('/product/trashed', [
	'uses' => 'ProductsController@trashed',
	'as' => 'product.trashed'
	]);

	Route::get('/product/kill/{id}', [
	'uses' => 'ProductsController@kill',
	'as' => 'product.kill'
	]);

	Route::get('/product/restore/{id}', [
	'uses' => 'ProductsController@restore',
	'as' => 'product.restore'
	]);

	Route::get('/product/edit/{id}', [
	'uses' => 'ProductsController@edit',
	'as' => 'product.edit'
	]);

	Route::post('/product/update/{id}', [
	'uses' => 'ProductsController@update',
	'as' => 'product.update'
	]);

	Route::post('/product/discount/{id}', [
	'uses' => 'ProductsController@discount_update',
	'as' => 'product.discount'
	]);

	
	//HERE START --Tag-- ROUTE TASK
	Route::get('/tag/create', [
	'uses' => 'TagsController@create',
	'as' => 'tag.create'
	]);

	Route::post('/tag/store', [
	'uses' => 'TagsController@store',
	'as' => 'tag.store'
	]);

	Route::get('/tags/', [
		'uses' => 'TagsController@index',
		'as' => 'tag.index'
	]);

	Route::get('/tag/edit/{id}', [
	'uses' => 'TagsController@edit',
	'as' => 'tag.edit'
	]);

	Route::get('/tag/delete/{id}', [
	'uses' => 'TagsController@destroy',
	'as' => 'tag.delete'
	]);

	Route::post('/tag/update/{id}', [
	'uses' => 'TagsController@update',
	'as' => 'tag.update'
	]);

	//HERE START --USER-- ROUTE TASK
	Route::get('/test/', function(){
		return App\User::find(1)->profile;
	});

	Route::get('/users/', [
		'uses' => 'UsersController@index',
		'as' => 'users.index'
	]);

	Route::get('/user/create', [
	'uses' => 'UsersController@create',
	'as' => 'user.create'
	]);

	Route::post('/user/store', [
	'uses' => 'UsersController@store',
	'as' => 'user.store'
	]);

	Route::get('/user/admin/{id}', [
	'uses' => 'UsersController@admin',
	'as' => 'user.admin'
	]);

	Route::get('/user/not-admin/{id}', [
	'uses' => 'UsersController@not_admin',
	'as' => 'user.not.admin'
	]);

	Route::get('/user/profile', [
		'uses' => 'ProfilesController@index',
		'as' => 'user.profile'
	]);

	Route::post('/user/profile', [
		'uses' => 'ProfilesController@update',
		'as' => 'user.profile.update'
	]);
	Route::get('/user/delete/{id}', [
	'uses' => 'UsersController@destroy',
	'as' => 'user.delete'
	]);

	//HERE START --Settings-- ROUTE TASK
	Route::get('/settings/', [
	'uses' => 'SettingsController@index',
	'as' => 'settings'
	]);

	Route::post('/settings/update', [
		'uses' => 'SettingsController@update',
		'as' => 'settings.update'
	]);

	Route::get('/settings/curency/', [
	'uses' => 'SettingsController@curency',
	'as' => 'curency'
	]);

	Route::post('/settings/curency/update', [
	'uses' => 'SettingsController@curency_update',
	'as' => 'curency.update'
	]);

	//HERE START --Order-- ROUTE TASK
	Route::get('/order/', [
	'uses' => 'OrderController@index',
	'as' => 'order'
	]);

	Route::get('/order/payment/{id}', [
	'uses' => 'OrderController@payment_update',
	'as' => 'payment.update'
	]);

	Route::get('/order/delivery/{id}', [
	'uses' => 'OrderController@delivery_update',
	'as' => 'delivery.update'
	]);

	Route::get('/order/{id}', [
		'uses' => 'OrderController@order_destroy',
		'as' => 'order.delete'
	]);

	Route::get('/orders/search', [
		'uses' => 'OrderController@order_abc',
		'as' => 'order_abc'
	]);

	Route::get('/test/', [
	'uses' => 'OrderController@test',
	'as' => 'test'
	]);

});
