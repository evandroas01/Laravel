<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    public function home()
    {
       $posts = Post::orderBy('created_at','DESC')->limit(3)->get();

       $head = $this->seo->render(env('APP_NAME') . ' - UpInside Treinamentos',
            'Curso de Laravel',
            url('/'),
            asset('image/img_bg_1.jpg'));

        return view('front.home', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function course()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - Sobre o curso',
            'Curso de Laravel',
            route('course'),
            asset('image/img_bg_1.jpg'));

        return view('front.course', [
            'head' => $head,
        ]);
    }

    public function blog()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - Sobre o curso',
            'Pagina de blog, com artigos dos alunos',
            route('blog'),
            asset('image/img_bg_1.jpg'));

        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('front.blog', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();

        $head = $this->seo->render(env('APP_NAME') . ' - ' . $post->title,
            $post->subtitle,
            route('article', $post->uri),
            Storage::url(\App\Support\Cropper::thumb($post->cover, 1200, 628)));

        return view('front.article', [
            'head' => $head,
            'post' => $post
        ]);
    }

    public function contact()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - Sobre o curso',
            'Entre em contato com a melhor escola de programação',
            route('contact'),
            asset('image/img_bg_1.jpg'));

        return view('front.contact', [
            'head' => $head,
        ]);
    }
}
