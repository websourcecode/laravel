<?php namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use View, Validator, Session, Redirect, Input, Response, Mail, Cookie;

class homeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

    public function index()
	{
        $param['start'] = 'start';
        if (Session::has('alert')) {
            $param['alert'] = Session::get('alert');
        }
		return view('front/home')->with($param);
	}

    public function about()
    {
        return view('front/about');
    }

    public function services()
    {
        return view('front/services');
    }

    public function faq()
    {
        return view('front/faq');
    }
    public function login()
    { 
        $view = View::make('front/login');
        $tok = Cookie::make('token', csrf_token(), 30);
        return Response::make($view)->withCookie($tok);
    }
    public function logout()
    {
        \Session::remove('user_id');
        
        $view = View::make('front/login');
        $tok = Cookie::make('token', csrf_token(), 30);
        return Response::make($view)->withCookie($tok);
    }
    
    public function contact()
    {
        return view('front/contact');
    }
    public function email(){
        return view('front/contact');
    }
    public function law(){
        return view('front/law');
    }
    public function aboutgo(){
        return view('front/about');
    }
    public function sendmail(){
        return Redirect::route('contact');
    }
    public function contactemail(){

        $name = Input::get('name');
        $company = Input::get('company');
        $address = Input::get('address');
        $email = Input::get('email');
        $comment = Input::get('comment');
        $phone = Input::get('phone');


        $data = ['name' => $name, 'address'=> $address, 'company'=> $company, 'comment'=>$comment, 'email' => $email, 'phone'=> $phone];


        $info = [ 'reply_name'  => '',
            'reply_email' => 'noreply@gmail.com',
            'email'       => 'omegaservices@gmail.com',
            'name'        => 'Contact Us Mail',
            'subject'     => 'Comment received from website',
        ];

        Mail::send('emails.contact', $data, function($message) use($info) {
            $message->from($info['reply_email'], $info['reply_name']);
            $message->to($info['email'], $info['name'])
                ->subject($info['subject']);
        });

            $status = 'sucess';


        $response = array(
            'status' => $status,
            'msg' => 'Your comment has been received. Thanks!',
        );

        return Response::json($response);
    }


}
