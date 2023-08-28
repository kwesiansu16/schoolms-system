<?php

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

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HobbyController@dashboard');
// dashboard main code
Route::get('/dashboard1', 'DashboardController@dashboard1');

//Route::get('/events', 'EventsController@create');
//Route::get('/events-table', 'EventsController@show');

//student end points
Route::get('/add-student', 'StudentsController@create');
Route::post('/sokostudents-store', 'StudentsController@store');
Route::get('/all-students', 'StudentsController@show')->middleware('auth');
Route::get('/sokostudents-edit/{id}',['as'=>'sokostudent.edit','uses'=>'StudentsController@edit']);
Route::post('/sokostudent_update/{id}',['as'=>'sokostudent.update','uses'=>'StudentsController@update']);
Route::get('/sokostudents-delete/{id}',['as'=>'sokostudent.delete','uses'=>'StudentsController@destroy']);
//Route::get('/student-profile/{id}','StudentsController@showdetails');
Route::get('/single-student',['as'=>'single.student','uses'=>'StudentsController@single_student']);
Route::get('/fee-form',['as'=>'sokostudent.fee','uses'=>'StudentsController@fee_form'])->middleware('auth');
Route::post('/fee-add', 'StudentsController@feeadd')->middleware('auth');
Route::get('/all-transactions', 'StudentsController@show_transactions')->middleware('auth');


// instructor end points
Route::get('/add-instructor', 'InstructorsController@create');
Route::post('/sokoinstructors-store', 'InstructorsController@store');
Route::get('/all-instructors', 'InstructorsController@show')->middleware('auth');
Route::get('/sokosinstructors-edit/{id}',['as'=>'sokoinstructor.edit','uses'=>'InstructorsController@edit']);
Route::post('/sokoinstructor_update/{id}',['as'=>'sokoinstructor.update','uses'=>'InstructorsController@update']);
Route::get('/sokoinstructors-delete/{id}',['as'=>'sokoinstructor.delete','uses'=>'InstructorsController@destroy']);

// department end points
Route::get('/add-department', 'DepartmentController@create');
Route::post('/departments-store', 'DepartmentController@store')->middleware('auth');
Route::get('/all-departments', 'DepartmentController@show')->middleware('auth');
Route::get('/departments-edit/{id}',['as'=>'department.edit','uses'=>'DepartmentController@edit']);
Route::post('/department_update/{id}',['as'=>'department.update','uses'=>'DepartmentController@update']);
Route::get('/departments-delete/{id}',['as'=>'department.delete','uses'=>'DepartmentController@destroy']);


//department program section

Route::get('/add-program','ProgramsController@create');
Route::post('/programs-store', 'ProgramsController@store');
Route::get('/all-programs', 'ProgramsController@show')->middleware('auth');
//Route::get('/program-edit/{id}',['as'=>'program.edit','uses'=>'ProgramsController@edit']);
//Route::post('/course_update/{id}',['as'=>'course.update','uses'=>'ProgramsController@update']);
//oute::post('/sokostudent/programs', 'StudentsController@courses');
Route::get('/programs-delete/{id}',['as'=>'program.delete','uses'=>'ProgramsController@destroy']);

//calendar
Route::get('/fullcalender', 'FullCalenderController@index');
Route::post('fullcalenderAjax','FullCalenderController@ajax');
Route::get('/all-events','FullCalenderController@show');



//Route::get('/hobby', 'HobbyController@index');
//Route::resource('/hobby', 'HobbyController');
/*
//Route::resource('/student-profile', 'StudentProfileController');
Route::resource('/tag', 'TagController');
//Route::get('/student-register', 'StudentController@create');
Route::post('/student-store', 'StudentController@store');
Route::get('/students-list', 'StudentController@show');
Route::get('/students-edit/{id}',['as'=>'student.edit','uses'=>'StudentController@edit']);
Route::post('/student_update/{id}',['as'=>'student.update','uses'=>'StudentController@update']);
Route::get('addbranch','BranchController@create');
Route::post('/branch-store', 'BranchController@store');
Route::get('/branch-details', 'BranchController@show');
Route::get('/branches-edit/{id}',['as'=>'branch.edit','uses'=>'BranchController@edit']);
Route::post('/branch_update/{id}',['as'=>'branch.update','uses'=>'BranchController@update']);

Route::get('/addcourse','CourseController@create');
Route::post('/course-store', 'CourseController@store');
Route::get('/courseshow', 'CourseController@show');
Route::post('/student/courses', 'StudentController@courses');

*/

//Route::get('/tutor-register','TutorController@create')
