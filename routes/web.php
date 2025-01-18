<?php

// Leader
use App\Http\Controllers\Leader\AdminTourBookingController;
// Admin
use App\Http\Controllers\Admin\AccommodationController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\AirlineTicketController;
use App\Http\Controllers\Admin\AirlineTicketProviderController;
use App\Http\Controllers\Admin\AirportController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\DayItineraryController;
use App\Http\Controllers\Admin\FeeController;
use App\Http\Controllers\Admin\FinancialReportController;
use App\Http\Controllers\Admin\GtiController;
use App\Http\Controllers\Admin\GuideController;
use App\Http\Controllers\Admin\GuideReservationController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\LeaderFlightController;
use App\Http\Controllers\Admin\MediaAssignController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PassengerIdController;
use App\Http\Controllers\Admin\PassengerInformationController;
use App\Http\Controllers\Admin\PassengerInformationsController;
use App\Http\Controllers\Admin\PassengerPaymentController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\SightController;
use App\Http\Controllers\Admin\SightDistantController;
use App\Http\Controllers\Admin\SightReservationController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\SupplierTypeController;
use App\Http\Controllers\Admin\Tour\DayItineraryController as TourDayItineraryController;
use App\Http\Controllers\Admin\Tour\DestinationController;
use App\Http\Controllers\Admin\Tour\TourCategoryController;
use App\Http\Controllers\Admin\Tour\TourController;
use App\Http\Controllers\Admin\TourLeaderController;
use App\Http\Controllers\Admin\TourLeaderTourController;
use App\Http\Controllers\Admin\TransportationCarController;
use App\Http\Controllers\Admin\TransportCostController;
use App\Http\Controllers\Admin\TransportReservationController;
use App\Http\Controllers\Admin\TransportTypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\GenerateBrochureController;
use App\Http\Controllers\Hotel\HotelReservationController;
use App\Http\Controllers\Passenger\ArrangeFlightController;
use App\Http\Controllers\Passenger\ArrangeHotelController;
use App\Http\Controllers\Passenger\PassengerReportController;
use App\Http\Controllers\Passenger\SpecialRequestController;
use App\Http\Controllers\Transport\GroundTransportReservationController;
use App\Models\Destination;
use Illuminate\Support\Facades\Artisan;
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



require __DIR__.'/auth.php';

Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/clear-cache', function() {
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
    return "Cleared!";
});

Route::get('/passenger_id', [PassengerIdController::class,'index']);


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::group(['middleware'=>['auth']],function (){
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource('/user', UserController::class);

    Route::resource('/tourleaders', TourLeaderController::class);
    Route::resource('/tourleader_tour', TourLeaderTourController::class);
    Route::resource('/country', CountryController::class);
    Route::resource('/city', CityController::class);
    Route::resource('/activity', ActivityController::class);

    Route::resource('/sight_list', SightController::class);
    Route::resource('/sight_distant', SightDistantController::class);
    Route::resource('/sight_reservation', SightReservationController::class);

    Route::resource('/assign_media', MediaAssignController::class);

    Route::resource('/guide', GuideController::class);
    Route::resource('/reserve_guide', GuideReservationController::class);
    Route::resource('/supplier', SupplierController::class);
    Route::resource('/type_supplier', SupplierTypeController::class);
    Route::resource('/airport', AirportController::class);
    Route::resource('/gti', GtiController::class);/*General Tour Itinerary*/
    Route::resource('/itinerary', DayItineraryController::class);

    Route::resource('/hotel', HotelController::class);
    Route::resource('/accommodation', AccommodationController::class);
    Route::resource('/fee', FeeController::class);
    Route::resource('/reservation', ReservationController::class);
    Route::resource('/reservation', ReservationController::class);
    Route::post('/reservation/{id}', [ReservationController::class, 'confirm'])->name('confirm');
    Route::post('/transport_reservation/{id}', [GroundTransportReservationController::class, 'confirm'])->name('transport_reservation');

    Route::resource('/ticketprovider', AirlineTicketProviderController::class);
    Route::resource('/ticket_list', AirlineTicketController::class);

    Route::resource('/media', MediaController::class);

    Route::resource('/passenger', PassengerInformationsController::class);
    Route::get('/suplier/pass_to_be_ticket', [PassengerInformationsController::class, 'pass_to_be_ticket'])->name('passenger.pass_to_be_ticket');
    Route::resource('/method_payment', PaymentMethodController::class);
    Route::resource('/payment_passenger', PassengerPaymentController::class);
    Route::resource('/financial_report', FinancialReportController::class);
    Route::resource('/special_request', SpecialRequestController::class);

    Route::resource('/cartype', TransportationCarController::class);
    Route::resource('/transportationtype', TransportTypeController::class);
    Route::resource('/cost_transport', TransportCostController::class);
    Route::resource('/reservetransport', TransportReservationController::class);
    //Route::resource('/ground_transport', GroundTransportReservationController::class);

    Route::resource('/flight_reservation', LeaderFlightController::class);

    //Passenger
    Route::resource('/flight_arrangement', ArrangeFlightController::class);
    Route::resource('/hotel_arrangement', ArrangeHotelController::class);

    //Tour Leader
    Route::resource('/tour_booking', AdminTourBookingController::class);
    Route::resource('/generate_brochure', GenerateBrochureController::class);


    //Tour Planner module
    Route::prefix("manage-tour")->group(function(){
        Route::resource("/tour", TourController::class);
        Route::resource("/destination-category", TourCategoryController::class);
        Route::resource("/destination", DestinationController::class);
        Route::resource("/tour/{tour}/tourItinerary", TourDayItineraryController::class)->names('tour.itinerary');
    });



    //ajax
    Route::get('/get_gti_total_days/{id}', [GtiController::class, 'get_gti_total_days'])->name('get_gti_total_days');

});

Route::get('/tour_leader/signup', [TourLeaderController::class, 'signup'])->name('signup');
Route::post('/tour_leader/signup', [TourLeaderController::class, 'postSignup'])->name('register');

Route::get('/new_passenger/signup', [PassengerInformationController::class, 'signup'])->name('passenger_signup');
Route::post('/new_passenger/signup', [PassengerInformationController::class, 'postSignup'])->name('passenger_register');

