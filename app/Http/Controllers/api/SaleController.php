<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sale;
use App\Product;
use App\ProductSale;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sales = Sale::all();
        foreach($sales as $sale){
            $sale->customer;
            $sale->products;
        }
        return response()->json($sales, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $dados = $request->all();
            $sale = Sale::create([
                'customer_id'       => $dados['sale']['customer_id'],
                'total_price'       => $dados['sale']['total_sale'],
                'estimate_delivery' => $dados['sale']['estimate_delivery'],
                'sale_date'         => date('Y-m-d'),
            ]);
            foreach($dados['cart'] as $product){
                $productsSale[] = new ProductSale([
                    'product_id'   => $product['id'],
                    'quantity'     => $product['quantity'],
                    'unit_price'   => $product['price']
                ]);
            }
            $sale->productSale()->saveMany($productsSale);
            return response()->json([$sale],201);
        }catch(\Exception $err){
            return response()->json(['erro'=>'Algo inespedado aconteceu'],401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sale::find($id);
        if($sale){
            $sale->customer;
            $sale->products;
            return response()->json($sale, 200);
        }else{
            return response()->json(['erro'=>'Registro não localizado.'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        ProductSale::where('sale_id', $id)->delete();
        Sale::where('id', $id)->delete();
        return response()->json(['success'=> true], 200);
    }
}
