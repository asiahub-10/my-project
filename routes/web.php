<?php

//============================
//          Error
//============================

Route::get('/404', [
    'uses'  =>  'ExceptionController@error404',
    'as'    =>  '404-error'
]);

Route::get('/405', [
    'uses'  =>  'ExceptionController@error405',
    'as'    =>  '405-error'
]);



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

Route::get('/', function () {
    return view('admin.login.login');
});


//============================
//          Login/Register
//============================
Route::get('/check-login-email/{email}', [
    'uses'  =>  'AdminLoginController@checkLoginEmail',
    'as'    =>  'check-login-email'
]);

Route::get('/check-login-password/{password}', [
    'uses'  =>  'AdminLoginController@checkLoginPassword',
    'as'    =>  'check-login-password'
]);
Route::get('/register/upload-image', [
    'uses'  =>  'UserProfileController@uploadProfileImage',
    'as'    =>  '/upload-image'
]);

Route::post('/profile-picture-upload', [
    'uses'  =>  'UserProfileController@saveProfilePicture',
    'as'    =>  'profile-picture-upload'
]);

Route::post('/registered', [
    'uses'  =>  'UserProfileController@completeRegistration',
    'as'    =>  'registration-complete'
]);

Route::get('/manage-user', [
    'uses'  =>  'UserProfileController@userList',
    'as'    =>  'manage-user'
]);

Route::get('/view-profile/{id}', [
    'uses'  =>  'UserProfileController@viewUser',
    'as'    =>  'view-user-details'
]);




//============================
//          Profile
//============================
Route::get('/profile', [
    'uses'  =>  'UserProfileController@profile',
    'as'    =>  'profile'
]);

Route::post('/image-upload', [
    'uses'  =>  'UserProfileController@imageUpload',
    'as'    =>  'profile-picture'
]);

Route::get('/change-profile-image', [
    'uses'  =>  'UserProfileController@updateImage',
    'as'    =>  'change-profile-image'
]);

Route::get('/change-profile-info', [
    'uses'  =>  'UserProfileController@changeProfileInfo',
    'as'    =>  'change-profile-info'
]);

Route::post('/update-profile-info', [
    'uses'  =>  'UserProfileController@updateProfileInfo',
    'as'    =>  'update-profile-info'
]);

Route::get('/profile-setting', [
    'uses'  =>  'UserProfileController@profileSetting',
    'as'    =>  'setting'
]);

Route::get('/change-email', [
    'uses'  =>  'UserProfileController@changeEmail',
    'as'    =>  'change-email-address'
]);

Route::post('/update-email-address', [
    'uses'  =>  'UserProfileController@updateEmail',
    'as'    =>  'update-email'
]);

Route::get('/reset-password', [
    'uses'  =>  'UserProfileController@changePassword',
    'as'    =>  'change-password'
]);

Route::post('/change-password', [
    'uses'  =>  'UserProfileController@passwordReset',
    'as'    =>  'replace-password'
]);

Route::get('/delete-account', [
    'uses'  =>  'UserProfileController@deleteAccount',
    'as'    =>  'delete-profile'
]);

Route::post('/delete-profile', [
    'uses'  =>  'UserProfileController@removeAccount',
    'as'    =>  'remove-user'
]);




//============================
//          Category
//============================
Route::get('/add-category', [
    'uses'  =>  'CategoryController@index',
    'as'    =>  'add-category'
]);

Route::post('/save-category', [
    'uses'  =>  'CategoryController@saveCategory',
    'as'    =>  'save-category'
]);

Route::get('/manage-category', [
    'uses'  =>  'CategoryController@manageCategory',
    'as'    =>  'manage-category'
]);

Route::get('/edit-category/{id}', [
    'uses'  =>  'CategoryController@editCategory',
    'as'    =>  'edit-category'
]);

Route::post('/update-category', [
    'uses'  =>  'CategoryController@updateCategory',
    'as'    =>  'update-category'
]);

