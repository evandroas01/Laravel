<?php

namespace App\Http\Controllers;


use App\Support\Seo;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
       $head = $this->seo->render(env('APP_NAME') . ' - UpInside Treinamentos',
            'Curso de Laravel',
            url('/'),
            asset('image/img_bg_1.jpg'));

        return view('front.home', [
            'head' => $head,
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

        return view('front.blog', [
            'head' => $head,
        ]);
    }

    public function article()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - Sobre o curso',
            'Leia nossos artigos atualizados',
            route('article'),
            asset('image/img_bg_1.jpg'));

        return view('front.article', [
            'head' => $head,
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
