<?php

Route::get('/', 'IndexController@index')->name('/');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/service', 'IndexController@service')->name('service');
Route::get('/developer', 'IndexController@developer')->name('developer');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('/package', 'IndexController@package')->name('our-package');
Route::get('/pricing', 'IndexController@pricing')->name('pricing');
Route::get('/testSMS', 'IndexController@testSMS')->name('testSMS');

Route::get('/term', 'IndexController@term')->name('term');
Route::get('/support', 'IndexController@support')->name('support');

Route::get('/country/get-operator', 'IndexController@getOperator'); //ajax request
Route::get('/operator/get-rate', 'IndexController@getRate'); //ajax request


//Route::get('/visitor', 'Auth\LoginController@showVisitorLoginForm')->name('visitor.login');
//Route::get('/visitorReg', 'Auth\RegisterController@showVisitorRegisterForm')->name('visitor.register');
//
//Route::post('/login/visitor', 'Auth\LoginController@visitorLogin')->name('save.visitor.login');
//Route::post('/register/visitor', 'Auth\RegisterController@createVisitor')->name('save.visitor.register');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::group(['prefix' => 'admin'], function (){
    Route::get('/visitor', 'VisitorLoginController@index')->name('visitor.login');
    Route::post('/visitor/login', 'VisitorLoginController@visitorCheck')->name('visitor.loginCheck');
    Route::get('/visitor/register', 'VisitorLoginController@visitorRegister')->name('visitor.register');
    Route::post('/save/register', 'VisitorLoginController@saveRegister')->name('save.register');


    Route::middleware('auth:visitor')->group(function (){
        Route::get('/profile', 'ProfileController@profile')->name('profile');
//        Route::get('/dashboard', 'ProfileController@index')->name('admin.dashboard');
        Route::get('/visitor/logout', 'ProfileController@visitorLogout')->name('visitor.logout');

        //Your Package
        Route::get('/your/package', 'ProfileController@yourPackage')->name('your.package');
        Route::get('/your/sending', 'ProfileController@sending')->name('sending');
    });
//});

//Slider
Route::get('/add/slider', 'SliderController@addSlider')->name('add.slider');
Route::post('/save/slider', 'SliderController@saveSlider')->name('save.slider');
Route::get('/manage/slider', 'SliderController@manageSlider')->name('manage.slider');
Route::get('/edit/slider/{id}', 'SliderController@editSlider')->name('edit.slider');
Route::post('/update/slider', 'SliderController@updateSlider')->name('update.slider');
Route::post('/delete/slider', 'SliderController@deleteSlider')->name('delete.slider');

//Service
Route::get('/add/service/title', 'ServiceController@addServiceTitle')->name('add.service.title');
Route::post('/save/service/title', 'ServiceController@saveServiceTitle')->name('save.service.title');

Route::get('/add/service', 'ServiceController@addService')->name('add.service');
Route::post('/save/service', 'ServiceController@saveService')->name('save.service');
Route::get('/manage/service', 'ServiceController@manageService')->name('manage.service');
Route::get('/edit/service/{id}', 'ServiceController@editService')->name('edit.service');
Route::post('/update/service', 'ServiceController@updateService')->name('update.service');
Route::post('/delete/service', 'ServiceController@deleteService')->name('delete.service');

//Why Choose
Route::get('/add/choose/title', 'ChooseController@addChooseTitle')->name('add.choose.title');
Route::post('/save/choose/title', 'ChooseController@saveChooseTitle')->name('save.choose.title');

Route::get('/add/choose', 'ChooseController@addChoose')->name('add.choose');
Route::post('/save/choose', 'ChooseController@saveChoose')->name('save.choose');
Route::get('/manage/choose', 'ChooseController@manageChoose')->name('manage.choose');
Route::get('/edit/choose/{id}', 'ChooseController@editChoose')->name('edit.choose');
Route::post('/update/choose', 'ChooseController@updateChoose')->name('update.choose');
Route::post('/delete/choose', 'ChooseController@deleteChoose')->name('delete.choose');
//Join SMS
Route::get('/add/join/sms', 'JoinController@addJoinSMS')->name('add.join');
Route::post('/save/join/sms', 'JoinController@saveJoinSMS')->name('save.join');

//Client Love
Route::get('/add/client/title', 'ClientController@addClientTitle')->name('add.client.title');
Route::post('/save/client/title', 'ClientController@saveClientTitle')->name('save.client.title');

Route::get('/add/client', 'ClientController@addClient')->name('add.client');
Route::post('/save/client', 'ClientController@saveClient')->name('save.client');
Route::get('/manage/client', 'ClientController@manageClient')->name('manage.client');
Route::get('/edit/client/{id}', 'ClientController@editClient')->name('edit.client');
Route::post('/update/client', 'ClientController@updateClient')->name('update.client');
Route::post('/delete/client', 'ClientController@deleteClient')->name('delete.client');

//Footer
Route::get('/add/footer', 'FooterController@addFooter')->name('add.footer');
Route::post('/save/footer', 'FooterController@saveFooter')->name('save.footer');

//About Us
Route::get('/add/about', 'AboutController@addAbout')->name('add.about');
Route::post('/save/about', 'AboutController@saveAbout')->name('save.about');

Route::get('/add/feature', 'AboutController@addFeature')->name('add.feature');
Route::post('/save/feature', 'AboutController@saveFeature')->name('save.feature');
Route::get('/manage/feature', 'AboutController@manageFeature')->name('manage.feature');
Route::get('/edit/feature/{id}', 'AboutController@editFeature')->name('edit.feature');
Route::post('/update/feature', 'AboutController@updateFeature')->name('update.feature');
Route::post('/delete/feature', 'AboutController@deleteFeature')->name('delete.feature');

