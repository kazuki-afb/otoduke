<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
use App\Models\Music;
use App\models\Movie;
use App\models\Voice;
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
        $movie = '動画';
        $voice = '歌詞';
        return view('post',[
            'massege' => $massege,
            'music' => $music,
            'title' => $title,
            'comment' => $comment,
            'movie' => $movie,
            'voice' => $voice,
        ]);
    }

    public function store(Request $request){

        $user = auth::user();
        $request->validate([
            'title' => ['required','max:255'],
            'comment' => ['nullable','max:255'],
            'music_date' => ['nullable'],
            'movie_date' => ['nullable'],
            'voice_date' => ['nullable'],
        ]);
        
        $input = $request->except('submit');

        DB::beginTransaction();
        try{
            $post = new Post();
            $post->user_id = $user->id;
            $post->fill($input);
            $post->save();

            if($input['music_date'] == null){
                // dd($input['music_date']);
                DB::commit();
                return redirect()->route('posts.index');
            }else{
                $music = new Music();
                $postId = $post->id;
                $postMusic = $input['music_date'];

                $music->post_id = $postId;
                $music->music_date = $postMusic;
                $music->save();

                $movie = new Movie();
                $postMovie = $input['movie_date'];
                $movie->post_id = $postId;
                $movie->movie_date = $postMovie;
                $movie->save();

                DB::commit();
                return redirect()->route('posts.index');
            }
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('posts.create');
        }
    }
}
