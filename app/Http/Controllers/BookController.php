<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Http\Requests\StoreBook;
// use App\Book;

// use Illuminate\Support\Facades\DB;
use App\Models\Book;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Content;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $books = Book::all();
      // return view('book.index', compact('books'));
      return view('book.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Book::create($request->all());
      // return redirect()->route('book.index')->with('success', '新規登録完了しました');
      $book = new Book;
      $book->title = $request->title;
      $book->author = $request->author;
      $book->save();
      return redirect('book/'.$book->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
      // $book = Book::find($id);
      // return view('book.show', compact('book'));
      return view('book.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
      // $book = Book::find($id);
      // return view('book.edit', compact('book'));
      return view('book.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
      // $update = [
      //   'title' => $request->title,
      //   'author' => $request->author
      // ];
      // Book::where('id', $id)->update($update);
      // return back()->with('success', '編集完了しました');
      $book->title = $request->title;
      $book->author = $request->author;
      $book->save();
      return redirect('book/'.$book->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
      // $Book=Book::find($id);
      $book->delete();
      return redirect('student/list');
      // Book::where('id', $id)->delete();
      // return redirect()->route('book.index')->with('success', '削除完了しました');
    }
}
