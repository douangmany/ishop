<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{
    public function Index()

    {
      // $books=Books::all();

      $books=DB::table('books')
      ->select('*')
     // ->where(["type"=>'IT'])
     ->get();
        return view('admin.home.index',compact('books'));
        # code...s
    }

    public function Form()
    {
        return view('admin.home.add');
        # code...
    }
    public function Store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:10|min:3',
            'type' => 'required'
        ], [
            'name.required' => "ກະລຸນາປ້ອນຊື່",
            'name.max' => "ຊື່ຫ້າມຍາວເກີນ 10 ຕົວອັກສອນ",
            'name.min' => "ຊື່ຕ້ອງຫຼາຍກວ່າ 2 ຕົວອັກສອນ",
            'type.required' => "ກະລຸນາປ້ອນປະເພດໜັງສື",
        ]);
        try {
            Books::insert([
                'name' => $request->name,
                'type' => $request->type,
                'user_id'=>Auth()->user()->id,
                'created_at' => Carbon::now()
            ]);
            return redirect()->route('book')->with('success','ບັນທຶກສຳເລັດ');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
