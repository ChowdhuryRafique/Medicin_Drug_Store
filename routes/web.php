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
    // Front End route
    Route::get('/','IndexController@Index')->name('Index');

    Route::get('/myorder','IndexController@myorder')->name('myorder');

    Route::get('/About','AboutController@About')->name('About');
    Route::get('/Contact','ContactUsController@Contact')->name('Contact');
    
    // Back End Admin dashboard route
    Route::post('/contact/Form','FromController@contacts')->name('contactform');
    Route::get('/message/Form','FromController@message')->name('message');

    

    Route::get('/Dashboard','DashboardController@Dashboard')->name('Dashboard');

    Route::get('/myRegister','auth\RegisterController@myRegister')->name('myRegister');
 
    Route::get('/login',function(){
        return view('BackEnd.AdminDashboard.login');
    });

// medicine route
    Route::get('/medicinAdd','MedicineController@medicineAdd')->name('medicineAdd');
    Route::post('/medicinCreate','MedicineController@medicinCreate')->name('medicinCreate');
    Route::get('/medicineShow','MedicineController@medicineShow')->name('medicineShow');
    Route::get('/delete/{id}','MedicineController@medicineDelete')->name('delete');
    Route::get('/Edit/{id}','MedicineController@medicineEdit')->name('Edit');
    Route::get('/MedicinEdit','MedicineController@medicineEdit')->name('MedicinEdit');
    Route::post('/update','MedicineController@medicineupdate')->name('update');

// company route
    Route::get('/CompanyAdd','CompanyController@CompanyAdd')->name('CompanyAdd');
    Route::get('/CompanyShow','CompanyController@CompanyShow')->name('CompanyShow');
    Route::post('/companyCreate','CompanyController@companyCreate')->name('companyCreate');
    Route::get('/delete/{id}','CompanyController@delete')->name('delete');
    Route::get('/company/Edit/{id}','CompanyController@companyEdit')->name('Edit');
    Route::get('/companyEdit','CompanyController@companyEdit')->name('companyEdit');
    Route::post('/companyUpadate','CompanyController@companyupdate')->name('update');





    Route::get('/DiseaseAdd','DiseaseController@DiseaseAdd')->name('DiseaseAdd');
    Route::get('/DiseaseShow','DiseaseController@DiseaseShow')->name('DiseaseShow');
    Route::post('/disease_create','DiseaseController@disease_create')->name('disease_create');
    Route::get('/disease/delete/{id}','DiseaseController@delete');
    Route::get('/disease/edit/{id}','DiseaseController@disease_edit');
    Route::post('/disease_update','DiseaseController@disease_update')->name('update');





    Route::get('/AllOrder','BuyMedicinController@AllOrder')->name('AllOrder');
    Route::get('/addcard','BuyMedicinController@addcard')->name('order');
    Route::post('/order_all','BuyMedicinController@order_all')->name('order_all');


    Route::get('/all/order/buy/{medicine_id}/{quantity}', 'BuyMedicinController@medicine_add_cart');


    Route::get('/MedicinQuantity','BuyMedicinController@MedicinQuantity')->name('MedicinQuantity');

    Route::get('/StockOut','StockOutController@StockOut')->name('StockOut');
    Route::get('/admin/all/order/buy/{medicine_id}/{quantity}', 'StockOutController@new_medicine_add');

    
    
    
    
    
    Route::get('admin/recycle/medicine/restore/{medicine_id}', 'RecycleController@recycle_bin_medicine_restore');
    Route::get('company/restore/{com_id}', 'RecycleController@recycle_bin_compnay_restore');
    Route::get('disease/restore/{dis_id}', 'RecycleController@recycle_bin_dis_restore');
    Route::get('/MedicinRestore','RecycleController@MedicinRestore')->name('MedicinRestore');
    Route::get('/CompanyRestore','RecycleController@CompanyRestore')->name('CompanyRestore');
    Route::get('/DiseaseRestore','RecycleController@DiseaseRestore')->name('DiseaseRestore');


    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//front page 

Route::post('/', 'ShoppingController@add_to_cart')->name('cart.add');
Route::post('/cart', 'ShoppingController@cart')->name('cart');

Route::get('/cart/delete/{id}', 'ShoppingController@cart_delete')->name('cart.delete');


Route::get('/cart/dec/{id}/{qty}', 'ShoppingController@dec')->name('cart.dec');
Route::get('/cart/incre/{id}/{qty}', 'ShoppingController@incre')->name('cart.incre');