Route::post('/publish-category', [
    'uses'  =>  'CategoryController@publishCategory',
    'as'    =>  'publish-category'
]);

Route::post('/unpublish-category', [
    'uses'  =>  'CategoryController@unpublishCategory',
    'as'    =>  'unpublish-category'
]);

Route::post('/delete-category', [
    'uses'  =>  'CategoryController@deleteCategory',
    'as'    =>  'delete-category'
]);



//============================
//          Brand
//============================
Route::get('/add-brand', [
    'uses'      =>  'BrandController@index',
    'as'        =>  'add-brand'
]);

Route::post('/save-brand', [
    'uses'      =>  'BrandController@saveBrand',
    'as'        =>  'save-brand'
]);

Route::get('/manage-brand', [
    'uses'      =>  'BrandController@manageBrand',
    'as'        =>  'manage-brand'
]);

Route::get('/edit-brand/{id}', [
    'uses'      =>  'BrandController@editBrand',
    'as'        =>  'edit-brand'
]);

Route::post('/update-brand', [
    'uses'      =>  'BrandController@updateBrand',
    'as'        =>  'update-brand'
]);

Route::post('/publish-brand', [
    'uses'  =>  'BrandController@publishBrand',
    'as'    =>  'publish-brand'
]);

Route::post('/unpublish-brand', [
    'uses'  =>  'BrandController@unpublishBrand',
    'as'    =>  'unpublish-brand'
]);

Route::post('/delete-brand', [
    'uses'  =>  'BrandController@deleteBrand',
    'as'    =>  'delete-brand'
]);


//============================
//          Product
//============================

Route::get('/add-product', [
    'uses'  =>  'ProductController@index',
    'as'    =>  'add-product'
]);

Route::post('/save-product', [
    'uses'  =>  'ProductController@saveProduct',
    'as'    =>  'save-product'
]);

Route::get('/manage-product', [
    'uses'  =>  'ProductController@manageProduct',
    'as'    =>  'manage-product'
]);

Route::get('/product-details/{id}', [
    'uses'  =>  'ProductController@viewProduct',
    'as'    =>  'view-product-detail'
]);

Route::get('/edit-product/{id}', [
    'uses'  =>  'ProductController@editProduct',
    'as'    =>  'edit-product'
]);

Route::post('/update-product', [
    'uses'  =>  'ProductController@updateProduct',
    'as'    =>  'update-product'
]);

Route::post('/publish-product', [
    'uses'  =>  'ProductController@publishProduct',
    'as'    =>  'publish-product'
]);

Route::post('/unpublish-product', [
    'uses'  =>  'ProductController@unpublishProduct',
    'as'    =>  'unpublish-product'
]);

Route::post('/delete-product', [
    'uses'  =>  'ProductController@deleteProduct',
    'as'    =>  'delete-product'
]);


//============================
//          Slider
//============================

Route::get('/add-slider', [
    'uses'  =>  'SliderController@index',
    'as'    =>  'add-slider'
]);

Route::post('/save-slider', [
    'uses'  =>  'SliderController@saveSlider',
    'as'    =>  'save-slider'
]);

Route::get('/manage-slider', [
    'uses'  =>  'SliderController@manageSlider',
    'as'    =>  'manage-slider'
]);

Route::get('/edit-slider/{id}', [
    'uses'  =>  'SliderController@editSlider',
    'as'    =>  'edit-slider'
]);

Route::post('/update-slider', [
    'uses'  =>  'SliderController@updateSlider',
    'as'    =>  'update-slider'
]);

Route::post('/publish-slider', [
    'uses'  =>  'SliderController@publishSlider',
    'as'    =>  'publish-slider'
]);

Route::post('/unpublish-slider', [
    'uses'  =>  'SliderController@unpublishSlider',
    'as'    =>  'unpublish-slider'
]);

Route::post('/delete-slider', [
    'uses'  =>  'SliderController@deleteSlider',
    'as'    =>  'delete-slider'
]);


//============================
//          Offer
//============================

