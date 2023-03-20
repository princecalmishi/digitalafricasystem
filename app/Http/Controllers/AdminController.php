<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\CompWork;
use App\Models\DevServices;
use App\Models\HiredevRecords;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function admin()
    {
        $id = '1';
        $data = Settings::where('id', $id)->get();
        $name = Settings::where('id', 1)->pluck('appname');
        foreach($name as $name)

        return view('admin.index', compact('data','name'));
    }


    public function requests()
    {
        $id = '1';
        $data = Settings::where('id', $id)->get();
        $name = Settings::where('id', 1)->pluck('appname');
        foreach($name as $name)

        
        $data2 = Contact::orderBy('id', 'DESC')->get();
        

        return view('admin.requests', compact('data2','data','name'));
    }


    public function postset(Request $request){
        
           
        $this->validate($request,[
                     

        ]);

        if($request->hasFile('image')){
            //get file name with ext
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/logo', $filenameToStore);

        }else{
            $filenameToStore = 'noimage.png';
        }

        $setcount = Settings::where('id', 1)->count();

        if($setcount >= 1){

            $id = '1';
            $approval = Settings::find($id);    

            $approval->appname = $request->input('cname');
            $approval->phone1 = $request->input('cphone1');
            $approval->phone2 = $request->input('cphone2');
            $approval->contactemail = $request->input('cemail');
            $approval->facebook = $request->input('fbpage');
            $approval->twitter = $request->input('twitter');
            $approval->instagram = $request->input('instagram');
            $approval->pinterest = $request->input('pinterest');
            $approval->skype = $request->input('skype');
            $approval->address = $request->input('caddress');
            $approval->logo = $filenameToStore;
            $approval->save();


        }else{

            $approval = new Settings;    

            $approval->appname = $request->input('cname');
            $approval->phone1 = $request->input('cphone1');
            $approval->phone2 = $request->input('cphone2');
            $approval->contactemail = $request->input('cemail');
            $approval->facebook = $request->input('fbpage');
            $approval->twitter = $request->input('twitter');
            $approval->instagram = $request->input('instagram');
            $approval->pinterest = $request->input('pinterest');
            $approval->skype = $request->input('skype');
            $approval->address = $request->input('caddress');
            $approval->logo = $filenameToStore;
           
            $approval->save();
        }

        	
        return redirect()->back()->with('success', 'Service created successfully!');

    }


    public function adminblog()
    {
        $id = '1';
        $data = Settings::where('id', $id)->get();
        $name = Settings::where('id', 1)->pluck('appname');
        foreach($name as $name)
        $data2 = Contact::orderBy('id', 'DESC')->get();

        $datablog = Blog::all();
        $datacat = Category::all();
        return view('admin.blog', compact('datablog','data','data2','name','datacat'));
    }


    public function admincreateblog(Request $request){
        
           
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'image' => 'required|image|max:1999',          


        ]);

        if($request->hasFile('image')){
            //get file name with ext
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/blog', $filenameToStore);

        }


            $approval = new Blog;    
            $approval->title = $request->input('title');
            $approval->body = $request->input('body');
            $approval->category = $request->input('category');            
            $approval->image = $filenameToStore;
           
            $approval->save();     
        	
        return redirect()->back()->with('success', 'created successfully!');

    }


    public function createcategory(Request $request){
        
           
        $this->validate($request,[
            'name' => 'required',
            
        ]);

            $approval = new Category;    
            $approval->name = $request->input('name');
            
            $approval->save();     
        	
        return redirect()->back()->with('success', 'created successfully!');

    }


    public function devservices()
    {
        $id = '1';
        $data = Settings::where('id', $id)->get();
        $name = Settings::where('id', 1)->pluck('appname');
        foreach($name as $name)
        $data2 = Contact::orderBy('id', 'DESC')->get();

        $datablog = DevServices::orderBy('id', 'DESC')->get();
        $datacat = Category::all();
        return view('admin.devservices', compact('datablog','data','data2','name','datacat'));
    }

    public function admincreateservice(Request $request){
        
           
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            
        ]);

        
            $approval = new DevServices;    
            $approval->name = $request->input('name');
            $approval->price = $request->input('price');
           
            $approval->save();     
        	
        return redirect()->back()->with('success', 'created successfully!');

    }

    public function hiredevreqs()
    {
        $id = '1';
        $data = Settings::where('id', $id)->get();
        $name = Settings::where('id', 1)->pluck('appname');
        foreach($name as $name)
        $data2 = Contact::orderBy('id', 'DESC')->get();

        $datablog = HiredevRecords::orderBy('id', 'DESC')->get();
        $datacat = Category::all();
        return view('admin.hiredevreqs', compact('datablog','data','data2','name','datacat'));
    }


    public function compwork()
    {
        $id = '1';
        $data = Settings::where('id', $id)->get();
        $name = Settings::where('id', 1)->pluck('appname');
        foreach($name as $name)
        $data2 = Contact::orderBy('id', 'DESC')->get();

        $datablog = HiredevRecords::orderBy('id', 'DESC')->get();
        $datacat = Category::all();
        $compwork = CompWork::orderBy('id', 'DESC')->get();
        return view('admin.compwork', compact('datablog','data','data2','name','datacat','compwork'));
    }

    public function compworkpost(Request $request){
        
           
        $this->validate($request,[
            'title' => 'required',
            'category' => 'required',
            'link' => 'required',
            'image' => 'required|image|max:1999',          


        ]);

        if($request->hasFile('image')){
            //get file name with ext
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/companywork', $filenameToStore);

        }


            $approval = new CompWork;    
            $approval->title = $request->input('title');
            $approval->pcat = $request->input('category');            
            $approval->link = $request->input('link');            
            $approval->image = $filenameToStore;
           
            $approval->save();     
        	
        return redirect()->back()->with('success', 'created successfully!');

    }

    public function deletework($id)
    {
        $post = CompWork::find($id);

        $post->delete();
        return redirect()->back()->with('success', 'Data deleted successfully!');
    } 

    public function deletehiredevreqs($id)
    {
        $post = HiredevRecords::find($id);

        $post->delete();
        return redirect()->back()->with('success', 'Data deleted successfully!');
    } 

    public function deleteblog($id)
    {
        $post = Blog::find($id);

        $post->delete();
        return redirect()->back()->with('success', 'Data deleted successfully!');
    } 

    public function markreqs($id)
    {
        $post = Contact::find($id);
        $post->status = 'Completed';

        $post->save();
        return redirect()->back()->with('success', 'Data deleted successfully!');
    } 

}
