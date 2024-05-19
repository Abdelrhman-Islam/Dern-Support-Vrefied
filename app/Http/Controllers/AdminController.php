<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Ticket;
use App\Models\Product;


class AdminController extends Controller
{
    public function index(){
        $data = Ticket::all();
        return view('admin.index', compact('data'));
    }

    public function setPriority($id){
        $data = Ticket::find($id);
        $priority = request()->priority;
        $data->update([
            'priority'=>$priority,
        ]);

        return to_route('admin.index');
    }

    public function invIndex(){
        $data = Product::all();
        return view('inventory.index', compact('data'));
    }

    public function updateQty($id) {
        $part = Product::find($id);
        $part->qty = request()->qty;
        $part->save();

        return to_route('inventory.index');
    }

}
