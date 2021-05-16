<?php

header('Content-Type: text/html; charset=utf-8');
header('Access-Control-Allow-Origin: *');

include __DIR__ . '/Api.php';

function router( $path, $action_hook ) {
    $corruente_uri = $_SERVER['REQUEST_URI'];
    $corruente_path = parse_url($corruente_uri, PHP_URL_PATH);
    $corruente_quary = parse_url($corruente_uri, PHP_URL_QUERY);
    if( $corruente_path == $path ) {
        $explode_method_instace = explode( '@', $action_hook );
        call_user_func( $explode_method_instace, urldecode( $corruente_quary ) );
        return;
    }
}


router('/login', 'Api@login' );
router('/lernomes', 'Api@lernomes' );
router('/lerpecasnome', 'Api@lerpecasnome' );
router('/lerpecasIdentNome', 'Api@lerpecasIdentNome' );
router('/entregarpecaident', 'Api@entregarpecaident' );
router('/devolverpecaident', 'Api@devolverpecaident' );
router('/lerpecaident', 'Api@lerpecaident' );
router('/lerpecas', 'Api@lerpecas' );
router('/lerpecasestoque', 'Api@lerpecasestoque' );
router('/lerpecasuso', 'Api@lerpecasuso' );
router('/lerlocais', 'Api@lerlocais' );
router('/lerpecaslocal', 'Api@lerpecaslocal' );
router('/movimentarpecalocal', 'Api@movimentarpecalocal' );
router('/lermovimentacaopeca', 'Api@lermovimentacaopeca' );
router('lermotivos', 'Api@lermotivos' );
router('/devolverpecaident', 'Api@devolverpecaident' );

