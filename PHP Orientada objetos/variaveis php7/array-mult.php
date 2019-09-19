<?php  

$hier = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			array('nome_cargo' => 'Gerente de vendas')

		),

		//inicio
		array(
			'nome_cargo' => 'Diretor financeiro',
			'subordinados' => array(
				array(
						'nome_cargo' => 'Gerente de contas',
						'subordinados' => array(
							'nome_cargo' => 'supervisor de pagamentos'
						)
					)
				)
			 ),

		array(
			'nome_cargo' => 'gerente de compras',
			'subordinados' => array(
				array(
					'nome_cargo' => 'supervisor de suprementos'
				)
			)
		)

	)
);

function exibe($cargos){
	$html = '<ul>';
	foreach ($cargos as $cargo) {

		$html .= "<li>";
		$html .= $cargo['nome_cargo'];
		$html .= "</li>";
	
	}
	
	$html = "</ul>";
	
	return $html;
}

echo exibe($hier);

?>