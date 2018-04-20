<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] ='frontend';
$route['404_override']       = 'general/not_found';
$route['404']                = 'general/not_found';
$route['translate_uri_dashes'] = FALSE;

/* CMS routes */
/* General controller for public use*/
$route['forget_password']   ='general/forget_password';
$route['change_password/(:any)/(:any)']='general/change_password/$1/$2';
$route['reset_password']    ='general/reset_password';

/* login routes*/
$route['student-mail-login/(:any)/(:any)']      ='login/loginByEmail/$1/$2';
$route['login/(:any)']      ='login/$1';
$route['login']             ='login';
$route['check-details']     ='login/check_login_detail';
$route['logout']            ='login/logout';
/* home routes*/
$route['home']              ='home';

/* users */
$route['users']             ='users';
$route['users/add_user']          ='users/add_new';
$route['users/profile/(:any)']    ='users/edit_user/$1';
$route['save_user']         ='users/save_record';
$route['delete_user/(:any)']='users/delete_record/$1';

$route['users/user_type_list']='users/user_type_list';
$route['users/edit_user_type_list']='users/edit_user_type_list';
$route['users/save_user_type']='users/save_user_type';


/* Mail Settings*/
$route['mail_settings']     ='mail_settings';
$route['save_mail_settings']='mail_settings/save_record';

/*============= Backend Routes ==========================*/


/*============= Frontend Routes =========================*/

$route['frontend_logout']='frontend/logout';
$route['sign-in']='frontend/signin';
$route['validate_login']='';

$route['user-sign-up']='frontend/user_signup';
$route['tutor-sign-up']='frontend/tutor_signup';
$route['institute-sign-up']='frontend/institute_signup';

$route['add_student']='frontend/add_student';
$route['add_institute']='frontend/add_institute';
$route['add_tutor']='frontend/add_tutor';

$route['fb_auth']='facebook_auth';
$route['change_password']='frontend/change_password';

# student
$route['student_home']='student';
$route['select_exam']='student/select_exam';
$route['about_exam/(:any)']='student/about_exam/$1';
$route['start_exam/(:any)']='student/start_exam/$1';
$route['student_profile']='student/student_profile';
$route['exam_result']='student/exam_result';
$route['exam_result_chart/(:any)']='student/exam_result_chart/$1';
$route['show_result/(:any)']='student/show_result/$1';
$route['my_score']='student/my_score';
$route['ebooks']='student/ebooks';
$route['ebook_details']='student/ebook_details';
$route['search']='student/search';
$route['addFlag']='student/setQuestionFlag';

# turor/Institute
$route['educational']='educational';
$route['test_categories']='eductional/test_categories';
$route['add_test_categories']='educational/add_test_categories';
$route['edit_test_categories/(:any)']='educational/edit_test_categories/$1';
$route['save_test_categories']='educational/save_test_categories';
$route['delete_test_category/(:any)']='educational/delete_test_category/$1';




$route['test_questions']='educational/test_questions';
$route['add_test_questions']='educational/add_test_questions';
$route['edit_test_questions/(:any)']='educational/edit_test_questions/$1';
$route['save_test_questions']='educational/save_test_questions';
$route['delete_test_question/(:any)']='educational/delete_test_question/$1';

$route['educational/students']      = 'educational/students';
$route['educational/add_students']  = 'educational/add_student';
$route['edit_student/(:any)']       = 'educational/edit_student/$1';
$route['educational/save_student']  = 'educational/save_student';
$route['educational/sendmail']  = 'educational/testMail';


$route['educational/check-result']  = 'educational/resultList';
$route['educational/student_score']  = 'educational/student_score';
$route['educational/show_result']  = 'educational/show_result';
$route['educational/exam_result_chart']  = 'educational/exam_result_chart';

$route['delete_student/(:any)']  = 'educational/delete_student';


$route['educational/course']='educational/add_course';
$route['educational/save_course']='educational/save_course';
$route['educational/delete_course']='educational/delete_course';

$route['educational/subject']='educational/add_subject';
$route['educational/save_subject']='educational/save_subject';
$route['educational/delete_subject']='educational/delete_subject';

$route['educational/test_add_exam_questions']='educational/test_add_exam_questions';
