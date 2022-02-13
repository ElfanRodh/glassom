<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title']  = 'Dashboard';
        $data['menu']   = 'dashboard';
        $data['submenu']= 'dashboard';
        return view('dashboard', $data);
    }
    
    public function master()
    {
        return view('layouts/master');
    }

    // Component
    public function alert()
    {
        $data['title']  = 'Components | Alert';
        $data['menu']   = 'components';
        $data['submenu']= 'alert';
        return view('components/alert', $data);
    }
    public function button()
    {
        $data['title']  = 'Components | Button';
        $data['menu']   = 'components';
        $data['submenu']= 'button';
        return view('components/button', $data);
    }
    public function card()
    {
        $data['title']  = 'Components | Card';
        $data['menu']   = 'components';
        $data['submenu']= 'card';
        return view('components/card', $data);
    }
    public function dropdown()
    {
        $data['title']  = 'Components | Dropdown';
        $data['menu']   = 'components';
        $data['submenu']= 'dropdown';
        return view('components/dropdown', $data);
    }
    public function form()
    {
        $data['title']  = 'Components | Form';
        $data['menu']   = 'components';
        $data['submenu']= 'form';
        return view('components/form', $data);
    }
    public function list()
    {
        $data['title']  = 'Components | List';
        $data['menu']   = 'components';
        $data['submenu']= 'list';
        return view('components/list', $data);
    }
    public function modal()
    {
        $data['title']  = 'Components | modal';
        $data['menu']   = 'components';
        $data['submenu']= 'modal';
        return view('components/modal', $data);
    }

    public function blank()
    {
        $data['title']  = 'Page | Blank Page';
        $data['menu']   = 'pages';
        $data['submenu']= 'blank';
        return view('pages/blank', $data);
    }
    
    public function not_found()
    {
        $data['title']  = 'Page | Page Not Found';
        $data['menu']   = 'pages';
        $data['submenu']= '404';
        return view('pages/404', $data);
    }
}
