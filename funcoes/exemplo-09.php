<?php
$hieraquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: diretor comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Inicio: Gerente de vendas
                    array(
                        'nome_cargo' =>'Gerente de vendas'
                    )
                    //Termino: Gerente de vendas
                )
            ),
            //Termino: diretor comercial
            //Inicio: diretor financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //inicio: gerente de contas a pagar
                    array(
                        'nome_cargo' => 'Gerente contas a pagar',
                        'subordinados' => array(
                            //inicio: Supervisor de pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de pagamentos'
                            )
                            //fim: Supervisor de pagamentos

                        )

                        ),
                    //termino: gerente de contas a pagat
                    //inicio: gerente de compras
                    array(
                        'nome_cargo' => 'Gerente de compras',
                        'subordinados'=> array(
                            //inicio: Supervisor de suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de suprimentos'
                            )
                            //termino:Supervisor de suprimentos

                        )
                    )
                    //termino: gerente de compras

                )

            )
            //termino: diretor financeiro

        )
    )
);

function exibe($cargos){
    $html = '<ul>';
    foreach($cargos as $cargo){
        $html.= '<li>';
        $html.= $cargo['nome_cargo'];
        if(isset($cargo['subordinados']) && count($cargo['subordinados'])> 0){
            $html.= exibe($cargo['subordinados']);


        }
        $html.= '</li>';

    }

    $html.='</ul>';
    return $html;

}
echo exibe($hieraquia);
?>