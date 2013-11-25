<?php

class LogicHooksLead{

	var $lead;
	
	function recuperaLead($bean, $event, $arguments){

		if($_REQUEST['action'] == 'ConvertLead'){

			$this->lead = $bean->retrieve($bean->id);

			/* * * * * * * * * * Contato * * * * * * * * * * */
			$bean->alt_address_postalcode 	= $this->lead->endereco_cep_c;
			$bean->alt_address_street 		= $this->lead->endereco_rua_c;
			$bean->endereco_complemento_c 	= $this->lead->endereco_complemento_c;
			$bean->primary_address_city 	= $this->lead->endereco_cidade_c;
			$bean->numero_c 				= $this->lead->endereco_numero_c;
			$bean->endereco_bairro_c 		= $this->lead->endereco_bairro_c;
			$bean->alt_address_state 		= $this->lead->endereco_estado_c;
			$bean->endereco_referencia_c 	= $this->lead->endereco_referencia_c;

			$bean->tipo_de_telefone_c 		= $this->lead->tipo_de_telefone_c;
			$bean->celular_1_c 				= $this->lead->celular_1_c;
			$bean->Contactstelefone_fixo_c 	= $this->lead->telefone_fixo_c;
			$bean->outro_telefone_fixo_c 	= $this->lead->outro_telefone_fixo_c;
			$bean->celular_2_c 				= $this->lead->outro_telefone_celular_c;

			/* * * * * * * * * * Cliente * * * * * * * * * * */
			$bean->account_name				= $this->lead->nome_fantasia_c;
			$bean->tipo_de_conta_c			= $this->lead->tipo_lead_c;
			$bean->Contactscelular_1_c		= $this->lead->celular_1_c;
			$bean->Accountscelular_1_c		= $this->lead->celular_1_c;
			$bean->Accounts0emailAddress0	= $this->lead->Leads0emailAddress0;

			if($this->lead->Leads1emailAddress1 !="" ){
				$bean->Accounts1emailAddress1	= $this->lead->Leads1emailAddress1;
			}

			if($this->lead->Leads2emailAddress2 !="" ){
				$bean->Accounts2emailAddress2	= $this->lead->Leads2emailAddress2;
			}
			
		}

	}

}

?>