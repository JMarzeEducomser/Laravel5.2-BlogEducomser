<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;

// PostRequest
use Blog\Http\Requests\PostRequest;

// Modelos a utilizar
use Blog\Post;
use Blog\Categoria;

// Carbon
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->buscar_post != ''){
            $posts = Post::likePost($request->buscar_post)
                ->orderBy('created_at', 'DESC')->paginate(5);
            $posts->appends(['buscar_post' => $request->buscar_post]);
        }else{
            $posts = Post::orderBy('created_at', 'DESC')->paginate(5);
        }

        return view('post.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        //dd($categorias);

        return view('post.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        try{
            $post = new Post($request->all());
            $post->save();

            flash('Se agregó un nuevo post titulado: ' . $post->titulo, 'success');
        }catch(\Exception $ex){
            flash('Ocurrió un problema al intentar agregar el post' . $ex->getMessage(), 'danger');
        }

        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        //dd($post);
        $categorias = Categoria::orderBy('nombre', 'ASC')->lists('nombre', 'id');

        return view('post.edit')
            ->with('post', $post)
            ->with('categorias', $categorias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        //$post->codigo = $request['codigo'];
        $post->fill($request->all());

        $post->update();

        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('admin.post.index');
    }

    /**
     *
     *
     */
    public function getImagen($nombreImagen){
        $imagen = \Storage::disk('local')->get($nombreImagen);

        return response($imagen, 200);
    }
}
