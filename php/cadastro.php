<?php

/*FIZ O CODIGO PARA TESTA UMA LÓGICA QUE PENSEI PARA RESOLVER O CADASTRO DE ESTADO E CIDADE*/

$cidades_acre = ['Acrelândia' , 'Assis Brasil', 'Brasiléia', '	Bujari', 'Capixaba' ,'	Cruzeiro do Sul', '	Epitaciolândia', 'Feijó', 'Jordão', 'Manoel Urbano' ,'	Marechal Thaumaturgo', 'Mâncio Lima', '	Plácido de Castro', 'Porto Acre' , 'Porto Walter', 'Rio Branco', '	Rodrigues Alves', '	Santa Rosa do Purus', '	Sena Madureira', 'Senador Guiomard', 'Tarauacá', 'Xapuri' ];

$acre = ($_POST['acre']);

if ($acre == true){
    $_POST['Cidade'] = $cidades_acre;
}

?>