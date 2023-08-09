<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Main routes

Route::get('/{home?}', 'HomeController@index')->where('home', '(home)?');
Auth::routes(['register' => false]);

//Auth 

Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/login', 'Auth\LoginController@login');

//Command and function

Route::get('/BCV', 'Components\CommandController@dollarValue');
Route::get('/admin/test', 'Components\TestController@index');
Route::get('/download/{folder}/{link_document}', 'Components\FileManagerController@routeDownload');
Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')->name('ckfinder_connector');
Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')->name('ckfinder_browser');
Route::get('/lang/{locale}', 'Components\CommandController@setLocale');

//Institutional 

Route::view('/ourinstitution', 'ourinstitution');
Route::view('/organization', 'organization');
Route::view('/simbology', 'simbology');
Route::view('/ourhistory', 'ourhistory');
Route::view('/contactus', 'contactus');
Route::get('/regulations', 'PublicDocumentsController@index');
Route::get('/oficialgazzette', 'PublicDocumentsController@gazzete');

//Departments and subsystems

Route::view('/rectorade', 'rectorade');
Route::view('/dptoinvest', 'dptoinvestigation');
Route::view('/vextension', 'vextension');
Route::view('/vice-rectorate/academic', 'vice_rectorates.academic');
Route::view('/comcurricula', 'comcurricula');
Route::view('/healthymental', 'healthymental');
Route::view('/healthystudent', 'healthystudent');
Route::view('/rrhh', 'humansrecurs');
Route::view('/vicerectorades', 'vicerectorades');
Route::view('/generalsecretariat', 'generalsecretariat');
Route::view('/controlstudies', 'controlstudies');
Route::view('/administration_dir', 'admindept');
Route::view('/communityserv', 'communityserv');

//Deaneries

Route::view('/deans', 'deans');
Route::view('/engineerie', 'deaneng');
Route::view('/ceys', 'deanceys');
Route::view('/cjyp', 'deancsjurpol');
Route::view('/humarte', 'deanhumarte');
Route::view('/genestud', 'deangenestudies');

//New and regular students

Route::view('/regularstudents', 'regularstudents');
Route::view('/graduations', 'graduation_review');
Route::view('/postgrades/newstudents', 'postgrades.newstudents');
Route::get('/newstudents', 'NewstudentController@show');
Route::get('/newstudents/equivalency', 'NewstudentController@showEquivalency');

//Study level information

Route::view('/study-offers', 'study_offers');
Route::view('/pregrade', 'pregrade');
Route::view('/postgeinvestig', 'postgeinvestig');
Route::view('/postgrade', 'dptopostgrade');
Route::view('/degreemodality', 'degreemodality');
Route::view('/services', 'servicesonline');

//Undergraduate careers

Route::get('/career/{degree}/{view_name}', 'Careers\UndergraduateController@viewCareer');

//Postgraduate careers

Route::group(['prefix' => 'postgrade', 'as' => 'postgrade'], function () {

    //Master

    Route::view('/master/forensic-audit', 'postgrades.master.forensic_audit');
    Route::view('/master/environmental-sciences', 'postgrades.master.environmental_sciences');
    Route::view('/master/criminal-procedural-law', 'postgrades.master.criminal_procedural_law');
    Route::view('/master/special-education-teaching', 'postgrades.master.special_education_teaching');
    Route::view('/master/social-sciences-teaching', 'postgrades.master.social_sciences_teaching');
    Route::view('/master/mathematics-teaching', 'postgrades.master.mathematics_teaching');
    Route::view('/master/spanish-teaching', 'postgrades.master.spanish_teaching');
    Route::view('/master/natural-sciences-teaching', 'postgrades.master.natural_sciences_teaching');
    Route::view('/master/custom-management', 'postgrades.master.custom_management');
    Route::view('/master/works-management-department', 'postgrades.master.work_management_department');
    Route::view('/master/elderly-care', 'postgrades.master.elderly_care');
    Route::view('/master/regional-history-venezuela', 'postgrades.master.regional_history_venezuela');
    Route::view('/master/spanish-foreign-languaje', 'postgrades.master.spanish_foreign_languaje');
    Route::view('/master/multimedia-journalism', 'postgrades.master.multimedia_journalism');

    //Doctorate

    Route::view('/doctorate/administrative-sciences', 'postgrades.doctorate.administrative_sciences');
    Route::view('/doctorate/educational-sciences', 'postgrades.doctorate.educational_sciences');
    Route::view('/doctorate/criminalforensic-sciences', 'postgrades.doctorate.criminalforensic_sciences');
    Route::view('/doctorate/engineering-renewable-energies', 'postgrades.doctorate.engineering_renewable_energies');
    Route::view('/doctorate/international-business', 'postgrades.doctorate.international_business');

    //Major

    Route::view('/major/finance-major', 'postgrades.major.finance_major');
    Route::view('/major/information-management', 'postgrades.major.information_management');
    Route::view('/major/health-care-services', 'postgrades.major.health_care_services');
    Route::view('/major/service-management', 'postgrades.major.service_management');
    Route::view('/major/educational-management', 'postgrades.major.educational_management');
    Route::view('/major/tax-management', 'postgrades.major.tax_management');
    Route::view('/major/occupational-health', 'postgrades.major.occupational_health');

});

