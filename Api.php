<?php

class Api {
    static function _licence( $localizador ) {
        $path = "https://licenca.infinitisistemas.com.br";
        $path .= "/localizaregistro.php";
        $path .= "?localizador={$localizador}";
        $response_string_json = file_get_contents($path);
        $response_string_json = utf8_decode($response_string_json);
        $response_string_json = str_replace('?', '', $response_string_json);
        $response = json_decode($response_string_json, true);
        $host = $response[0]['HOST_REMOTO'];
        $port = $response[0]['PORTA'];
        return "http://{$host}:{$port}";
    }
    static function _welcome() {
        $welcome_base64 = $_REQUEST['dwwelcomemessage'];
        $welcome_json_string = base64_decode($welcome_base64);
        $welcome = json_decode( $welcome_json_string, true );
        return $welcome;
    }
    static function login( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/login?{$query_string}" );
    }
    static function lernomes( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/lernomes?{$query_string}" );
    }
    static function lerpecasnome( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/lerpecasnome?{$query_string}" );
    }
    static function lerpecasIdentNome( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/lerpecasIdentNome?{$query_string}" );
    }
    static function entregarpecaident( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/entregarpecaident?{$query_string}" );
    }
    static function devolverpecaident( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/devolverpecaident?{$query_string}" );
    }
    static function lerpecaident( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/lerpecaident?{$query_string}" );
    }
    static function lerpecas( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/lerpecas?{$query_string}" );
    }
    static function lerpecasestoque( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/lerpecasestoque?{$query_string}" );
    }
    static function lerpecasuso( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/lerpecasuso?{$query_string}" );
    }
    static function lerlocais( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/lerlocais?{$query_string}" );
    }
    static function lerpecaslocal( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/lerpecaslocal?{$query_string}" );
    }
    static function movimentarpecalocal( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/movimentarpecalocal?{$query_string}" );
    }
    static function lermovimentacaopeca( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/lermovimentacaopeca?{$query_string}" );
    }
    static function lermotivos( $query_string ) {
        $welcome = Api::_welcome();
        $localizador = $welcome['localizador'];
        $host = Api::_licence($localizador);
        echo file_get_contents( "{$host}/lermotivos?{$query_string}" );
    }
}