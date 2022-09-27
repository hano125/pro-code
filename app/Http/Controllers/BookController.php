<?php

namespace App\Http\Controllers;

use App\Http\Requests\bookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $book=Book::select('id','book_date','book_name_'.LaravelLocalization::getCurrentLocale().' as name',
       'book_author_name_' .LaravelLocalization::getCurrentLocale(). ' as author',
           'book_author_decs_' .LaravelLocalization::getCurrentLocale(). ' as decs'
       )->get();
        return view('books.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.add_book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(bookRequest $request)
    {
        Book::create(
            [
                'book_name_en'=>$request->book_name_en,
                'book_name_ar'=>$request->book_name_ar,
                'book_author_name_ar'=>$request->book_author_name_ar,
                'book_author_name_en'=>$request->book_author_name_en,
                'book_author_decs_ar'=>$request->book_author_decs_ar,
                'book_author_decs_en'=>$request->book_author_decs_en,
                'book_date'=>$request->book_date
            ]
        );
        return redirect()->back()->with('status',"Insert successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($book_id)
    {

        $book=Book::find($book_id);
        if(!$book)
            return redirect()->back();
            $book=Book::select('book_name_en', 'book_name_ar', 'book_author_name_ar', 'book_author_name_en',
             'book_author_decs_ar', 'book_author_decs_en', 'book_date')->find($book_id);
            return view('books.edit_book',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$book_id)
    {
        //chk the item is already exist or not
        $book=Book::findOrFail($book_id);

        $book->update($request->all());
        return redirect()->back()->with('status',"Update data successfully");

//        $book->update([
//            'book_name_en'=>$request->book_name_en,
//            'book_name_ar'=>$request->book_name_ar,
//            'book_author_name_ar'=>$request->book_author_name_ar,
//            'book_author_name_en'=>$request->book_author_name_en,
//            'book_author_decs_ar'=>$request->book_author_decs_ar,
//            'book_author_decs_en'=>$request->book_author_decs_en,
//            'book_date'=>$request->book_date
//        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
