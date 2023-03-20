<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\Category;
use App\Models\CompWork;
use Illuminate\Http\Request;
use App\Models\DevServices;
use App\Models\HiredevRecords;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth')->except('about','services','work','welcome','hiredev','contact','blog','read');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        $dataset = Settings::all();
        $name = Settings::where('id', 1)->pluck('appname');
        $phone1 = Settings::where('id', 1)->pluck('phone1');
        $phone2 = Settings::where('id', 1)->pluck('phone2');
        $email1 = Settings::where('id', 1)->pluck('contactemail');
        $skype = Settings::where('id', 1)->pluck('skype');
        $facebook = Settings::where('id', 1)->pluck('facebook');
        $twitter = Settings::where('id', 1)->pluck('twitter');
        $instagram = Settings::where('id', 1)->pluck('instagram');
        $pinterest = Settings::where('id', 1)->pluck('pinterest');
        $address = Settings::where('id', 1)->pluck('address');
        foreach($name as $name);
        foreach($phone1 as $phone1);
        foreach($phone2 as $phone2);
        foreach($email1 as $email1);
        foreach($facebook as $facebook);
        foreach($twitter as $twitter);
        foreach($instagram as $instagram);
        foreach($pinterest as $pinterest);
        foreach($address as $address);
        foreach($skype as $skype);


        return view('about',compact('dataset','name','phone1','phone2','email1','skype','facebook','twitter',
    'instagram','pinterest','address'));
    }

    public function services()
    {
        $dataset = Settings::all();
        $name = Settings::where('id', 1)->pluck('appname');
        $phone1 = Settings::where('id', 1)->pluck('phone1');
        $phone2 = Settings::where('id', 1)->pluck('phone2');
        $email1 = Settings::where('id', 1)->pluck('contactemail');
        $skype = Settings::where('id', 1)->pluck('skype');
        $facebook = Settings::where('id', 1)->pluck('facebook');
        $twitter = Settings::where('id', 1)->pluck('twitter');
        $instagram = Settings::where('id', 1)->pluck('instagram');
        $pinterest = Settings::where('id', 1)->pluck('pinterest');
        $address = Settings::where('id', 1)->pluck('address');
        foreach($name as $name);
        foreach($phone1 as $phone1);
        foreach($phone2 as $phone2);
        foreach($email1 as $email1);
        foreach($facebook as $facebook);
        foreach($twitter as $twitter);
        foreach($instagram as $instagram);
        foreach($pinterest as $pinterest);
        foreach($address as $address);
        foreach($skype as $skype);


        return view('services',compact('dataset','name','phone1','phone2','email1','skype','facebook','twitter',
    'instagram','pinterest','address'));

    }
    public function work()
    {
        $dataset = Settings::all();
        $name = Settings::where('id', 1)->pluck('appname');
        $phone1 = Settings::where('id', 1)->pluck('phone1');
        $phone2 = Settings::where('id', 1)->pluck('phone2');
        $email1 = Settings::where('id', 1)->pluck('contactemail');
        $skype = Settings::where('id', 1)->pluck('skype');
        $facebook = Settings::where('id', 1)->pluck('facebook');
        $twitter = Settings::where('id', 1)->pluck('twitter');
        $instagram = Settings::where('id', 1)->pluck('instagram');
        $pinterest = Settings::where('id', 1)->pluck('pinterest');
        $address = Settings::where('id', 1)->pluck('address');
        $cats = Category::orderBy('id', 'DESC')->get();
        $compwok = CompWork::orderBy('id', 'DESC')->get();
        $allcats = Category::orderBy('id', 'DESC')->pluck('name')->toJson();

        // dd($allcats);


        foreach($name as $name);
        foreach($phone1 as $phone1);
        foreach($phone2 as $phone2);
        foreach($email1 as $email1);
        foreach($facebook as $facebook);
        foreach($twitter as $twitter);
        foreach($instagram as $instagram);
        foreach($pinterest as $pinterest);
        foreach($address as $address);
        foreach($skype as $skype);

                
        return view('work',compact('dataset','name','phone1','phone2','email1','skype','facebook','twitter',
    'instagram','pinterest','address','cats','compwok','allcats'));
    }

    public function welcome()
    {
        $dataset = Settings::all();
        $name = Settings::where('id', 1)->pluck('appname');
        $phone1 = Settings::where('id', 1)->pluck('phone1');
        $phone2 = Settings::where('id', 1)->pluck('phone2');
        $email1 = Settings::where('id', 1)->pluck('contactemail');
        $skype = Settings::where('id', 1)->pluck('skype');
        $facebook = Settings::where('id', 1)->pluck('facebook');
        $twitter = Settings::where('id', 1)->pluck('twitter');
        $instagram = Settings::where('id', 1)->pluck('instagram');
        $pinterest = Settings::where('id', 1)->pluck('pinterest');
        $address = Settings::where('id', 1)->pluck('address');
        foreach($name as $name);
        foreach($phone1 as $phone1);
        foreach($phone2 as $phone2);
        foreach($email1 as $email1);
        foreach($facebook as $facebook);
        foreach($twitter as $twitter);
        foreach($instagram as $instagram);
        foreach($pinterest as $pinterest);
        foreach($address as $address);
        foreach($skype as $skype);


        return view('welcome',compact('dataset','name','phone1','phone2','email1','skype','facebook','twitter',
    'instagram','pinterest','address'));
    }

    public function hiredev()
    {
        $dataset = Settings::all();
        $name = Settings::where('id', 1)->pluck('appname');
        $phone1 = Settings::where('id', 1)->pluck('phone1');
        $phone2 = Settings::where('id', 1)->pluck('phone2');
        $email1 = Settings::where('id', 1)->pluck('contactemail');
        $skype = Settings::where('id', 1)->pluck('skype');
        $facebook = Settings::where('id', 1)->pluck('facebook');
        $twitter = Settings::where('id', 1)->pluck('twitter');
        $instagram = Settings::where('id', 1)->pluck('instagram');
        $pinterest = Settings::where('id', 1)->pluck('pinterest');
        $address = Settings::where('id', 1)->pluck('address');
        foreach($name as $name);
        foreach($phone1 as $phone1);
        foreach($phone2 as $phone2);
        foreach($email1 as $email1);
        foreach($facebook as $facebook);
        foreach($twitter as $twitter);
        foreach($instagram as $instagram);
        foreach($pinterest as $pinterest);
        foreach($address as $address);
        foreach($skype as $skype);


        return view('hiredev',compact('dataset','name','phone1','phone2','email1','skype','facebook','twitter',
    'instagram','pinterest','address'));
    }

    public function hiredevform()
    {
        $dataset = Settings::all();
        $name = Settings::where('id', 1)->pluck('appname');
        $phone1 = Settings::where('id', 1)->pluck('phone1');
        $phone2 = Settings::where('id', 1)->pluck('phone2');
        $email1 = Settings::where('id', 1)->pluck('contactemail');
        $skype = Settings::where('id', 1)->pluck('skype');
        $facebook = Settings::where('id', 1)->pluck('facebook');
        $twitter = Settings::where('id', 1)->pluck('twitter');
        $instagram = Settings::where('id', 1)->pluck('instagram');
        $pinterest = Settings::where('id', 1)->pluck('pinterest');
        $address = Settings::where('id', 1)->pluck('address');
        $devserv = DevServices::all();
        foreach($name as $name);
        foreach($phone1 as $phone1);
        foreach($phone2 as $phone2);
        foreach($email1 as $email1);
        foreach($facebook as $facebook);
        foreach($twitter as $twitter);
        foreach($instagram as $instagram);
        foreach($pinterest as $pinterest);
        foreach($address as $address);
        foreach($skype as $skype);


        return view('hiredevform',compact('dataset','name','phone1','phone2','email1','skype','facebook','twitter',
    'instagram','pinterest','address','devserv'));
    }

    public function contact()
    {
        $dataset = Settings::all();
        $name = Settings::where('id', 1)->pluck('appname');
        $phone1 = Settings::where('id', 1)->pluck('phone1');
        $phone2 = Settings::where('id', 1)->pluck('phone2');
        $email1 = Settings::where('id', 1)->pluck('contactemail');
        $skype = Settings::where('id', 1)->pluck('skype');
        $facebook = Settings::where('id', 1)->pluck('facebook');
        $twitter = Settings::where('id', 1)->pluck('twitter');
        $instagram = Settings::where('id', 1)->pluck('instagram');
        $pinterest = Settings::where('id', 1)->pluck('pinterest');
        $address = Settings::where('id', 1)->pluck('address');
        foreach($name as $name);
        foreach($phone1 as $phone1);
        foreach($phone2 as $phone2);
        foreach($email1 as $email1);
        foreach($facebook as $facebook);
        foreach($twitter as $twitter);
        foreach($instagram as $instagram);
        foreach($pinterest as $pinterest);
        foreach($address as $address);
        foreach($skype as $skype);


        return view('contact',compact('dataset','name','phone1','phone2','email1','skype','facebook','twitter',
    'instagram','pinterest','address'));
    }

    public function contactus(Request $request)
    {

        $this->validate($request,[
            'Name' => 'required',
            'Yoursubject' => 'required',
            'phone' => 'required',
            'YourE-mail' => 'required',
            'Message' => 'required',

        ]);

            $approval = new Contact;    				

            $approval->name = $request->input('Name');
            $approval->subject = $request->input('Yoursubject');
            $approval->phone = $request->input('phone');
            $approval->email = $request->input('YourE-mail');
            $approval->message = $request->input('Message');
            
           
            $approval->save();
            return back()->with('success', 'Contact infromation sent !');
    }

    public function blog()
    {
        $dataset = Settings::all();
        $name = Settings::where('id', 1)->pluck('appname');
        $phone1 = Settings::where('id', 1)->pluck('phone1');
        $phone2 = Settings::where('id', 1)->pluck('phone2');
        $email1 = Settings::where('id', 1)->pluck('contactemail');
        $skype = Settings::where('id', 1)->pluck('skype');
        $facebook = Settings::where('id', 1)->pluck('facebook');
        $twitter = Settings::where('id', 1)->pluck('twitter');
        $instagram = Settings::where('id', 1)->pluck('instagram');
        $pinterest = Settings::where('id', 1)->pluck('pinterest');
        $address = Settings::where('id', 1)->pluck('address');
        foreach($name as $name);
        foreach($phone1 as $phone1);
        foreach($phone2 as $phone2);
        foreach($email1 as $email1);
        foreach($facebook as $facebook);
        foreach($twitter as $twitter);
        foreach($instagram as $instagram);
        foreach($pinterest as $pinterest);
        foreach($address as $address);
        foreach($skype as $skype);

        $blogd = Blog::orderBy('id', 'DESC')->get();


        return view('blog.blog',compact('dataset','name','phone1','phone2','email1','skype','facebook','twitter',
    'instagram','pinterest','address','blogd'));
    }



    public function read($id)
    {
        $blogread = Blog::find($id);
        $dataset = Settings::all();
        $name = Settings::where('id', 1)->pluck('appname');
        $phone1 = Settings::where('id', 1)->pluck('phone1');
        $phone2 = Settings::where('id', 1)->pluck('phone2');
        $email1 = Settings::where('id', 1)->pluck('contactemail');
        $skype = Settings::where('id', 1)->pluck('skype');
        $facebook = Settings::where('id', 1)->pluck('facebook');
        $twitter = Settings::where('id', 1)->pluck('twitter');
        $instagram = Settings::where('id', 1)->pluck('instagram');
        $pinterest = Settings::where('id', 1)->pluck('pinterest');
        $address = Settings::where('id', 1)->pluck('address');
        foreach($name as $name);
        foreach($phone1 as $phone1);
        foreach($phone2 as $phone2);
        foreach($email1 as $email1);
        foreach($facebook as $facebook);
        foreach($twitter as $twitter);
        foreach($instagram as $instagram);
        foreach($pinterest as $pinterest);
        foreach($address as $address);
        foreach($skype as $skype);


        return view('blog.read',compact('dataset','name','phone1','phone2','email1','skype','facebook','twitter',
    'instagram','pinterest','address','blogread'));
    }

    public function hiredevpost(Request $request)
    {

        $this->validate($request,[
            'Name' => 'required',
            'phone' => 'required',
            'YourE-mail' => 'required',
            'hours' => 'required',
            'services' => 'required',

        ]);
        

            $approval = new HiredevRecords;    				

            $approval->name = $request->input('Name');
            $approval->phone = $request->input('phone');
            $approval->email = $request->input('YourE-mail');
            $approval->hours = $request->input('hours');
            $approval->service = $request->input('services');

           
            
           
            $approval->save();
            return back()->with('success', 'Infromation sent !');
    }
    


    

    
}

