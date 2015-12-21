<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public $data = [
        ['id' => 1,  'titulo' => 'post 1', 'categoria' => 'cat 1', 'texto' => 'Primeiro eu queria cumprimentar os internautas. -Oi Internautas! Depois dizer que o meio ambiente é sem dúvida nenhuma uma ameaça ao desenvolvimento sustentável. E isso significa que é uma ameaça pro futuro do nosso planeta e dos nossos países. O desemprego beira 20%, ou seja, 1 em cada 4 portugueses.'],
        ['id' => 2, 'titulo' => 'post 2', 'categoria' => 'cat 2', 'texto' => 'Primeiro eu queria cumprimentar os internautas. -Oi Internautas! Depois dizer que o meio ambiente é sem dúvida nenhuma uma ameaça ao desenvolvimento sustentável. E isso significa que é uma ameaça pro futuro do nosso planeta e dos nossos países. O desemprego beira 20%, ou seja, 1 em cada 4 portugueses.'],
        ['id' => 3, 'titulo' => 'post 3', 'categoria' => 'cat 3', 'texto' => 'Primeiro eu queria cumprimentar os internautas. -Oi Internautas! Depois dizer que o meio ambiente é sem dúvida nenhuma uma ameaça ao desenvolvimento sustentável. E isso significa que é uma ameaça pro futuro do nosso planeta e dos nossos países. O desemprego beira 20%, ou seja, 1 em cada 4 portugueses.'],
        ['id' => 4, 'titulo' => 'post 4', 'categoria' => 'cat 4', 'texto' => 'Primeiro eu queria cumprimentar os internautas. -Oi Internautas! Depois dizer que o meio ambiente é sem dúvida nenhuma uma ameaça ao desenvolvimento sustentável. E isso significa que é uma ameaça pro futuro do nosso planeta e dos nossos países. O desemprego beira 20%, ou seja, 1 em cada 4 portugueses.'],
    ];
    public function index() {
        $posts = $this->data;

        return view('index', compact('posts'));
    }

    public function addPost() {

    }

    public function showPost($id) {

    }

    public function editPost($id) {

    }

    public function deletePost($id) {

    }
}
