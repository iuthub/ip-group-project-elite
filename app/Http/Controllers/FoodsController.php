<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodsController extends Controller {

    static $categoryToNumber = ['Breakfast' => 0, 'Lunch' => 1, 'Dinner' => 2, 'Dessert' => 3, 'Drink' => 4];

    public function __construct()
    {
       $this->middleware('auth'); //verified
    }
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        return view('admin/food.index')->with('foods', $foods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'food_image' => 'image|max:1999'
        ]);

        //Handle File Upload
        if($request->hasFile('food_image')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('food_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('food_image')->getClientOriginalExtension();
            //Filename to store
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('food_image')->storeAs('public/food_images', $filenameToStore);
        }

        $food = new Food();
        $food->name=$request->input('name');
        $food->price=$request->input('price');
        $food->rank=$request->input('rank');
        $food->category=self::$categoryToNumber[$request->input('category')];
        $food->food_image=$filenameToStore;
        $food->description=$request->input('description');
        $food->save();
        
        return redirect('/admin/food/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'You are in edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'You are deleting food with id number' . $id;
    }
}
