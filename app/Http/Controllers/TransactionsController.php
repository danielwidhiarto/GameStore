<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionsController extends Controller
{
    public function cart_view(){
        $user_id = Auth::user()->id;
        $carts = Cart::where('user_id', '=', "$user_id")->get();

        $totalPrice = 0;

        foreach($carts as $cp){
            $totalPrice += $cp->qty * $cp->game->game_price;
        }

        return view('cart', compact('carts', 'totalPrice'));
    }

    public function add_to_cart(Request $request){

        $request->validate([
            'qty' => 'required'
        ]);

        $user_id = Auth::user()->id;

        DB::table('carts')->insert([
            'user_id' => $user_id,
            'game_id' => $request->game_id,
            'qty' => $request->qty
        ]);

        return redirect()->route('cart_view');
    }

    public function delete_game_in_cart(Request $request){
        Cart::where('id', $request->id)->delete();

        return redirect()->route('cart_view');
    }

    public function purchase(){
        $user_id = Auth::user()->id;
        $carts = Cart::where('user_id', '=', "$user_id")->get();

        foreach($carts as $c){
            DB::table('transactions')->insert([
                'transaction_user_id' => $c->user_id,
                'transaction_game_id' => $c->game_id,
                'qty' => $c->qty,
                'transaction_date_time' => Carbon::now()
            ]);
        }

        Cart::where('user_id', '=', "$user_id")->delete();

        return redirect()->route('history_index')->with('success', 'Product(s) Purchase Successful');
    }

    public function history_index(){
        $user_id = Auth::user()->id;
        $historyTr = Transaction::where('transaction_user_id', '=', "$user_id")->latest('transaction_date_time')->get()->groupBy('transaction_date_time');

        $collapse = 0;

        foreach($historyTr as $ht){
            $totalPrice = 0;
            $totalQty = 0;
            foreach ($ht as $ht1) {
                $totalPrice += $ht1->qty * $ht1->game->game_price;
                $totalQty += $ht1->qty;
            }
            $ht->totalPrice = $totalPrice;
            $ht->totalQty = $totalQty;
            $collapse += 1;
            $ht->collapse = $collapse;
        }

        // dd($historyTr);

        return view('history', compact('historyTr'));
    }
}
