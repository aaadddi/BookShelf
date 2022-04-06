<?php

namespace App\View\Components;

use Illuminate\View\Component;
use DB;
class cartCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $bookid;
    public $title;
    public $coverlink;
    public $author;
    public $price;
   
    public function __construct($bookid)
    {
        $this->bookid = $bookid;
        $this->title = DB::table('all_books')->where('book_id',$bookid)->value('title');
        $this->coverlink = DB::table('all_books')->where('book_id',$bookid)->value('cover_link');
        $this->author = DB::table('all_books')->where('book_id',$bookid)->value('author');
        $this->price = DB::table('all_books')->where('book_id',$bookid)->value('price');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cart-card');
    }
}
