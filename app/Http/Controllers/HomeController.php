<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Alert;

class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return view

     */

    public function myNotification($type)

    {

        switch ($type) {

            case 'message':

                Alert::message('Message', 'Optional Title');
                
                break;

            case 'basic':

                Alert::basic('Basic Message', 'Mandatory Title')->html()->persistent('Juridico')->persistent('Fisico');
                
                break;

            case 'info':

                Alert::info('Info Message', 'Optional Title');
                
                break;

            case 'success':

                Alert::success('Success Message', 'Optional Title');
                
                break;

            case 'error':

                Alert::error('Error Message', 'Optional Title')->html()->persistent("No, thanks");
                
                break;

            case 'warning':

                Alert::warning('Warning Message', 'Optional Title')->html()->persistent("No, thanks");
                
                break;

            default:

                # code...

                break;

        }


        return redirect()->back()->with('errors', 'Profile updated!');
        
    }

}