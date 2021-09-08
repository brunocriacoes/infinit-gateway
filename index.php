<?php

header('Content-Type: text/html; charset=utf-8');
header('Access-Control-Allow-Origin: *');

function set_log($mensagem)
{
    file_put_contents(__DIR__ . "/log.txt", date('d/m/Y H:i') . " {$mensagem} \n",  FILE_APPEND);
}

function get_curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_HEADER         ,false);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT  ,true);
    curl_setopt($ch, CURLOPT_FORBID_REUSE   ,true);
    curl_setopt($ch, CURLOPT_TIMEOUT        ,30);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER ,false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST ,false);

    $output = curl_exec($ch);
    echo curl_error($ch);
    curl_close($ch);
    return $output;
}

include __DIR__ . '/Api.php';

function router($path, $action_hook)
{
    $corruente_uri = $_SERVER['REQUEST_URI'];
    $corruente_path = parse_url($corruente_uri, PHP_URL_PATH);
    $corruente_quary = parse_url($corruente_uri, PHP_URL_QUERY);
    $corruente_path = str_replace(['infinit-acessos/','acesso/'], '', $corruente_path);
    
    if ($corruente_path == $path) {
        $explode_method_instace = explode('@', $action_hook);
        call_user_func($explode_method_instace, urldecode($corruente_quary));
        return;
    }
}

router('/login', 'Api@login');
router('/lernomes', 'Api@lernomes');
router('/lerpecasnome', 'Api@lerpecasnome');
router('/lerpecasIdentNome', 'Api@lerpecasIdentNome');
router('/entregarpecaident', 'Api@entregarpecaident');
router('/devolverpecaident', 'Api@devolverpecaident');
router('/lerpecaident', 'Api@lerpecaident');
router('/lerpecas', 'Api@lerpecas');
router('/lerpecasestoque', 'Api@lerpecasestoque');
router('/lerpecasuso', 'Api@lerpecasuso');
router('/lerlocais', 'Api@lerlocais');
router('/lerpecaslocal', 'Api@lerpecaslocal');
router('/movimentarpecalocal', 'Api@movimentarpecalocal');
router('/lermovimentacaopeca', 'Api@lermovimentacaopeca');
router('lermotivos', 'Api@lermotivos');
router('/devolverpecaident', 'Api@devolverpecaident');
