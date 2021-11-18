<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//    protected $articles=[];
//
//    public function __construct() {
//        //Creating array of objects
//        for ($i=1; $i<=3; $i++) {
//            $this->articles[] = (object)[
//                "id" => $i,
//                "title" => "T".$i,
//                "text" => "T".$i." description!",
//                "picture" => "http://domain.org/photo/p".$i.".jpg"
//            ];
//        }
//    }

    public function index()
    {
//        $articles = DB::select('select * from articles');
//        $articles = DB::table ('articles')->get();
        $articles = Article::all();
        return view('articles.index',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return('Article Create Page');
        return view('articles.create',[]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        $c=count($this->articles);
//
//        $this->articles[] = (object)[
//            "id" => $c+1,
//            "title" => $request->input('title'),
//            "text" => $request->input('text'),
//            "picture" => $request->input('picture')
//        ];
        $articles = new Article();
        $articles->title = $request->input('title');
        $articles->text = $request->input('text');
        $articles->picture = $request->input('picture');
        $articles->save();

        //return($this->articles[$id]);
        return  view('articles.show',['article'=>$articles]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where('id',$id)->first();
        return  view('articles.show',['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::where('id',$id)->first();
        return  view('articles.edit', [ 'article'=>$article, 'id'=>$id ]);
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
//        $title = $request->input('title');
//        $text = $request->input('text');
//        $picture = $request->input('picture');
//        $article = ["id" => $id, "title" => $title, "text" => $text, "image" => $picture];
//
//        $this->articles[$id] = $article;


        Article::where('id', $id)->update(['title' => $request->input('title')]);
        Article::where('id', $id)->update(['text' => $request->input('text')]);
        Article::where('id', $id)->update(['picture' => $request->input('picture')]);

        $article = Article::where('id',$id)->first();
        return response()->json($article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Simulation of removing an article
        unset($this->articles[$id]);
        return view('articles.index',['articles'=>$this->articles]);
    }
}
