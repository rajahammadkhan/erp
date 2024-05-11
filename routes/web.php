    <?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\userController;
use App\http\controllers\CRUDController;
use App\http\controllers\RegisterController;
use App\Http\Controllers\Management\Quiz\QuizController;
use App\Http\Controllers\Management\Quiz\AssignQuizController;
use App\Http\Controllers\Management\Quiz\CheckQuizController;
use App\Http\Controllers\Management\Order\OrderController;
use App\Http\Controllers\Management\Announcement\AnnouncementController;
use App\Http\Controllers\Management\NewOrder\NewOrderController;
use App\Http\Controllers\Management\OrderSettings\AcademicLevel\AcademicLevelController;
use App\Http\Controllers\Management\OrderSettings\PaperType\PaperTypeController;
use App\Http\Controllers\Management\OrderSettings\LanguageStyle\LanguageStyleController;
use App\Http\Controllers\Management\OrderSettings\SubjectType\SubjectTypeController;
use App\Http\Controllers\Management\OrderSettings\Citation_Style\Citation_StyleController;
use App\Http\Controllers\Management\OrderSettings\DocumentType\DocumentTypeController;
use App\Http\Controllers\Management\OrderSettings\PaperFormat\PaperFormatController;
use App\Http\Controllers\Management\AvailableOrders\AvailableOrdersController;
use App\Http\Controllers\Management\demo\demoController;
use App\Http\Controllers\Management\InProgressOrders\InProgressOrdersController;
use App\Http\Controllers\Management\Completed\CompletedController;
use App\Http\Controllers\Management\Revisions\RevisionsController;
use App\Http\Controllers\Management\OtherOrders\OtherOrdersController;
use App\Http\Controllers\Management\OrderDetail\OrderDetailController;
use App\Http\Controllers\Management\workflow\workflowController;
use App\Http\Controllers\Management\commission\commissionController;
use App\Http\Controllers\Management\ManageOrders\CreateOrder\CreateOrderController;
use App\Http\Controllers\Management\users\usersController;
use App\Http\Controllers\Management\order_admin\OrderAdminController;
use App\Http\Controllers\Worker\Quiz\QuizControllers;


use App\Http\Controllers\Worker\ManageMessage\ManageMessageController;
use App\Http\Controllers\Worker\ManageFiles\ManageFilesController;
use App\Http\Controllers\Worker\Accounting\AccountingController;
use App\Http\Controllers\Worker\myprofile\myprofileController;
use App\Http\Controllers\Worker\order_worker\OrderWorkerController;

use App\Http\Controllers\Management\myprofileAdmin\myprofileAdminController;
use App\Http\Controllers\Management\Quiz\QuestionsController;



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
    return view('welcome');
});
// Admin Routes *****************************************************************************
Route::get('dashboard', function () {
    return view('welcome');
});

Route::resource('question',QuestionsController::class);

Route::get("user/{id}", [usercontroller::class,'show']);
Route::resource('login', RegisterController::class);
Route::resource('quiz', QuizController::class);
Route::resource('assignquiz', AssignQuizController::class);
Route::resource('checkquiz', CheckQuizController::class);
Route::resource('order', OrderController::class);
Route::resource('announcement', AnnouncementController::class);
Route::resource('new_order', NewOrderController::class);
Route::resource('academic_level', AcademicLevelController::class);
Route::resource('paper_type', PaperTypeController::class);
Route::resource('language_style', LanguageStyleController::class);
Route::resource('subject_type', SubjectTypeController::class);
Route::resource('citation_style', Citation_StyleController::class);
Route::resource('document_type', DocumentTypeController::class);
Route::resource('paper_format', PaperFormatController::class);
Route::resource('AvailableOrders', AvailableOrdersController::class);
Route::resource('demo', demoController::class);
Route::resource('inprogress_order', InProgressOrdersController::class);
Route::resource('completed', CompletedController::class);
Route::resource('revisions', RevisionsController::class);
Route::resource('other_Orders', OtherOrdersController::class);
Route::resource('OrderDetail', OrderDetailController::class);
Route::resource('workflow', workflowController::class);
Route::resource('commission', commissionController::class);
Route::resource('users', usersController::class);
Route::resource('create_order', OrderAdminController::class);










// Worker Routes *****************************************************************************

Route::get('user_dashboard', function () {
    return view('worker/dashboard/index');
});


Route::get('/required_quiz',[QuizControllers::class, 'required']);
Route::get('/compeleted_quiz',[QuizControllers::class, 'compeleted']);

Route::get('/create_order_worker',[OrderWorkerController::class, 'create_order_worker']);
Route::get('/new_order_worker',[OrderWorkerController::class, 'new_order_worker']);
Route::get('/compeleted_order_worker',[OrderWorkerController::class, 'compeleted_order_worker']);
Route::get('/inprogress_order_worker',[OrderWorkerController::class, 'inprogress_order_worker']);
Route::get('/revesion_worker',[OrderWorkerController::class, 'revision_worker']);
Route::get('/others_worker',[OrderWorkerController::class, 'others_worker']);
Route::resource('myprofileAdmin', myprofileAdminController::class);


Route::get('/create_order_admin',[OrderAdminController::class, 'create_order']);
Route::get('/new_order_admin',[OrderAdminController::class, 'new_order']);
Route::get('/compeleted_order_admin',[OrderAdminController::class, 'compeleted_order']);
Route::get('/inprogress_order_admin',[OrderAdminController::class, 'inprogress_order']);
Route::get('/revesion_admin',[OrderAdminController::class, 'revision']);
Route::get('/others_admin',[OrderAdminController::class, 'others']);







Route::resource('take_quiz', QuizControllers::class);
Route::resource('view_quiz', QuizControllers::class);
Route::resource('manage_message', ManageMessageController::class);
Route::resource('manage_files', ManageFilesController::class);
Route::resource('accounting', AccountingController::class);
Route::resource('myprofile', myprofileController::class);
Route::resource('order_worker', OrderWorkerController::class);
Route::resource('create_order_worker', OrderWorkerController::class);















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


