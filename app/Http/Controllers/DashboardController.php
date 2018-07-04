<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Session;
use App\Mwt;
use App\Post;
use App\Comment;
use App\Category;
use App\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $members = Member::all();
        $mwts = Mwt::all();
        $posts = Post::all();
        $comments =Comment::all();
        return view('admin.dashboard.index')
        ->withMembers($members)
        ->withMwts($mwts)
        ->withPosts($posts)
        ->withComments($comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Create Memebers/vogites
    public function create()
    {
        return view('admin.dashboard.create-members');
    }

    public function store(Request $request)
    {
        $this->validate($request,array(
            'name'=>'required',
            'email'=>'required',
            'number'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'biography'=>'required',
            'photo'=>'|image|nullable|max:1999',
        ));

        if($request->hasFile('photo')){
           //get file name with extension
           $filenameWithExt = $request->file('photo')->getClientOriginalName();
           //get file name
           $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
           //get file extension
           $extension = $request->file('photo')->getClientOriginalExtension();
           //file name to store
           $fileNameToStore = $filename.'_'.time().'.'.$extension;
           //upload image
           $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->number = $request->number;
        $member->address = $request->address;
        $member->dob = $request->dob;
        $member->biography = $request->biography;
        $member->photo = $fileNameToStore;
        $member->save();
        Session::flash('success','New User added');
        return redirect()->route('dashboard.show-members', $member->id);
    }
    public function show($id)
    {
        $member = Member::find($id);
        return view('admin.dashboard.show-members')->withMember($member);
    }


    //crreate make we talk
    public function create2()
    {
        return view('admin.dashboard.create-mwt');
    }

    public function store2(Request $request)
    {

      $this->validate($request , array(
        'topic'=>'required',
        'speaker'=>'required',
        'photo'=>'|image|nullable|max:1999',
        'time'=>'required'
    ));

    if($request->hasFile('photo')){
      //get file name with extension
      $filenameWithExt = $request->file('photo')->getClientOriginalName();
      //get file name
      $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
      //get file extension
      $extension = $request->file('photo')->getClientOriginalExtension();
      //file name to store
      $fileNameToStore = $filename.'_'.time().'.'.$extension;
      //upload image
      $path = $request->file('photo')->storeAs('public/mwt', $fileNameToStore);
     }else{
       $fileNameToStore = 'noimage.jpg';
      }

      $mwt = new Mwt;
      $mwt->topic = $request->topic;
      $mwt->speaker = $request->speaker;
      $mwt->time = $request->time;
      $mwt->photo = $fileNameToStore;
      $mwt->save();
      Session::flash('success','New Post Added');
      return redirect()->route('dashboard.show-mwt', $mwt->id);


    }

    public function show2($id)
    {
        $mwt = Mwt::find($id);
        return view('admin.dashboard.show-mwt')->withMwt($mwt);
    }

    //Create posts
    public function create3()
    {
        $categories = Category::all();
        return view('admin.dashboard.create-posts')->withCategories($categories);
    }
    public function store3(Request $request)
    {

        $this->validate($request,array(
            'title'=>'required',
            'photo'=>'|image|nullable|max:1999',
            'body' =>'required'
        ));


        if($request->hasFile('photo')){
           //get file name with extension
           $filenameWithExt = $request->file('photo')->getClientOriginalName();
           //get file name
           $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
           //get file extension
           $extension = $request->file('photo')->getClientOriginalExtension();
           //file name to store
           $fileNameToStore = $filename.'_'.time().'.'.$extension;
           //upload image
           $path = $request->file('photo')->storeAs('public/posts', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new Post;
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->photo = $fileNameToStore;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        $post->save();
        Session::flash('success','New Post added');
        return redirect()->route('dashboard.show-posts', $post->id);
    }
    public function show3($id)
    {   $comments =Comment::orderBy('id','desc')->paginate(10);
        $users =User::all();
        $categories = Category::all();
        $post = Post::find($id);
        return view('admin.dashboard.show-posts')
        ->withPost($post)
        ->withComments($comments)
        ->withUsers($users)
        ->withCategories($categories);
    }

    //create categories controller functions
    public function create4()
    {
        $categories =Category::all();
        return view('admin.dashboard.create-categories')->withCategories($categories);
    }

    public function store4(Request $request)
    {
        $this->validate($request,array(
            'name' =>'required|max:255',
            'photo'=>'|image|nullable|max:1999'
               ));

               if($request->hasFile('photo')){
                //get file name with extension
                $filenameWithExt = $request->file('photo')->getClientOriginalName();
                //get file name
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                //get file extension
                $extension = $request->file('photo')->getClientOriginalExtension();
                //file name to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //upload image
                $path = $request->file('photo')->storeAs('public/category', $fileNameToStore);
             }else{
                 $fileNameToStore = 'noimage.jpg';
             }

           $category = new Category;
           $category->name = $request->name;
           $category->photo = $fileNameToStore;
           $category->save();

           Session::flash('success','New Category Created!');

           return redirect()->route('dashboard.create-categories')->withCategory($category);
    }





    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
