<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restauran;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class ResCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // SELECT Shippers.ShipperName, COUNT(Orders.OrderID) AS NumberOfOrders FROM Orders
        // LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID
        // GROUP BY ShipperName;
        $listLesson  = $assignment->Restauran()
        ->select('restaurans.*', DB::Category('group_concat(name) as names'))
        ->where('category_id' )
        ->groupBy('flag')
        ->get();
        dd($listLesson);
        // DB::table('restaurants') -> select(DB::raw('count(category_id) as loaiSP,"category")->groupby(category_id)));

        return response() -> json($listLesson);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
