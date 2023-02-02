<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\FoundAnimal;
use Illuminate\Http\Request;

class PostarAchadoController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.postar-achado');
    }

    public function formAchado(Request $request){

        //dd($request);

        /*$request->validate([

            'nameAnimal'=>'required',


        ]);*/

        $data = $request->post();

        if($request->hasFile('img_Animal') && $request->file('img_Animal')->isValid()){

            $requestImage = $request->img_Animal;

            $extension  = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/posts-achados'), $imageName);

            $name = 'img/posts-achados/' . $imageName;

            $data['img_Animal'] = $name;

        }

        FoundAnimal::create($data);
        return redirect()->route('site.post-feito');

    }
}
