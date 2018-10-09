<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return books list
     * @return Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Create an instance of Book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Return an specific book
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {
    }

    /**
     * Update the information of an existing book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
    }

    /**
     * Removes an existing book
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {
    }
}