Route::get('/add/feature/bg', 'AboutController@addFeatureBG')->name('add.feature.bg');
Route::post('/save/feature/bg', 'AboutController@saveFeatureBG')->name('save.feature.bg');

//Developer API
Route::get('/add/developer/title', 'DeveloperController@addDeveloperTitle')->name('add.developer.title');
Route::post('/save/developer/title', 'DeveloperController@saveDeveloperTitle')->name('save.developer.title');

Route::get('/add/feature/one/bg', 'DeveloperController@addFeatureOneBG')->name('add.feature.one.bg');
Route::post('/save/feature/one/bg', 'DeveloperController@saveFeatureOneBG')->name('save.feature.one.bg');

Route::get('/add/feature/one', 'DeveloperController@addFeatureOne')->name('add.feature.one');
Route::post('/save/feature/one', 'DeveloperController@saveFeatureOne')->name('save.feature.one');
Route::get('/manage/feature/one', 'DeveloperController@manageFeatureOne')->name('manage.feature.one');
Route::get('/edit/feature/one/{id}', 'DeveloperController@editFeatureOne')->name('edit.feature.one');
Route::post('/update/feature/one', 'DeveloperController@updateFeatureOne')->name('update.feature.one');
Route::post('/delete/feature/one', 'DeveloperController@deleteFeatureOne')->name('delete.feature.one');

Route::get('/add/feature/two', 'DeveloperController@addFeatureTwo')->name('add.feature.two');
Route::post('/save/feature/two', 'DeveloperController@saveFeatureTwo')->name('save.feature.two');
Route::get('/manage/feature/two', 'DeveloperController@manageFeatureTwo')->name('manage.feature.two');
Route::get('/edit/feature/two/{id}', 'DeveloperController@editFeatureTwo')->name('edit.feature.two');
Route::post('/update/feature/two', 'DeveloperController@updateFeatureTwo')->name('update.feature.two');
Route::post('/delete/feature/two', 'DeveloperController@deleteFeatureTwo')->name('delete.feature.two');

//Country
Route::get('/add/country', 'CountryController@addCountry')->name('add.country');
Route::post('/save/country', 'CountryController@saveCountry')->name('save.country');
Route::get('/manage/country', 'CountryController@manageCountry')->name('manage.country');
Route::get('/edit/country/{id}', 'CountryController@editCountry')->name('edit.country');
Route::post('/update/country', 'CountryController@updateCountry')->name('update.country');
Route::post('/delete/country', 'CountryController@deleteCountry')->name('delete.country');

//Operator
Route::get('/add/operator', 'OperatorController@addOperator')->name('add.operator');
Route::post('/save/operator', 'OperatorController@saveOperator')->name('save.operator');
Route::get('/manage/operator', 'OperatorController@manageOperator')->name('manage.operator');
Route::get('/edit/operator/{id}', 'OperatorController@editOperator')->name('edit.operator');
Route::post('/update/operator', 'OperatorController@updateOperator')->name('update.operator');
Route::post('/delete/operator', 'OperatorController@deleteOperator')->name('delete.operator');

//Test SMS
Route::get('/add/test/sms', 'TestSMSController@addTestSMS')->name('add.test.sms');
Route::post('/save/test/sms', 'TestSMSController@saveTestSMS')->name('save.test.sms');

//Terms & Conditions
Route::get('/add/term/title', 'TermController@addTermTitle')->name('add.term.title');
Route::post('/save/term/title', 'TermController@saveTermTitle')->name('save.term.title');

Route::get('/add/term', 'TermController@addTerm')->name('add.term');
Route::post('/save/term', 'TermController@saveTerm')->name('save.term');
Route::get('/manage/term', 'TermController@manageTerm')->name('manage.term');
Route::get('/edit/term/{id}', 'TermController@editTerm')->name('edit.term');
Route::post('/update/term', 'TermController@updateTerm')->name('update.term');
Route::post('/delete/term', 'TermController@deleteTerm')->name('delete.term');

//Support
Route::get('/add/support/title', 'SupportController@addSupportTitle')->name('add.support.title');
Route::post('/save/support/title', 'SupportController@saveSupportTitle')->name('save.support.title');

Route::get('/add/support', 'SupportController@addSupport')->name('add.support');
Route::post('/save/support', 'SupportController@saveSupport')->name('save.support');
Route::get('/manage/support', 'SupportController@manageSupport')->name('manage.support');
Route::get('/edit/support/{id}', 'SupportController@editSupport')->name('edit.support');
Route::post('/update/support', 'SupportController@updateSupport')->name('update.support');
Route::post('/delete/support', 'SupportController@deleteSupport')->name('delete.support');

//Package Pricing
Route::get('/add/package/title', 'PackageController@addPackageTitle')->name('add.package.title');
Route::post('/save/package/title', 'PackageController@savePackageTitle')->name('save.package.title');

Route::get('/add/package', 'PackageController@addPackage')->name('add.package');
Route::post('/save/package', 'PackageController@savePackage')->name('save.package');
Route::get('/manage/package', 'PackageController@managePackage')->name('manage.package');
Route::get('/edit/package/{id}', 'PackageController@editPackage')->name('edit.package');
Route::post('/update/package', 'PackageController@updatePackage')->name('update.package');
Route::post('/delete/package', 'PackageController@deletePackage')->name('delete.package');

//Contact
Route::get('/add/contact', 'ContactController@addContact')->name('add.contact');
Route::post('/save/contact', 'ContactController@saveContact')->name('save.contact');
