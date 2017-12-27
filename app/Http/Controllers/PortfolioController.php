<?php

namespace App\Http\Controllers;
use App\Portfolio;
use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the portfolio.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $portfolio = Portfolio::paginate(15);  
        return view('portfolio.portfolio', ['portfolio' => $portfolio]);

    }



    /**
     * Create the portfolio item.
     *
     * @return \Illuminate\Http\Request
     */
    public function create()
    { 
        $categories = Categories::all();  

        return view('portfolio.create', ['categories' => $categories]);

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
            'fileattach' => 'required|max:10000', 
        ]);
   
        if($request->file('fileattach')){

            $filenameWithExt = $request->file('fileattach')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('fileattach')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('fileattach')->storeAs('public/portfolio', $fileNameToStore );
               
        } 
        $portfolio = new Portfolio;
        $portfolio->name = $request->name;
        $portfolio->category_id = $request->category_id;
       
        $portfolio->file = $fileNameToStore;
        

        $portfolio->save();
       
       return redirect()->route('portfolio')->with('status', 'Item Created!');

    }



    /**
     * Edit the portfolio.
     *
     * @return \Illuminate\Http\Request
     */
    public function edit($id)
    { 
         
        $portfolio = Portfolio::find($id);

        return view('portfolio.edit', ['portfolio' => $portfolio]);

    }

    /**
     * Update the portfolio.
     *
     * @return \Illuminate\Http\Request
     */
    public function update($id, Request $request)
    { 
         
        $portfolio = Portfolio::find($id);
         if($request->file('fileattach')){

            $filenameWithExt = $request->file('fileattach')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('fileattach')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('fileattach')->storeAs('public/portfolio', $fileNameToStore );
            $portfolio->file = $fileNameToStore;   
        } 
        if($request->name){

            $portfolio->name = $request->name;
        }
       

        $portfolio->save();      

        return redirect()->route('portfolio')->with('status', 'Updated!');

    }
  
    /**
     *
     * Delete the portfolio item.
     *
     */
    public function delete($id)
    { 
         
        $portfolio = Portfolio::find($id);
 
        $portfolio->delete();      

        return redirect()->route('portfolio')->with('status', 'Succesful Delete!');

    }





}
