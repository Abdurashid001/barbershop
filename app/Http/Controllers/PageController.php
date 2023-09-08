<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Barber;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function addwork(Request $request)
    {
        $works = Work::create(
            [
                'work_img' => $request->work_img,
                'title' => $request->title,
                'about_work' => $request->about_work
            ]
        );
        return redirect()->route('addwork');
    }

    public function services()
    {
        return view('services');
    }
    public function addservice(Request $request)
    {
        $services = Service::create(
            [
                'service_name' => $request->service_name,
                'service_img' => $request->service_img,
                'about_service' => $request->about_service
            ]
        );
        return redirect()->route('admin')->with(['services' => $services]);
    }

    public function barbers()
    {
        return view('barbers');
    }

    public function addbarber(Request $request)
    {
        $barbers = Barber::create(
            [
                'img' => $request->img,
                'name_barber' => $request->name_barber,
                'profession' => $request->profession,
                'about_barber' => $request->about_barber
            ]);
        return redirect()->route('our_barbers');
    }

    public function appointment()
    {
        return view('appointment');
    }

    public function app(Request $request)
    {
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'select_service' => 'required',
                'select_barber' => 'required',
                'any_details' => 'required',
            ]
        );
        $appointments = Appointment::create(
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'select_service' => $request->select_service,
                'select_barber' => $request->select_barber,
                'any_details' => $request->any_details
            ]);
        return redirect()->route('appointment');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contacting(Request $request)
    {
        $contacts = Contact::create(
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => $request->phone
            ]);


        return redirect()->route('contact')->with('success', 'Contact form submitted successfully.');
    }

    public function commenting(Request $request)
    {
        $comments = Comment::create(
            [
                'comment' => $request->comment
            ]
        );
        return redirect()->route('contact')->with('comment', $comments);
    }

    public function blog()
    {
        return view('blog');
    }

    public function price()
    {
        return view('price');
    }

    public function moreinfo()
    {
        return view('moreinfo');
    }

    public function admin()
    {
        return view('admin');
    }
}
