<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Ticket;
use App\Models\Problem;
use App\Models\Product;
use App\Models\Inventory;


class AdminController extends Controller
{
    public function index(){
        $data = Ticket::all();
        return view('admin.index', compact('data'));
    }

    public function setProb($id){
        $data = Ticket::find($id);
        $prob = request()->prob;
        $data->update([
            'prob'=>$prob,
        ]);

        return to_route('admin.index');
    }

    public function invIndex(){
        $data = Product::all();
        return view('inventory.index', compact('data'));
    }

    public function create(){
        $mainCat = Product::all();
        return view('inventory.create', compact('mainCat'));
    }
    public function updateQty($id) {
        $part = Product::find($id);
        $part->qty = request()->qty;
        $part->save();


        return to_route('inventory.index');
    }

}
