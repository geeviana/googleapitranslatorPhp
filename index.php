<html>
    <head>
    <title>Google Cloud Translate</title>
    </head>
    <body>
        <?php
            require_once ('vendor/autoload.php');
            use \Statickidz\GoogleTranslate;

            $source = 'pt-Br';
            $target = '';
            $i = 1;
            $text = 'Esse é um teste de API de Tradução de textos da Google para estudo de caso a pedido do Marcelo Giacomini';

            echo '<h1>'.$text.'</h1>';
            $trans = new GoogleTranslate();
            for($i==1;$i<=4;$i++){
                if($i == 1){
                    
                    $target = 'en';
                    $result = $trans->translate($source, $target, $text);

                    echo '<h2>Inglês: '.$result.'</h2>';
                }else if($i == 2){
                    $target = 'fr';
                    $result = $trans->translate($source, $target, $text);
                    echo '<h2>Francês: '.$result.'</h2>';
                }else if($i == 3){
                    $target = 'it';
                    $result = $trans->translate($source, $target, $text);
                    echo '<h2>Italiano: '.$result.'</h2>';
                }else if($i == 4){
                    $target = 'es';
                    $result = $trans->translate($source, $target, $text);
                    echo '<h2> Espanhol: '.$result.'</h2>';
                }
            
            }
        ?>

    </body>
</htmL>