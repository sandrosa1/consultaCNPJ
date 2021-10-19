<?php

namespace App\WebService;

class Speedio{

    /**
     * @var base da API do Speedio
     */
    const URL_BASE = 'https://api-publica.speedio.com.br';

    /**
     * Método responsavel por consultar um CNPJ nas apis do Speedio
     *
     * @param string $cnpj
     * @return array
     */
    public function consultarCNPJ($cnpj){

        //Remove os caracteres que nao for numero e subistitui por vazio
        $cnpj = preg_replace('/\D/','',$cnpj);
        //Retorna a execução da consulta
        return $this->get("/buscarcnpj?cnpj={$cnpj}");
    }

    public function get($resource){
        //Endpoint completo
        $endpoint = self::URL_BASE.$resource;
        
        //Inicia o curl
        $curl = curl_init();

        //CONFIGUR
        curl_setopt_array($curl,[

            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);
        //EXECUTA A REQUISIÇÃO
        $response = curl_exec($curl);

        //FECHA A CONEXÃO DO CURL
        curl_close($curl);

        //RESPONSE EM ARRAY
        $responseArray = json_decode($response,true);

        //RETORNA O ARRAY COM OS DADOS
        return is_array($responseArray) ? $responseArray : [];

    }

}