Route::get('/add-offer', [
    'uses'  =>  'OfferController@addOffer',
    'as'    =>  'add-offer'
]);

Route::post('/save-offer', [
    'uses'  =>  'OfferController@saveOffer',
    'as'    =>  'save-new-offer'
]);

Route::get('/manage-offer', [
    'uses'  =>  'OfferController@manageOffer',
    'as'    =>  'manage-offer'
]);

Route::get('/edit-offer/{id}', [
    'uses'  =>  'OfferController@editOffer',
    'as'    =>  'edit-offer-info'
]);

Route::post('/update-offer', [
    'uses'  =>  'OfferController@updateOffer',
    'as'    =>  'update-offer-info'
]);

Route::post('/publish-offer', [
    'uses'  =>  'OfferController@publishOffer',
    'as'    =>  'publish-offer'
]);

Route::post('/unpublish-offer', [
    'uses'  =>  'OfferController@unpublishOffer',
    'as'    =>  'unpublish-offer'
]);

Route::post('/delete-offer', [
    'uses'  =>  'OfferController@deleteOffer',
    'as'    =>  'delete-offer-info'
]);



//============================
//          Order
//============================

Route::get('/manage-order', [
    'uses'  =>  'ManageOrderController@manageOrder',
    'as'    =>  'manage-orders'
]);

Route::get('/order-detail/{id}', [
    'uses'  =>  'ManageOrderController@orderDetail',
    'as'    =>  'view-order-detail'
]);

Route::get('/order-invoice/{id}', [
    'uses'  =>  'ManageOrderController@orderInvoice',
    'as'    =>  'view-order-invoice'
]);

Route::get('/order-invoice-download/{id}', [
    'uses'  =>  'ManageOrderController@invoiceDownload',
    'as'    =>  'download-order-invoice'
]);

Route::get('/edit-order/{id}', [
    'uses'  =>  'ManageOrderController@editOrder',
    'as'    =>  'edit-order-detail'
]);

Route::post('/update-order', [
    'uses'  =>  'ManageOrderController@updateOrder',
    'as'    =>  'update-order-detail'
]);

Route::post('/delete-order', [
    'uses'  =>  'ManageOrderController@deleteOrder',
    'as'    =>  'delete-order-info'
]);


//============================
//          Order
//============================

Route::get('/manage-customer', [
    'uses'  =>  'CustomerController@manageCustomer',
    'as'    =>  'manage-customers'
]);

Route::get('/edit-customer/{id}', [
    'uses'  =>  'CustomerController@editCustomer',
    'as'    =>  'edit-customer-details'
]);

Route::post('/update-customer', [
    'uses'  =>  'CustomerController@updateCustomer',
    'as'    =>  'update-customer-details'
]);

Route::get('/customer-email-check/{email}/{id}', [
    'uses'  =>  'CustomerController@checkEmail',
    'as'    =>  'customer-email-check'
]);

Route::post('/customer-deactivate', [
    'uses'  =>  'CustomerController@deactivateCustomer',
    'as'    =>  'customer-deactivation'
]);

Route::post('/customer-activate', [
    'uses'  =>  'CustomerController@activateCustomer',
    'as'    =>  'customer-activation'
]);

Route::post('/customer-delete', [
    'uses'  =>  'CustomerController@deleteCustomer',
    'as'    =>  'customer-data-delete'
]);


//============================
//          Review
//============================

Route::get('/manage-customer-review', [
    'uses'  =>  'ReviewController@manageReview',
    'as'    =>  'manage-review'
]);

Route::post('/customer-review-unpublish', [
    'uses'  =>  'ReviewController@unpublishReview',
    'as'    =>  'unpublish-review'
]);

Route::post('/customer-review-publish', [
    'uses'  =>  'ReviewController@publishReview',
    'as'    =>  'publish-review'
]);

Route::post('/customer-review-delete', [
    'uses'  =>  'ReviewController@deleteReview',
    'as'    =>  'delete-review'
]);






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
















