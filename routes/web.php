<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddListingController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// routes/web.php

Route::get('/', [LandingPageController::class, 'index'])->name('HomePage');

// Route::view('/homepage', 'index');

// Register
Route::get('Register', [AuthController::class , 'showRegister'])->name('RegistrationPage');
Route::post('Register', [AuthController::class , 'Register'])->name('register');

// Login
Route::get('Login', [AuthController::class , 'showLogin'])->name('LoginPage');
Route::post('Login', [AuthController::class , 'Login'])->name('login');

//Logout
Route::get('Logout',[AuthController::class , 'logout'])->name('LogOut');  

// Add Listing      
Route::view('admin/listings', 'admin.admin-dashboard-add-listings')->name('AddListing');

// Messages
Route::view('Messages', 'dashboard.page-dashboard-messages')->name('Messages');

// Customers
Route::get('customers', [AuthController::class, 'customers'])->name('admin.customers');

// Companies-login
Route::get('company/login', [CompanyController::class, 'companylogin'])->name('showcompany.login');

Route::post('company/login', [CompanyController::class, 'logincompany'])->name('login.company');

// Companies-signup
Route::get('company/signup', [CompanyController::class, 'companysignup'])->name('showcompany.signup');

Route::post('company/signup', [CompanyController::class, 'RegisterCompany'])->name('company.signup');

// company profile update
Route::put('company/profile',  [CompanyController::class, 'updatecompanyprofile'])->name('update.companies.profile');

Route::group(['middleware' => ['auth', 'company']], function (){
     
    Route::get('company/dashboard',  [CompanyController::class, 'showcompanydashboard'])->name('companies.dashboard');

    Route::get('company/orders',  [CompanyController::class, 'showcompanyorders'])->name('companies.orders');

    Route::get('company/profile',  [CompanyController::class, 'showcompanyprofile'])->name('companies.profile');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('customers', [AuthController::class, 'customers'])->name('admin.customers');

    Route::get('company',[AuthController::class,'companies'])->name('admin.companies');

    Route::get('admin/dashboard',[AdminController::class , 'showadmindashboard'])->name('admin.dashboard'); 

    Route::get('admin/profile', [AdminController::class,'showadminprofile'])->name('admin.profile');

    Route::get('admin/addlisting', [AdminController::class, 'showadminaddlisting'])->name('admin.addlisting');

    Route::get('admin/listings', [AdminController::class,'showcarslistings'])->name('admin.carslistings');

    Route::get('admin/messages', [AdminController::class, 'showadminmessages'])->name('admin.messages');
});

Route::post('admin/addlisting', [AddListingController::class, 'store'])->name('add.listing');

Route::group(['middleware' => ['auth', 'user']], function () {
    // Dashboard
    Route::get('dashboard', [UserController::class,'userdashboard'])->name('DashBoard');
    // My Listings
    Route::get('MyOrders',[UserController::class,'showbookings'])->name('MyListings');
    // Edit Profile
    Route::put('/profile/update', [UserController::class,'update'])->name('profile.update');
    // userprofile
     Route::get('profile', [UserController::class,'ShowProfile'])->name('UserProfile');
     // Favourites 
     Route::get('favourites', [UserController::class,'favourites'])->name('Favourites');
});
Route::get('verify', [AuthController::class,'verify'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}',function(EmailVerificationRequest $request){
    $request->fulfill();

    return redirect(route('LoginPage'));
})->middleware(['auth','user'])->name('verification.verify');

Route::get('cars/{id}', [ListingController::class,'showlist'])->name('show.listing');

Route::get('listingV1', [ListingController::class,'listingv1'])->name('listingv1');

// Bookings
Route::post('book-car', [AuthController::class,'booking'])->name('book.car'); 

