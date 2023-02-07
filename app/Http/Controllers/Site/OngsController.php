<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ong;
use App\Models\EnderecoOng;

class OngsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $search = request('search');


        if($search == "Todas"){

            return view('site.ongs', ['ongs'=>Ong::all()], ['enderecoOng'=>EnderecoOng::all()]);

        }else{

            /*$endereco_ong = EnderecoOng::where([['cidade', 'like', $search]]);

            //$id_endereco_ong = $ong->id_Endereco;

            $ong= Ong::where([['id_Endereco', 'like', $endereco_ong->id]]);

            return view('site.ongs', ['ongs' => $ong], ['endereco_ong' => $endereco_ong]);*/





            /*$endereco_ong = EnderecoOng::where([['cidade', 'like', $search]])->first();

            dd($endereco_ong);
            if ($endereco_ong) {
                $ong = Ong::where([['id_Endereco', 'like', $endereco_ong->id]])->first();

                return view('site.ongs', ['ongs' => $ong], ['endereco_ong' => $endereco_ong]);
            }*/

            return view('site.ongs', ['endereco_ong' => EnderecoOng::where([['cidade', 'like', $search]])->get()],
            ['ongs'=>Ong::all()]);

        }

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
