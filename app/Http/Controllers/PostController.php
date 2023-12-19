<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $posts = Post::all();

    return view('posts.index', [
      'posts' => $posts
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('posts.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request): RedirectResponse
  {
    $title = $request->input('title');
    $content = $request->input('content');

    $post = new Post();
    $post->title = $title;
    $post->content = $content;

    $post->save();

    return redirect()->route('posts.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id): View
  {
    $post = Post::all()->find($id);

    return view('posts.show', [
      'post' => $post
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id): View
  {
    $post = Post::all()->find($id);

    return view('Posts.edit', [
      'post' => $post,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id): RedirectResponse
  {

    $title = $request->input('title');
    $content = $request->input('content');

    $post = Post::all()->find($id);
    $post->title = $title;
    $post->content = $content;

    $post->save();

    return redirect()->route('posts.show', ['post' => $id]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $post = Post::all()->find($id);

    $post->delete();

    return redirect()->route('posts.index');
  }
}
