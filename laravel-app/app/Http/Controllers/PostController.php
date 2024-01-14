<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\posts;
class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {

        $pizzas = posts::latest()->get();      
    
        return view('blog.index', [
          'post' => $pizzas,
        ]);
      }
    
      public function show($id) {
        
        $pizza = posts::findOrFail($id);
    
        return view('blog.show', ['post' => $pizza]);
      }
    
      public function create() {
        return view('blog.create');
      }
    
      public function store() {
    
        $pizza = new posts();
    
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
    
        $pizza->save();
    
        return redirect('/')->with('mssg', 'Thanks for your order!');
    
      }
    
      public function destroy($id) {
    
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
    
        return redirect('/blog');
    
      }
}
