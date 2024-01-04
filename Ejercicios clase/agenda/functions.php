<?php
function valida_nombre($nombre)
{
    if ($nombre = null || $nombre = '') {
        return false;
    }
    return true;
}
