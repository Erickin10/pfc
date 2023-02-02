<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\LostAnimal;
use Illuminate\Http\Request;

class PostarPerdidoController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.postar-perdido');
    }

    public function formPerdido(Request $request){

        $data = $request->post();

        if($request->hasFile('img_Animal') && $request->file('img_Animal')->isValid()){

            $requestImage = $request->img_Animal;

            $extension  = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/posts-perdidos'), $imageName);

            $name = 'img/posts-perdidos/' . $imageName;

            $data['img_Animal'] = $name;

        }

        LostAnimal::create($data);
        return redirect()->route('site.post-feito');

    }
}
