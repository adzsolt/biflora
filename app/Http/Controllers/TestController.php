<?php

namespace FleetCart\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;

class TestController extends Controller
{
    public function addProducts(Request $request)
    {
       $data = $request->all();

        /*$data['sku'] = 100001;
        $data['quantity'] = 1;*/
        $product = \Modules\Product\Entities\Product::where('sku', $data['sku'])->first();

        if($product) {
            $product->qty = $product->qty + $data['quantity'];

            $product->save();

            $product_price = round(floatval($product->price->amount()) * 0.8403361344537815, 4);
        }
        else{
            $product_price = -1;
        }
        return response()->json(['product_price' => $product_price]);

    }
}
