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
    Route::get('/Index','IndexController@Index')->name('Index');
    Route::get('/About','AboutController@About')->name('About');
    Route::get('/Contact','ContactUsController@Contact')->name('Contact');
    
    // Back End Admin dashboard route

    Route::get('/Dashboard','DashboardController@Dashboard')->name('Dashboard');

    Route::get('/Register','RegisterController@Register')->name('Register');

// medicin route
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

    Route::get('/DiseaseAdd','DiseaseController@DiseaseAdd')->name('DiseaseAdd');
    Route::get('/DiseaseShow','DiseaseController@DiseaseShow')->name('DiseaseShow');

    Route::get('/AllOrder','BuyMedicinController@AllOrder')->name('AllOrder');
    Route::get('/MedicinQuantity','BuyMedicinController@MedicinQuantity')->name('MedicinQuantity');

    Route::get('/StockOut','StockOutController@StockOut')->name('StockOut');

    Route::get('/MedicinRestore','RecycleController@MedicinRestore')->name('MedicinRestore');
    Route::get('/CompanyRestore','RecycleController@CompanyRestore')->name('CompanyRestore');
    Route::get('/DiseaseRestore','RecycleController@DiseaseRestore')->name('DiseaseRestore');

    