# Tipos de erros PHP

| Valor | Constante | Descrição |
|:-:|:-:|---|
| 1  |	E_ERROR (integer)  |  Erros fatais de execução. Esses indicam erros que não podem ser recuperados, como erro de alocação de memória. A execução do script é interrompida. |
|  2 |  E_WARNING (integer) | Alertas de execução (erros não fatais). A execução do script não é interrompida.  |
|4   |  E_PARSE (integer) | Erros de análise no momento de compilação. Os erros de análise são gerados somente pelo analisador. |
|8   |  E_NOTICE (integer) | Notificações de execução. Indica que o script encontrou algo que pode indicar um erro, mas também pode acontecer durante a execução normal do script.  |
|16  |  E_CORE_ERROR (integer) | Erros fatais que ocorrem durante a incialização do PHP. Esse é como um E_ERROR, só que gerado no núcleo do PHP.  |
|32  | E_CORE_WARNING (integer)  | Alertas (erros não fatais) que ocorrem durante a inicialização do PHP. É como um E_WARNING, só que gerado pelo núcleo do PHP.  |
|64  | E_COMPILE_ERROR (integer)  | Erros fatais de compilação. Como um E_ERROR, mas gerado pelo Zend Scripting Engine.  |
|128 |  E_COMPILE_WARNING (integer) | Alertas durante a compilação (erros não fatais). É como um E_WARNING, só que gerado pelo Zend Scripting Engine.  |
|256 | 	E_USER_ERROR (integer)  |  Mensagem de erro gerada pelo usuário. É como um E_ERROR, mas gerado no código PHP usando a função PHP trigger_error(). |
| 512   | E_USER_WARNING (integer) | Mensagem de alerta gerada pelo usuário. É como um E_WARNING, mas gerado no código PHP usando a função PHP trigger_error().  |
|   1024 | 	E_USER_NOTICE (integer)  |  E_NOTICE, mas gerada no código PHP usando a função PHP trigger_error(). |
|   2048 | E_STRICT (integer)  | 	Habilita o PHP a sugerir mudanças em seu código para certificar a melhor interoperabilidade e compatibilidade do seu código.  |
|   4096 | E_RECOVERABLE_ERROR (integer)  | Erro faltal "capturável" (com catch). Indica que provavelmente um erro perigoso aconteceu, mas não deixou a Engine em um estado inutilizável. Se o erro for pêgo por um handler definido por usuário, a aplicação aborta como se fosse um E_ERROR.  |
|  8192  | E_DEPRECATED (integer)  | Notificação de execução. Habilite isto para receber alertas sobre códigos que não vão funcionar em versões futuras do PHP.  |
|  16384  | E_USER_DEPRECATED (integer)  | Mensagem de alerta gerada pelo usuário. É como um E_DEPRECATED, mas é gerada no código PHP usandoa função trigger_error().  |
|  32767  | E_ALL (integer)  | Todos os erros, alertas e notificações, exceto as do E_SCRIPT nas versões anteriores ao PHP 5.4.0.  |

# Configurar a exibição em arquivo ScriptPHP
    <?php
    
    // Desativa toda exibição de erros
    error_reporting(0);

    // Exibe erros simples
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    // Exibir E_NOTICE também pode ser bom para mostrar variáveis não iniciadas...
    // ou com erros de digitação.
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

    // Exibe todos os erros, exceto E_NOTICE
    error_reporting(E_ALL & ~E_NOTICE);

    // Exibe todos os erros PHP (see changelog)
    error_reporting(E_ALL);

    // Exibe todos os erros PHP
    error_reporting(-1);

    // Mesmo que error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);

    ?>


