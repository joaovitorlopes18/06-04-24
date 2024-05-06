<?php
class Musica{ //CLASS= cria objeto fruta
    public $cantor; // PUBLIC=cria variável da interface objeto
    public $musica;

    // Método Construtor:
    // Objeto SEM construtor= ABSTRATO/ Objeto COM construtor= FUNCTION_CONSTRUCT
    function __construct($cantor, $musica){
        $this->cantor = $cantor; //THIS= "este", chama o objeto dentro dele mesmo, defindo valor para as variáveis
        $this->musica = $musica; 
    }

    //get= pegar/alcançar
    function get_cantor(){
        return $this->cantor;
    }

    //get= pegar/alcançar
    function get_musica(){
        return $this->musica;
    }    
}

$som = new Musica("Marilia","eu sei de cor"); //NEW= sendo criado um novo objeto $maca

//ECHO= console.log
echo "A cantora é : " . $som->get_cantor(); //Sendo invocado um nomo objeto $maca, o qual esta sendo invocado o metodo {function} get_cantor, que, 
//por sua vez, esta renderizando o texto (cantor da fruta) "vMaçã" declarado na linha 24

echo "<br/>"; // Renderizando uma quebra de linha em html

echo "A musica é: " . $som->get_musica();//Sendo invocado um nomo objeto $maca, o qual esta sendo invocado o metodo {function} get_musica$musica, que, 
//por sua vez, esta renderizando o texto (musica$musica da fruta) "vermelho" declarado na linha 24

/*PADRÕES DE NOMECLATURA:
 * kebab-case: todas as letras minúsculas com traço "-" entre as palavras, utilizado mais em css e arquivos comuns.
 * PascalCase: A Primeira Letra De Cada Palavra É Maiúscula, utilizada mais em Objetos
 * camelCase: a primeira letra sempre começa com minúscula e as Próximas Palavras São Maiúsculas A Primeira Letra De Cada Palavra, utilizado mais na criação de métodos
 * snake_case: todas as letras são minúsculas e tem um sublinhado "_" no meio de cada palavra, utilizado mais na criação de variáveis
 * SCREAM_CASE: todas as letras são maiúsculas e são separadas por sublinhado "_", utilizado mais em variáveis CONSTANTES de ambiente/interface
 */

?>
