<?php
$opcao = "";
//pscalcase
echo "ᓚᘏᗢ------------------------------------ᓚᘏᗢ";
echo "ᓚᘏᗢ-------------menu(PSI)--------------ᓚᘏᗢ";
echo "ᓚᘏᗢ------------------------------------ᓚᘏᗢ";
            while($opcao !=6){}                   
echo " Gestão de acessos: 1";
echo " uso aceitáveis de ativos: 2";
echo " gestão de incidentes: 3";
echo " conformidade legal (lgpd): 4";
echo " responsabilidades: 5";





    $opcao  = readline ("escolha");
        switch ($opcao)  {

        case 1:
           echo" Gestão de Acessos: Regras para senhas, autenticação de dois fatores e perfis de acesso baseados na necessidade de saber.";

break;
            case 2:
                echo "Diretrizes para uso de computadores, internet, e-mail, dispositivos móveis e 
Trabalho remoto.";

break;
                case 3:
                    echo "Procedimentos para relatar e tratar violações de segurança ou vazamento de dados.";

break;
                    case 4: 
                        echo "Garantia de aderência à Lei Geral de Proteção de Dados e outras legislações vigentes.";
break;
                        case 5:
                            echo "Definição dos papéis de todos os colaboradores, gestores e da equipe de TI na segurança.";                        
                    
break;

















        }  






















?>
