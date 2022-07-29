<?php

session_start();
require("conexao.php");
        
    

    $arquivo = 'inscricoes.xls';

    $html = '';
    $html .= '<table border="1">';
    $html .= '<tr>';
    $html .= '<td class="text-center font-weight-bold">'. utf8_decode('Nº') . '</td>';
    $html .= '<td class="text-center font-weight-bold">Nome</td>';
    $html .= '<td class="text-center font-weight-bold">Whatsapp</td>';
    $html .= '<td class="text-center font-weight-bold">Categoria</td>';
    $html .= '</tr>';

    $sql = $db->query("SELECT * FROM inscricoes ");
    $dados = $sql->fetchAll();
    foreach($dados as $dado){

        $html .= '<tr>';
        $html .= '<td>'.$dado['id']. '</td>';
        $html .= '<td>'.utf8_decode($dado['nome']). '</td>';
        $html .= '<td>'.utf8_decode($dado['fone']). '</td>';
        $html .= '<td>'. utf8_decode($dado['categoria']) . '</td>';
        $html .= '</tr>';

    }

    $html .= '</table>';

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$arquivo.'"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');

    echo $html;
        
    

?>