<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['student-mail-login/(:any)']      ='login/loginByEmail/$1';
$route['login/(:any)']      ='login/$1';
$route['login']             ='login';
//$route['check-details']     ='login/check_login_detail';
$route['check-details']     ='login/checkLogin';
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

$route['user-sign-up']='frontend/user_signup';
$route['tutor-sign-up']='frontend/tutor_signup';
$route['institute-sign-up']='frontend/institute_signup';

$route['add_student']='frontend/add_student';
$route['add_institute']='frontend/add_institute';
$route['add_tutor']='frontend/add_tutor';

$route['fb_auth']='facebook_auth';
$route['change_password']='frontend/change_password';

# student
$route['student_home']='student/select_exam';
$route['vprep_home']='student/vprep_home';
$route['engage_home']='educational/engage_home';
$route['test_json']='educational/test_json';
$route['post_json']='educational/post_json';
$route['add_vote']='educational/add_vote';
$route['weekly_json']='educational/weekly_json';
$route['select_exam']='student/select_exam';
$route['about_exam/(:any)']='student/about_exam/$1';
$route['start_exam/(:any)']='student/start_exam/$1';
$route['sample_test/(:any)']='student/sample_test/$1';
$route['testForAll/start']='student/open_test';

$route['read_exam_data']='student/read_exam_data';
$route['read_ans_json']='student/read_ans_json';
$route['save_exam_json']='student/save_exam_json';
$route['progress_exam/(:any)']='student/progress_exam/$1';
$route['test_start_exam/(:any)']='student/test_start_exam/$1';
$route['top_score/(:any)']='student/top_ten_scorer/$1';
$route['dummy_start_exam/(:any)']='student/dev_start_exam/$1';
$route['student/leaderboard']='student/leaderboard';
$route['student/leaderboard1/(:any)']='student/leaderboard1/$1';



$route['student_profile']='student/student_profile';
$route['manage-profile']='student/update_profile';
$route['change-password']='student/changePassword';
$route['student/save-profile']='student/save_profile_update';
$route['student/pricing']='student/pricing';
$route['success00_vprep_payment/(:any)']='student/success00_vprep_payment/$1';

$route['cancelled00_vprep_payment/(:any)']='student/cancelled00_vprep_payment/$1';

$route['failed00_vprep_payment/(:any)']='student/failed00_vprep_payment/$1';




$route['save_exam_result']='student/save_exam_result';
$route['save_exam_result2']='student/save_exam_result2';
$route['exam_result']='student/exam_result';
$route['exam_result_chart/(:any)']='student/exam_result_chart/$1';
$route['show_result/(:any)']='student/show_result/$1';
$route['submit_show_result/(:any)']='student/submit_show_result/$1';
$route['my_score']='student/my_score';
$route['search']='student/search';
$route['addFlag']='student/setQuestionFlag';
$route['institute-details/(:any)']='student/instituteDetail/$1';

# turor/Institute
$route['educational']='educational';
 
$route['test_categories']='eductional/test_categories';
$route['educational/test_categories/(:any)']='eductional/test_categories/$1';

$route['getSubModule']='eductional/getSubModule';
$route['add_test_categories']='educational/add_test_categories';
$route['edit_test_categories/(:any)']='educational/edit_test_categories/$1';
$route['save_test_categories']='educational/save_test_categories';
$route['delete_test_category/(:any)']='educational/delete_test_category/$1';

$route['test_questions']='educational/test_questions';
$route['educatioanl/test_questions/(:any)']='educational/test_questions/$1';

$route['add_test_questions']='educational/add_test_questions';
$route['edit_test_questions/(:any)']='educational/edit_test_questions/$1';
$route['save_test_questions']='educational/save_test_questions';
$route['save_edited_test_questions']='educational/save_edited_test_questions';
$route['delete_test_question/(:any)']='educational/delete_test_questions/$1';

$route['educational/students']      = 'educational/students';
$route['educational/add_students']  = 'educational/add_student';
$route['educational/add_new_post'] = 'educational/add_new_post';
$route['educational/add_new_poll'] = 'educational/add_new_poll';
$route['educational/get_weekly_post'] = 'educational/get_weekly_post';
$route['educational/add_post_reply'] = 'educational/add_post_reply';
$route['edit_student/(:any)']       = 'educational/edit_student/$1';
$route['educational/save_student']  = 'educational/save_student';
$route['educational/sendmail']  = 'educational/testMail';

$route['educational/check-result']  = 'educational/resultList';
$route['educational/notification'] = 'educational/notificationList';
$route['educational/student_score']  = 'educational/student_score';
$route['educational/show_result']  = 'educational/show_result';
$route['educational/exam_result_chart']  = 'educational/exam_result_chart';

$route['educational/profile']='educational/intitute_profile';
$route['educational/manage-profile']='educational/update_profile';
$route['educational/change-password']='educational/changePassword';
$route['educational/save-profile']='educational/save_profile_update';
$route['educational/add-notification']='educational/addNotification';

/////////////////////////////////////////////////////////////////

$route['educational/getSubject']='educational/getSubject';
//$route['educational/getMoreSubject']='educational/getMoreSubject';
//$route['educational/getSubjectJson']='educational/getSubjectJson';
$route['educational/getExam']='educational/getExamList';
$route['educational/getModule']='educational/getModuleList';
$route['educational/getSubModule']='educational/getSubModuleList';

/////////////////////////////////////////////////////////////////

$route['delete_student/(:any)']  = 'educational/delete_student';

$route['educational/course']='educational/course_list';
$route['educational/new-course']='educational/add_course';
$route['educational/edit-course/(:any)']='educational/edit_course/$1';

$route['educational/save_course']='educational/save_course';
$route['educational/delete_course']='educational/delete_course';

/////////////////////////////////////////////////////////////////////////

$route['educational/subject']='educational/subject_list';
$route['educational/addsubject']='educational/add_subject';
$route['educational/save_subject']='educational/save_subject';
$route['educational/delete_subject']='educational/delete_subject';

$route['educational/edit-subject/(:any)']='educational/edit_subject/$1';

////// Modules ///////////////////////////////////////////////////////////////////

$route['educational/module']='educational/moduleList';
$route['educational/new-module']='educational/addModule';

////// Sub Modules ///////////////////////////////////////////////////////////////////////////

$route['educational/submodule']='educational/submoduleList';
$route['educational/new-sub-module']='educational/addSubModule';

/////////////////////////////////////////////////////////////////////////

$route['educational/exam_list']='educational/exam_list';
$route['educational/leaderboard/(:any)/(:any)']='educational/exam_leaderboard/$1/$2';
$route['educational/create_new_exam']='educational/create_new_exam';
$route['educational/save_new_exam']='educational/save_new_exam';
$route['educational/edit_test_exam']='educational/edit_test_exam';

$route['educational/delete_exam']='educational/delete_exam';
$route['educational/searchstudent']='educational/searchstudent';

//------------------------------------------------------ ANSH ----------------------------------------------------------------

$route['start_new_exam/(:any)'] = 'student/start_new_exam/$1';
$route['submit_exam'] = 'student/submit_exam';
$route['updateDB'] = 'student/updateDB';
$route['updateSess'] = 'student/updateSess';
$route['show_result_new/(:any)'] = 'student/show_result_new/$1';
$route['exam_time_map/(:any)']='student/exam_time_map/$1';


