<?php
// Establece la zona horaria predeterminada
    date_default_timezone_set('GMT');

    // Configurar la expiración a tres horas a partir de ahora
    $horas3 = gmdate("D, d M Y H:i:s", time() + 3 * 60 * 60) . " GMT";
    header("Expires: {$horas3}");

    // Configurar la expiración a un año a partir de ahora
    $anyo1 = gmdate("D, d M Y H:i:s", time() + 365 * 24 * 60 * 60) . " GMT";
    header("Expires: {$anyo1}");

    // Establecer una fecha en el pasado para marcar expirado
    $pasado = gmdate("D, d M Y H:i:s", time() - 3600) . " GMT";
    header("Expires: {$pasado}");

    // Evitar la caché del navegador y/o proxy
    // header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    // header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    // header("Cache-Control: no-store, no-cache, must-revalidate");
    // header("Cache-Control: post-check=0, pre-check=0", false);
    // header("Pragma: no-cache");

    // //header("WWW-Authenticate: Basic realm=\"Acceso restringido\"");
    // header("HTTP/1.1 401 Unauthorized");
    // echo "Error 401: No tienes autorización para acceder.";

    // header("HTTP/1.1 403 Forbidden");
    // echo "Error 403: No tienes permisos para acceder.";

    header("HTTP/1.1 404 Not Found");
    echo "Error 404: La página no ha sido encontrada.";

?>