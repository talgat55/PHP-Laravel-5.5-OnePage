<?php

namespace App\Http\Controllers;
use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the Categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $categories = Categories::paginate(15);  
        return view('categories.categories', ['categories' => $categories]);

    }



    /**
     * Create the portfolio item.
     *
     * @return \Illuminate\Http\Request
     */
    public function create()
    { 
          

        return view('categories.create');

    }

    /**
     * Store the item.
     *
     * @return \Illuminate\Http\Request
     */
    public function store(Request $request)
    { 
          
        $request->validate([ 
            'name' => 'required',
            'slug' => 'required', 
        ]);
           
        $category = new Categories;

        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();
       
       return redirect()->route('categories')->with('status', 'Category Created!');

    }




    /**
     * Edit the user.
     *
     * @return \Illuminate\Http\Request
     */
    public function edit($id)
    { 
         
        $category = Categories::find($id);

        return view('categories.edit', ['category' => $category]);

    }

    /**
     * Update the user.
     *
     * @return \Illuminate\Http\Request
     */
    public function update($id, Request $request)
    { 
         
        $category = Categories::find($id);
 
        if($request->name){

            $category->name = $request->name;
        }
        if($request->slug){

            $category->slug = $request->slug;
        }

        $category->save();      

        return redirect()->route('categories')->with('status', 'Updated!');

    }
  
    /**
     *
     * Delete the category.
     *
     */
    public function delete($id)
    { 
         
        $user = Categories::find($id);
 
        $user->delete();      

        return redirect()->route('categories')->with('status', 'Succesful Delete!');

    }




}
