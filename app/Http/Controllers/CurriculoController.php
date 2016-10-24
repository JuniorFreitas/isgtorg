<?php

namespace App\Http\Controllers;

use App\Curriculo;
use App\Cursos;
use App\Escolaridade;
use App\Experiencia;
use App\Helper\Canvas;
use App\Helper\DataHora;
use App\Http\Requests\CurriculoRequest;
use Illuminate\Http\Request;

class CurriculoController extends Controller
{
    /**
     * @var Curriculo
     */
    private $modelCurriculo;
    /**
     * @var Cursos
     */
    private $modelCursos;
    /**
     * @var Experiencia
     */
    private $modelExperiencia;
    /**
     * @var Escolaridade
     */
    private $modelEscolaridade;

    /**
     * CurriculoController constructor.
     * @param Curriculo $modelCurriculo
     * @param Cursos $modelCursos
     * @param Escolaridade $modelEscolaridade
     * @param Experiencia $modelExperiencia
     */
    public function __construct(Curriculo $modelCurriculo, Cursos $modelCursos, Escolaridade $modelEscolaridade, Experiencia $modelExperiencia)
    {
        $this->modelCurriculo = $modelCurriculo;
        $this->modelCursos = $modelCursos;
        $this->modelExperiencia = $modelExperiencia;
        $this->modelEscolaridade = $modelEscolaridade;
    }

    public function index()
    {
        return view('curriculo.cadastro');
    }

    public function verificaCpf(Request $request)
    {
        $BuscaRegistro = $this->modelCurriculo->select('cpf')->where("cpf", $request->input('cpf'))->get();
        if ($BuscaRegistro->count() == 1) {
            return "500";
        }
    }

    public function cadCurriculo(CurriculoRequest $request, Canvas $canvas)
    {
        $BuscaRegistro = $this->modelCurriculo->select('cpf')->where("cpf", $request->input('cpf'))->get();
        if ($BuscaRegistro->count() == 1) {
            return redirect()->route('trabalhe.error', ['error' => '500']);
        }
        $Data = new DataHora($request->input('nascimento'));
        $foto = $request->file('foto');
        $curriculo = $request->file('curriculo');
        $nomeAnexo = str_slug($request->input('nome') . '-' . $request->input('cpf')) . '.';
        if ($request->hasFile('foto')):
            $foto->move('curriculo/fotos', $nomeAnexo . $foto->getClientOriginalExtension());
            $nomeI = asset('curriculo/fotos/' . $nomeAnexo . $foto->getClientOriginalExtension());
            $novoNome = "__" . $nomeAnexo . $foto->getClientOriginalExtension();
            $pasta = 'curriculo/fotos/' . $novoNome;
            $canvas->carregaUrl($nomeI)->redimensiona('480', '')->grava($pasta, 90);
            unlink('curriculo/fotos/' . $nomeAnexo . $foto->getClientOriginalExtension());
        endif;
        if ($request->hasFile('curriculo')):
            $curriculo->move('curriculo', $nomeAnexo . $curriculo->getClientOriginalExtension());
            $anexoCurriculo = $nomeAnexo . $curriculo->getClientOriginalExtension();
        endif;
        /*CREATE CURRICULO*/
        $this->modelCurriculo->cpf = $request->input('cpf');
        $this->modelCurriculo->nome = $request->input('nome');
        $this->modelCurriculo->nascimento = $Data->dataInsert();
        $this->modelCurriculo->cep = $request->input('cep');
        $this->modelCurriculo->logradouro = $request->input('logradouro');
        $this->modelCurriculo->cidade = $request->input('cidade');
        $this->modelCurriculo->telefone = $request->input('tel');
        $this->modelCurriculo->celular = $request->input('cel');
        $this->modelCurriculo->email = $request->input('email');
        $this->modelCurriculo->foto = $novoNome;
        $this->modelCurriculo->deficiente = $request->input('deficiente');
        $this->modelCurriculo->viajar = $request->input('viajar');
        $this->modelCurriculo->anexo = $anexoCurriculo;
        $this->modelCurriculo->visto = 0;
        $this->modelCurriculo->selecionado = 0;
        $this->modelCurriculo->save();
        /*CREATE CURSOS*/
        $this->modelCursos->id_curriculos = $this->modelCurriculo->id;
        $this->modelCursos->curso = $request->input('curso');
        $this->modelCursos->empresa = $request->input('empresa');
        $this->modelCursos->inicio = $request->input('inicio');
        $this->modelCursos->termino = $request->input('fim');
        $this->modelCursos->save();
        /*CREATE ESCOLARIDADE*/
        $this->modelEscolaridade->id_curriculos = $this->modelCurriculo->id;
        $this->modelEscolaridade->escolaridade = $request->input('escolaridade');
        $this->modelEscolaridade->save();
        /*CREATE Experiencia*/
        $this->modelExperiencia->id_curriculos = $this->modelCurriculo->id;
        $this->modelExperiencia->cargo = $request->input('cargo');
        $this->modelExperiencia->empresa = $request->input('empresaexp');
        $this->modelExperiencia->inicio = $request->input('inicioexp');
        $this->modelExperiencia->fim = $request->input('fimexp');
        $this->modelExperiencia->save();
        return redirect()->route('trabalhe.concluido', ['id' => $this->modelCurriculo->id]);
    }

    public function cadastrado(Request $request)
    {
        $BuscaRegistro = $this->modelCurriculo->select()->where('id', $request->get('id'))->get();
        if (!$request->get('id')) {
            return redirect()->route('trabalhe.error', ['error' => '404']);
        }
        if ($BuscaRegistro->count() == 0) {
            return redirect()->route('trabalhe.error', ['error' => '404']);
        }
        return view('curriculo.concluido');
    }

    public function formcadastro()
    {
        return view('curriculo.consultCpf');
    }

    public function formedit(Request $request)
    {
        $resultsD = $this->modelCurriculo->select()->where('cpf',$request->get('cpf'))->get();
        $resultsF = $this->modelCursos->select()->where('id',$resultsD[0]->id)->get();
        $resultsEsc = $this->modelEscolaridade->select()->where('id',$resultsD[0]->id)->get();
        $resultsExp = $this->modelExperiencia->select()->where('id',$resultsD[0]->id)->get();

        return view('curriculo.formedit', compact('resultsD','resultsF','resultsEsc','resultsExp'));
    }

    public function error(Request $request)
    {
        $msg = $request->get('error');
        return view('curriculo.error', compact('msg'));
    }

}
