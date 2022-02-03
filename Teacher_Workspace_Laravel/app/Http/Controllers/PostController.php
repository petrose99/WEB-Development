<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
           'nom' => 'required',
           'prenom' => 'required',
           'email' => 'required',

        ]);

        auth()->user()->posts()->create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
        ]);
        
       // \App\Post::create($data);
        return redirect('/profile/'.auth()->user()->id);
       // dd(request()->all());
    }
        public function edit($id)
        {
        //$post = \App\Post::where('id', $id)->firstOrFail();

        $post = Post::find($id);
        return view('posts.edit', compact('post'));
        }
        
        public function update(Request $request,$id)
        {
             $data = request()->validate([
           'nom' => 'required',
           'prenom' => 'required',
           'email' => 'required',

        ]);
        
        $post = Post::FindOrFail($id);

        $nom = $request->input('nom');
        $post->nom = $nom;
        $prenom = $request->input('prenom');
        $post->prenom = $prenom;
        $email = $request->input('email');
        $post->email = $email;
        $post->save();
        
        return redirect('/profile/'.auth()->user()->id);
        }

        
}