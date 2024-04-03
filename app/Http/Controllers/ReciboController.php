<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Log;

class ReciboController extends Controller
{

    //Retorna o formulário
    public function index()
    {
        return view('index');
    }

    //Faz o download do PDF
    public function download(Request $request)
    {
        $nomeCliente = $request->input('nomeCliente');
        $produto1 = $request->input('produto1');
        $produto2 = $request->input('produto2');
        $produto3 = $request->input('produto3');
        $produto4 = $request->input('produto4');
        $description = $request->input('description');
        $valor = $request->input('valor');

        $data = [
            'nomeCliente' => $nomeCliente,
            'produto1' => $produto1,
            'produto2' => $produto2,
            'produto3' => $produto3,
            'produto4' => $produto4,
            'description' => $description,
            'valor' => $valor,
        ];

        //Recebe o HTML 
        $html = view('reciboPDF', $data);

        //Instancia o Dompdf
        $dompdf = new Dompdf();

        //Carrega o HTML na bibilioteca dompdf
        $dompdf->loadHtml($html);

        //Renderiza o PDF
        $dompdf->render();

        //Nome do arquivo
        $filename = 'recibo.pdf';

        // Download do PDF
        return $dompdf->stream($filename);
    }


    //Abre a tela de visualização do PDF
    public function imprimir(Request $request)
    {
        $nomeCliente = $request->input('nomeCliente');
        $produto1 = $request->input('produto1');
        $produto2 = $request->input('produto2');
        $produto3 = $request->input('produto3');
        $produto4 = $request->input('produto4');
        $description = $request->input('description');
        $valor = $request->input('valor');

        $data = [
            'nomeCliente' => $nomeCliente,
            'produto1' => $produto1,
            'produto2' => $produto2,
            'produto3' => $produto3,
            'produto4' => $produto4,
            'description' => $description,
            'valor' => $valor,
        ];

        //Recebe o HTML 
        $html = view('reciboPDF', $data);

        //Instancia o Dompdf
        $dompdf = new Dompdf();

        //Carrega o HTML na bibilioteca dompdf
        $dompdf->loadHtml($html);

        //Renderiza o PDF
        $dompdf->render();

        //Nome do arquivo
        $filename = 'recibo.pdf';

        // Download do PDF
        return $dompdf->stream($filename, ['Attachment' => 0]);
    }

    //Apenas para visualização do PDF
    /*public function visualizaPDF(Request $request)
    {
        return view('reciboPDF');
    }*/
}
