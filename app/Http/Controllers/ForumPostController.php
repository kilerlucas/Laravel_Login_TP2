<?php



namespace App\Http\Controllers;

use App\Models\ForumPost;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ForumPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $posts = ForumPost::all(); //select * from blog_posts
            //return $posts;
            return view('forum.index', ['posts' => $posts]);
        }
        return redirect(route('login'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::selectCategory();

        return view('forum.create', ['categories' => $categories]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = ForumPost::create([
            'title_fr' => $request->title_fr,
            'title_en' => $request->title_en,
            'body_fr' => $request->body_fr,
            'body_en' => $request->body_en,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id
        ]);

        return redirect(route('forum.show', $newPost->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function show(ForumPost $forumPost)
    {
        
        return view ('forum.show', ['forumPost' => $forumPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumPost $forumPost)
    {
        return view('forum.edit', ['forumPost' => $forumPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumPost $forumPost)
    {
        $forumPost->update([
            'title_fr' => $request->title_fr,
            'title_en' => $request->title_en,
            'body_fr' => $request->body_fr,
            'body_en' => $request->body_en,
        ]);

        return redirect(route('forum.show', $forumPost));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumPost $forumPost)
    {
        $forumPost->delete();
        
        return redirect(route('forum.index'));
    }
}
