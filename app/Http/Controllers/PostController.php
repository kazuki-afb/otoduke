<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
use App\Models\Music;
use DB;

class PostController extends Controller
{
    //

    public function index(){
        $posts = post::all();
        return view('post_index',['posts' => $posts]);
    }

    public function create(){
        $user = auth::user();
        $massege = '投稿';
        $music = '楽曲';
        $title = 'タイトル';
        $comment = 'コメント';
        return view('post',[
            'massege' => $massege,
            'music' => $music,
            'title' => $title,
            'comment' => $comment,
        ]);
    }

    public function store(Request $request){

        $user = auth::user();
        // dd($user);
        $request->validate([
            'title' => ['required','max:255'],
            'comment' => ['nullable','max:255'],
            'music_date' => ['nullable'],
        ]);
        
        $input = $request->except('submit');

        DB::beginTransaction();
        try{
            $post = new Post();
            $post->user_id = $user->id;
            $post->fill($input);
            $post->save();
            $postId = $post->id;
            $postMusic = $input['music_date'];
            
            $music = new Music();
            $music->post_id = $postId;
            $music->music_date = $postMusic;
            // dd($post,$music);
            $music->save();

            DB::commit();
            return redirect()->route('posts.index');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('posts.create');
        }
    }
}