//Academic dates

Route::view('/calendaracademy', 'calendaracademy');
Route::get('/eventsunimar', 'EventsUnimarController@index');

//Library

Route::view('/library', 'library');

//News panel

Route::group(['prefix' => 'newsunimar', 'as' => 'newsunimar'], function () {
    Route::get('/', 'NewsUnimarController@index');
    Route::get('/{category}/{title}/{id}', 'NewsUnimarController@shownew');
});

//Admin panel

Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {

    //Basic Auth

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', 'AdminController@index');
        Route::get('/home', 'AdminController@index');
        Route::get('/profile', 'UsersController@show');
        Route::get('/updateProfile', 'UsersController@updateProfile');
    });

    //Admin functions

    Route::middleware(["auth", "admin_user"])->group(function () {

        //Users

        Route::get('/users', 'UsersController@index');
        Route::post('/users', 'UsersController@store');
        Route::post('/users/update', 'UsersController@update');

        //Others

        Route::get('/clearcache', 'Components\CommandController@clearcache');
        Route::get('/updateusersdata', 'Components\CommandController@updateUsersData');

    });

    //Content functions

    Route::middleware(["auth", "content_user"])->group(function () {

        //Notifications

        Route::get('/notifications', 'NotificationController@index');
        Route::get('/addnotification', 'NotificationController@addnotification');
        Route::get('/notifications/disable/{idDel}', 'NotificationController@disable');
        Route::post('/addnotification', 'NotificationController@store');

        //News

        Route::get('/news', 'NewsController@index');
        Route::get('/addnews', 'NewsController@addnews');
        Route::post('/addnews/upload', 'NewsController@upload');
        Route::post('/news', 'NewsController@store');
        Route::post('/news/update', 'NewsController@update');

        //Events

        Route::get('/events', 'EventsController@index');
        Route::post('/events/create', 'EventsController@create');
        Route::post('/events/update', 'EventsController@update');
        Route::post('/events/destroy', 'EventsController@destroy');

        //Documents

        Route::get('/documents', 'PublicDocumentsController@adminDocuments');
        Route::post('/documents', 'PublicDocumentsController@store');
        Route::post('/documents/update', 'PublicDocumentsController@update');

        //Career Documents

        Route::get('/career_documents', 'Careers\CareerDocumentController@index');
        Route::post('/career_documents', 'Careers\CareerDocumentController@store');
        Route::post('/career_documents/update', 'Careers\CareerDocumentController@update');

    });

    //Employees

    Route::middleware(["auth", "employee_user"])->group(function () {
        Route::get('/employee/notifications', 'EmployeesController@notification');
    });

    //Students

    Route::middleware(["auth", "student_user"])->group(function () {
        Route::get('/student/grades', 'Students\GradesController@index');
        Route::get('/student/schedules', 'Students\SchedulesController@index');
        Route::get('/student/record', 'Students\RecordsController@index');
        Route::get('/student/inscriptions', 'Students\InscriptionsController@index');
        Route::get('/student/inscriptions/start', 'Students\InscriptionsController@redirectInscription');
        Route::get('/student/receipt', 'Students\ReceiptController@index');
    });

    //Teachers

    Route::middleware(["auth", "teacher_user"])->group(function () {

        //Notifications

        Route::get('/teacher/notifications', 'TeachersController@notification');

    });

    //Other 

    Route::post('/showtags', 'TagsController@getTagsNames');
    Route::get('/FormatPDF/{id}', 'Components\PDFController@view');
    Route::get('/donwload-file', 'HomeController@downloadFile');

});

//Special or temporal

Route::view('/poetry-contest', 'temporal.poetry_contest');
Route::view('/ORPANAC', 'temporal.orpanac');
Route::view('/admision-requirements', 'temporal.admision_requirements');
Route::view('/fcPayments', 'temporal.fc_payments');
Route::view('/view', 'temporal.graduation');
Route::view('promo', 'publicity.extra');
Route::view('/scientific-congress-I', 'temporal.scientific_congress_I');
Route::view('/promotion-audits-XXXVIII', 'temporal.promotion_audits_XXXVIII');
Route::view('/intensive-course-2023', 'temporal.intensive_course_2023');

//In construction

Route::view('/soc_com', 'soccom');
Route::view('/estprepareds', 'estprepareds');
Route::view('/agreements', 'agreements');
Route::view('/alumni', 'alumni');
Route::view('/payments', 'paymentsonline');
Route::view('/orgstructure', 'orgstructure');
