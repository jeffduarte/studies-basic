<?php
    
   
    /**
     * @author Jeferson Duarte <jeferson.barbosa@salvador.ba.gov.br>
     * @method mixed caminhoRelativo ()
     * @method mixed dd ()
     * @method mixed absolutePath ()
     * @method mixed autoload ()
     */


    //retorna uma string e retorno de diretório equivalente ao valor do parâmetro
    // caminhoRelativo(3) ==> "../../../"
    function caminhoRelativo ($distancia){
		return str_repeat("../", $distancia);
	}

    //Mostra as variáveis na tela e interrompe a aplicação
    function dd(){
        var_dump(func_get_args());

        die();
    }

    //Pega o diretório relativo do arquivo que é chamado
    function absolutePath(){
        $position = strrpos($_SERVER['PHP_SELF'], '/' );
        $pathWithoutFile = substr($_SERVER['PHP_SELF'], 0, $position);

        return $pathWithoutFile;
    }

    //retorna o caminho com a distância do arquivo até a raiz, independentemente de sua localização
    function autoload(){
        $distance = substr_count($_SERVER['PHP_SELF'], '/');

        //retira da contagem a última barra do arquivo nem a primeira barra da raiz
        $distance -= 2;

        $path = caminhoRelativo($distance); 
        return $path;
    }    
    
 