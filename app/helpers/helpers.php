<?php

function formatException(Exception $e)
{
    var_dump("Erro no arquivo <b>{$e->getFile()}</b> na linha <b>{$e->getLine()}</b> com a mensagem: <b><i>{$e->getMessage()}</b></i>");
}