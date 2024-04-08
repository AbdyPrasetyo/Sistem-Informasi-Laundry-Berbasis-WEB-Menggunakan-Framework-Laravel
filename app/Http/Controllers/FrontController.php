<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->where('role', 2)->count();
        $transaksi = DB::table('transactions')->count();
        $totalRows = DB::table('complaint_suggestions')->count();
        // Hitung jumlah baris dengan type 3

        $type3Count = DB::table('complaint_suggestions')->where('type', 3)->count();

// Hitung persentase
        if ($totalRows > 0) {
            $percentage = ($type3Count / $totalRows) * 100;
        } else {
            $percentage = 0; // Untuk menghindari pembagian dengan nol jika tidak ada baris dalam tabel
        }
        $formattedPercentage = number_format($percentage, 2);
        return view('welcome', compact('formattedPercentage', 'transaksi','users'));
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function contact()
    {
        return view('contact');
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
        $request->validate([
            'message' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
        ]);

        // Simpan data pesan ke database
        Message::create($request->all());

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
