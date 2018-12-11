<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planta;

class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $p = Planta::find($id);
        return view('plantas',compact('p'));
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

    public function listarPlanta(){
    $plantas = Planta::all();
    return view('index', compact('plantas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $planta = new Planta();
        $planta->nomeP = $request->input('nomePopular');
        $planta->nomeC = $request->input('nomeCientifico');
        $planta->folha = $request->input('corFolha');
        $planta->flor  = $request->input('corFlor');
        $porte = $request->input('portePlanta');
        switch($porte){
            case 1:
                $planta->porte = 'Nenhum';
                break;
            case 2:
                $planta->porte = 'Até 1,5m';
                break;
            case 3:
                $planta->porte = 'Entre 1,5m e 3m';
                break;
            case 4:
                $planta->porte = 'Maior que 3m';
                break;

        }

        $regiao = $request->regiao;
        switch($regiao){
            case 0:
                $planta->regiao= "Árida";
            break;

            case 1:
                $planta->regiao= "Semi-Árida";
            break;

            case 2:
                $planta->regiao= "Desértica";
            break;

            case 3:
                $planta->regiao= "Tropical";
            break;

            case 4:
                $planta->regiao= "Norte";
            break;

            case 5:
                $planta->regiao= "Nordeste";
            break;

            case 6:
                $planta->regiao= "Sul";
            break;

            case 7:
                $planta->regiao= "Sudeste";
            break;
        }
        $path = $request->file('imagemProduto')->store('images', 'public');
        $planta->imagem = $path;

        $planta->save();

        return redirect('controlePlanta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = Planta::find($id);
        return view('plantas',compact('p'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planta = Planta::find($id);
        return view('admin.editarPlanta',compact('planta'));
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
        $planta = Planta::find($id);
        $planta->nomeP = $request->input('nomePopular');
        $planta->nomeC = $request->input('nomeCientifico');
        $planta->folha = $request->input('corFolha');
        $planta->flor  = $request->input('corFlor');
        $porte = $request->input('portePlanta');
        switch($porte){
            case 1:
                $planta->porte = 'Nenhum';
                break;
            case 2:
                $planta->porte = 'Até 1,5m';
                break;
            case 3:
                $planta->porte = 'Entre 1,5m e 3m';
                break;
            case 4:
                $planta->porte = 'Maior que 3m';
                break;

        }

        $regiao = $request->regiao;
        switch($regiao){
            case 0:
                $planta->regiao= "Árida";
            break;

            case 1:
                $planta->regiao= "Semi-Árida";
            break;

            case 2:
                $planta->regiao= "Desértica";
            break;

            case 3:
                $planta->regiao= "Tropical";
            break;

            case 4:
                $planta->regiao= "Norte";
            break;

            case 5:
                $planta->regiao= "Nordeste";
            break;

            case 6:
                $planta->regiao= "Sul";
            break;

            case 7:
                $planta->regiao= "Sudeste";
            break;
        }
        $img_antiga = $planta->imagem;

        if($request->file('imagemProduto') != null){
            $path = $request->file('imagemProduto')->store('images', 'public');
            $planta->imagem = $path;
            Storage::disk('public')->delete($img_antiga);

        }
        $planta->save();
        return redirect('controlePlanta');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planta = Planta::find($id);
        $planta->delete();
        return redirect('controlePlanta');
    }
}
