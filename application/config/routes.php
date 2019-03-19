<?php
defined('BASEPATH') OR exit('No direct script access allowed');



    $route['default_controller'] = 'Welcome';
    $route['404_override'] = '';
    $route['translate_uri_dashes'] = FALSE;


    $route['login'] = 'Auth_Controller/login';
    $route['logout'] = 'Auth_Controller/logout';

    $route['add_users'] = 'Profile_Controller/add_users';
    $route['read_users'] = 'Profile_Controller/read_users';
    $route['update_users'] = 'Profile_Controller/update_users';
    $route['delete_users'] = 'Profile_Controller/delete_users';

    $route['reading'] = 'Home_Controller/reading';
    $route['want_to_read'] = 'Home_Controller/want_to_read';
    $route['completed'] = 'Home_controller/completed';

    $route['reading_delect/(\d+)'] = 'Home_Controller/reading_delect';
    $route['want_to_read_delect/(\d+)'] = 'Home_Controller/want_to_read_delect';
    $route['completed_delect/(\d+)'] = 'Home_Controller/completed_delect';

    $route['search_title'] = 'Search_Controller/search_title';
    $route['search_author'] = 'Search_Controller/search_author';
