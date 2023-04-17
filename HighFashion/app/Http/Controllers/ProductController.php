<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Products;
use App\Models\Type;
use Illuminate\Console\View\Components\Component;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $keyword = $request->get('search');
        // $perPage = 25;

        // if (!empty($keyword)) {
        //     $posts = Products::where('code', 'LIKE', "%$keyword%")
        //     ->orWhere('reference', 'LIKE', "%$keyword%")
        //     ->orWhere('description', 'LIKE', "%$keyword%")
        //     ->latest()->paginate($perPage);
        // } else {
        //     $posts = Products::latest()->paginate($perPage);
        // }
        $result = Products::paginate(12);
        return view('showProducts', ['result' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $description = Collection::all();
        $result = Type::all();
        return view('showProducts', ['description' => $description,'result' => $result, ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $perPage= 10;

        if ($request->hasFile('patch')) {
            $filenamewithExt = $request->file('patch')->getClientOriginalName();
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            $extension = $request->file('patch')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('patch')->storeAs('public/senai', $fileNameToStore);
            $imagem = 'senai/'.$fileNameToStore;
        } else {
            $imagem= 'noimage.png';
        }

        $db = new Products;
        $db->code = $request->code;
        $db->reference = $request->reference;
        $db->description = $request->description;
        $db->value = $request->value;
        $db->collection_id = $request->collection_id;
        $db->type_id = $request->type_id;
        $db->patch = $imagem;
        $db->save();

        
        return redirect('dashboard/products');




        }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $post = Products::findOrFail($id);

        return view('showProducts', ['result' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Products::find($id);

        $description = Collection::all();
        $collection = Products::find($id)->collection;

        $result = Type::all();
        $types = Products::find($id)->type;

        return view('editProducts', ['post' => $post, 'types' => $types, 'result' => $result,'collection' => $collection, 'description' => $description,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products,$id)
    {

        if ($request->hasFile('patch')) {
            $filenamewithExt = $request->file('patch')->getClientOriginalName();
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            $extension = $request->file('patch')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('patch')->storeAs('public/senai', $fileNameToStore);
            $imagem = 'senai/'.$fileNameToStore;
        } else {
            $imagem= 'noimage.png';
        }


        $post = new Products;
        $post->code = $request->code;
        $post->reference = $request->reference;
        $post->description = $request->description;
        $post->value = $request->value;
        $post->collection_id = $request->collection_id;
        $post->type_id = $request->type_id;
        $post->patch = $imagem;
        $post->save();

        $post = Products::findOrFail($id);
        $result = Type::all();


        return redirect('/dashboard/products')->with('success', 'Produto atualizado');
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Products::destroy($id);
        return redirect('/dashboard/products')->with('success', 'Produto deletado');
    }

    public function search(Request $request)
    {

         $db= Products::where('description', 'Like', '%'.$request->search.'%')
        ->orWhere('reference', 'Like', '%'. $request->search.'%');
        return view('search',['result'=> $db, 'total' => count($db) ]);


    }

    public function dashboard(){

        $description = Collection::all();
        $result = Type::paginate(12);
        return view('dashboard-admin', ['result' => $result, 'description' => $description]);
    }


    public function filter(){


        $perPage = 6;

        $description = Collection::all();
        $type = Type::all();
        $result = Products::paginate(12);
        return view('index', ['result' => $result,'type' => $type, 'description' => $description ]);
    }



    public function loja(){

        $description = Collection::all();
        $type = Type::all();
        $result = Products::paginate(12);

        return view('index', ['result' => $result,'type' => $type, 'description' => $description ]);
    }

  

    public function busca(Request $request){
        $result = Products::where('description', 'like' , '%' .$request->busca. '%')->paginate(12);
        return view('index',['result' => $result]);
    }

    public function procura(Request $request){
        
        
        $result = Products::where('description', 'like' , '%' .$request->busca. '%')->paginate(12);
        return view('showProducts',['result' => $result]);
    }

    public function Verao(Request $request){
        $result = Products::where('collection_id', '=', '4' )->paginate(12);
        return view('index',['result' => $result]);
    }
    public function Primavera(Request $request){
        $result = Products::where('collection_id', '=', '4' )->paginate(12);
        return view('index',['result' => $result]);
    }
 
    public function Inverno(Request $request){
        $result = Products::where('collection_id', '=', '5' )->paginate(12);
        return view('index',['result' => $result]);
    }
    public function Outono(Request $request){
        $result = Products::where('collection_id', '=', '3' )->paginate(12);
        return view('index',['result' => $result]);
    }

}
