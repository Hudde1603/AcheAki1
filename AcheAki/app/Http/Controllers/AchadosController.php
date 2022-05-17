<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ClienteModel;
use App\Models\ArtigoModel;
use App\Models\ElectronicoModel;
use App\Models\IpadMdel;
use App\Models\TelefoneModel;
use App\Models\ComputadorModel;
use App\Models\AcessoriosModel;
use App\Models\FioModel;
use App\Models\AnelModel;
use App\Models\PastaModel;
use App\Models\OculosModel;
use App\Models\DocumentoModel;
use App\Models\PassaporteModel;
use App\Models\BilheteModel;
use App\Models\CartaoEleitoral;

class AchadosController extends Controller
{

    public function index()
    {

        $todo = DB::table('artigo')
            ->where('status', 'achado')
            ->orderBy('idartigo', 'desc')
            ->get();

         $todo = DB::table('artigo')
                    ->where('status', 'achado')
                    ->orderBy('idartigo', 'desc')
                    ->get();


                return view('achados', ['todos' => $todo]);
    }

    public function creat(Request $request)
    {


        //regras de validação 
        $regras = [
            'selType' => 'required|in:electronico,acessorios,documento',

        ];

        //mensagen de fedbek de validação
        $feedback = [

            'selType.required' => 'Celecione Uma Opção ee'
        ];

        $request->validate($regras, $feedback);


        ///primeiro incluimos os dados do utilizador
        $nome = $request->get('nome');
        $telefone = $request->get('telefone');
        $email = $request->get('emial');

        ///add user 
        $users = new ClienteModel();
        $users->nome = $nome;
        $users->telefone = $telefone;
        $users->email = $email;

        $users->save();


        //dados item
        $item_name = $request->get('item_name');
        $descricao = $request->get('descricao');
        $foto = $request->get('foto');
        $local = $request->get('local');
        //pegar id user
        $usersid = ClienteModel::where('nome', $nome)
            ->where('telefone', $telefone)
            ->where('email', $email)
            ->get()->first();

        ///adicionar artigo com id doclinte
        $artigos = new ArtigoModel();
        $artigos->descricao = $descricao;
        $artigos->foto = $foto;
        $artigos->status = 'achado';
        $artigos->idcliente = $usersid->idcliente;
        $artigos->item_name = $item_name;
        $artigos->local = $local;
        $artigos->data = date("Y/m/d");

        $artigos->save();

        ///pegar id do artigo 
        $artigosid = ArtigoModel::where('item_name', $item_name)
            ->where('foto', $foto)
            ->where('idcliente', $usersid->idcliente)
            ->get()->first();


        ///cadastrar achados consuante o valor escolhido
        if ($request->get('selType') == 'electronico') {
            //itens do select
            $cor = $request->get('cor');
            $marca = $request->get('marca');
            $modelo = $request->get('modelo');


            //add no electronico
            $eletronicos = new ElectronicoModel();
            $eletronicos->cor = $cor;
            $eletronicos->marca = $marca;
            $eletronicos->modelo = $modelo;
            $eletronicos->idartigo = $artigosid->idartigo;

            $eletronicos->save();

            ///peggar id electronico
            $eletronicosid = ElectronicoModel::where('modelo', $modelo)
                ->where('marca', $marca)
                ->where('idartigo', $artigosid->idartigo)
                ->get()->first();

            if ($request->get('Ipad') != null) {

                ///ad on ipad
                $Ipad = new IpadMdel();
                $Ipad->ideletronico = $eletronicosid->ideletronico;
                $Ipad->idartigo = $artigosid->idartigo;

                $Ipad->save();


                $todo = DB::table('artigo')
                    ->where('status', 'achado')
                    ->orderBy('idartigo', 'desc')
                    ->get();


                return view('achados', ['todos' => $todo]);
            } elseif ($request->get('Telefone') != null) {


                $Telefone_Tipo = $request->get('Telefone_Tipo');

                ///ad on Telefone
                $Telefones = new TelefoneModel();
                $Telefones->ideletronico = $eletronicosid->ideletronico;
                $Telefones->idartigo = $artigosid->idartigo;
                $Telefones->tipo = $Telefone_Tipo;

                $Telefones->save();

                 $todo = DB::table('artigo')
                    ->where('status', 'achado')
                    ->orderBy('idartigo', 'desc')
                    ->get();


                return view('achados', ['todos' => $todo]);
            } elseif ($request->get('Computador') != null) {

                ///ad on Telefone
                $Computadores = new ComputadorModel();
                $Computadores->ideletronico = $eletronicosid->ideletronico;
                $Computadores->idartigo = $artigosid->idartigo;

                $Computadores->save();

                 $todo = DB::table('artigo')
                    ->where('status', 'achado')
                    ->orderBy('idartigo', 'desc')
                    ->get();


                return view('achados', ['todos' => $todo]);
            }
        } elseif ($request->get('selType') == 'acessorios') {

            $cor_acessorio = $request->get('cor_acessorio');
            $Tamanho = $request->get('Tamanho');
            $marca_acessorio = $request->get('marca_acessorio');

            //add no electronico
            $acessorios = new AcessoriosModel();
            $acessorios->cor = $cor_acessorio;
            $acessorios->tamanho = $Tamanho;
            $acessorios->marca = $marca_acessorio;
            $acessorios->idartigo = $artigosid->idartigo;

            $acessorios->save();


            ///peggar id electronico
            $acessoriosid = AcessoriosModel::where('tamanho', $Tamanho)
                ->where('marca', $marca_acessorio)
                ->where('idartigo', $artigosid->idartigo)
                ->get()->first();

            if ($request->get('Fio') != null) {

                $fios = new FioModel();
                $fios->idacessorio = $acessoriosid->idacessorio;
                $fios->idartigo = $artigosid->idartigo;

                $fios->save();

                 $todo = DB::table('artigo')
                    ->where('status', 'achado')
                    ->orderBy('idartigo', 'desc')
                    ->get();


                return view('achados', ['todos' => $todo]);
            } elseif ($request->get('Anel') != null) {

                $anel = new AnelModel();
                $anel->idacessorio = $acessoriosid->idacessorio;
                $anel->idartigo = $artigosid->idartigo;

                $anel->save();

                 $todo = DB::table('artigo')
                    ->where('status', 'achado')
                    ->orderBy('idartigo', 'desc')
                    ->get();


                return view('achados', ['todos' => $todo]);
            } elseif ($request->get('Pasta') != null) {

                $pasta = new PastaModel();
                $pasta->idacessorio = $acessoriosid->idacessorio;
                $pasta->idartigo = $artigosid->idartigo;

                $pasta->save();

                 $todo = DB::table('artigo')
                    ->where('status', 'achado')
                    ->orderBy('idartigo', 'desc')
                    ->get();


                return view('achados', ['todos' => $todo]);
            } elseif ($request->get('Oculos') != null) {
                $oculos = new OculosModel();
                $oculos->idacessorio = $acessoriosid->idacessorio;
                $oculos->idartigo = $artigosid->idartigo;

                $oculos->save();



                 $todo = DB::table('artigo')
                    ->where('status', 'achado')
                    ->orderBy('idartigo', 'desc')
                    ->get();


                return view('achados', ['todos' => $todo]);
            }
        } elseif ($request->get('selType') == 'documento') {

            $Genero = $request->get('genero_doc');
            $nome_documento = $request->get('nome_documento');

            //add no electronico
            $docomentos = new DocumentoModel();
            $docomentos->genero = $Genero;
            $docomentos->nomedocumento = $nome_documento;
            $docomentos->idartigo = $artigosid->idartigo;

            $docomentos->save();


            ///peggar id electronico
            $docomentosid = DocumentoModel::where('genero', $Genero)
                ->where('nomedocumento', $nome_documento)
                ->where('idartigo', $artigosid->idartigo)
                ->get()->first();


            if ($request->get('Bilhete') != null) {

                $filhacao_pai = $request->get('filhacao_pai');
                $filhacao_mae = $request->get('filhacao_mae');

                $bilhete = new BilheteModel();
                $bilhete->filhacao1 = $filhacao_pai;
                $bilhete->filhacao2 = $filhacao_mae;
                $bilhete->iddocumento = $docomentosid->iddocumento;
                $bilhete->idartigo = $artigosid->idartigo;

                $bilhete->save();




                 $todo = DB::table('artigo')
                    ->where('status', 'achado')
                    ->orderBy('idartigo', 'desc')
                    ->get();


                return view('achados', ['todos' => $todo]);
            } elseif ($request->get('Passaporte') != null) {

                $nmero_passaporte = $request->get('nmero_passaporte');

                $nome_pessoal = $request->get('nome_pessoal');
                $tipo_passarporte = $request->get('tipo_passarporte');



                $passaporte = new PassaporteModel();
                $passaporte->numero = $nmero_passaporte;
                $passaporte->numpessoal = $nome_pessoal;
                $passaporte->tipo = $tipo_passarporte;
                $passaporte->iddocumento = $docomentosid->iddocumento;
                $passaporte->idartigo = $artigosid->idartigo;

                $passaporte->save();

                 $todo = DB::table('artigo')
                    ->where('status', 'achado')
                    ->orderBy('idartigo', 'desc')
                    ->get();


                return view('achados', ['todos' => $todo]);
            } elseif ($request->get('Cartão_Eleitoral') != null) {
                $crupo_eleitoral = $request->get('crupo_eleitoral');

                $numero_eleitoral = $request->get('numero_eleitoral');

                $cartaoeleitoral = new CartaoEleitoral();
                $cartaoeleitoral->grupo = $crupo_eleitoral;
                $cartaoeleitoral->numeleitor = $numero_eleitoral;
                $cartaoeleitoral->iddocumento = $docomentosid->iddocumento;
                $cartaoeleitoral->idartigo = $artigosid->idartigo;

                $cartaoeleitoral->save();;
                 $todo = DB::table('artigo')
                    ->where('status', 'achado')
                    ->orderBy('idartigo', 'desc')
                    ->get();


                return view('achados', ['todos' => $todo]);
            }
        }
    }
}
