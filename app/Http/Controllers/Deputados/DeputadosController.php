<?php

namespace App\Http\Controllers\Deputados;

use App\Http\Controllers\Controller;
use App\Models\Deputado;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class DeputadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function upload()
    {
        $deputados = Http::get("http://dadosabertos.almg.gov.br/ws/deputados/em_exercicio?formato=json")->json();
        //http://dadosabertos.almg.gov.br/ws/deputados/22581?formato=json

        foreach ($deputados as $deputado_1) {
            foreach ($deputado_1 as $deputado){
                //dd($deputado);
                if ($reg_dep = Deputado::where('cod_al','=', $deputado['id'])->first()) {
                    # code...
                } else {
                    $deputado_x = Http::get('http://dadosabertos.almg.gov.br/ws/deputados/'.$deputado['id'].'?formato=json')->json();
                    //dd($deputado_x);
                        foreach ($deputado_x as $deputado_y) {
                            $data['cod_al'] = $deputado_y['id'];
                            $data['nome'] = $deputado_y['nome'];
                            $data['partido'] = $deputado_y['partido'];
                            $data['partidoEleicao'] = $deputado_y['partidoEleicao'];
                            $data['localizacao'] = $deputado_y['tagLocalizacao'];
                            $data['tipoMandato'] = $deputado_y['tipoMandato'];
                            $data['nomeServidor'] = $deputado_y['nomeServidor'];
                            $data['sexo'] = $deputado_y['sexo'];
                            $data['naturalidadeMunicipio'] = $deputado_y['naturalidadeMunicipio'];
                            $data['naturalidadeUf'] = $deputado_y['naturalidadeUf'];
                            $data['dataNascimento'] = Carbon::createFromFormat('d/m/Y', $deputado_y['dataNascimento'])->format('Y-m-d'); //dataUs($deputado_y['dataNascimento']);
                            $data['atividadeProfissional'] = ( Arr::exists($deputado_y, 'atividadeProfissional')) ? $deputado_y['atividadeProfissional'] : null;
                            $data['vidaProfissionalPolitica'] = (Arr::exists($deputado_y, 'vidaProfissionalPolitica')) ? $deputado_y['vidaProfissionalPolitica'] : null ;
                            $data['atuacaoParlamentar'] = (Arr::exists($deputado_y, 'atuacaoParlamentar')) ? $deputado_y['atuacaoParlamentar'] : null ;
                            
                            Deputado::create($data);
                        }
                    
                        
                }
            }            
        }

        Alert::success('Ok', 'Dados dos Deputados carregados com sucesso.');
        return redirect()->route('dashboard');
    }
}
