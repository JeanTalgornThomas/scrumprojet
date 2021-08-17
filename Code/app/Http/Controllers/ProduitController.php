<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller {
    public function index(){
        $produits = Produit :: inRandomOrder()->take(10)->get();
        return view('produits.index')->with('produits',$produits);
    }

    public function show(){
        
    }
}