<?php

spl_autoload_register(
    function (string $namespaceClasse): void {
		$diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
        @include_once getcwd() . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);
