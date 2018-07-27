<?
class MySQL
{
	var $host="mysql";
	var $user="root";
	var $password="dbinstafive";
	var $database="dbinstafive";
	

	var $query;
	var $link;
	var $result;

	function MySQL()
	{
	//Apenas instancia o Objeto
	}

	//Esta função faz a conexão com o Banco de Dados
	function connect()
	{
		$this->link=mysqli_connect($this->host,$this->user,$this->password,$this->database);
		if(!$this->link)
		{
			echo "Falha na conexão com o Banco de Dados!<br />";
			echo "Erro: " . mysqli_error($this->link);
			die();
		}
			elseif(!mysqli_select_db($this->link, $this->database))
		{
			echo "O Banco de Dados solicitado não pode ser aberto!<br />";
			echo "Erro: " . mysqli_error($this->link);
			die();
		}
	}

	//Esta função executa uma Query
	function executeQuery($query)
	{
		$this->connect();
		$this->query=$query;
		if($this->result=mysqli_query($this->link, $this->query))
		{
			$this->disconnect(); 
			return $this->result;
		}
		else
		{
			echo "Ocorreu um erro na execução da SQL";
			echo "Erro :" . mysqli_error($this->link);
			echo "SQL: " . $query;
			die();
			disconnect();
		}
	}

	function contalinha($query){
		$this->connect();
		$this->query=$query;
		echo $query;
		$this->result = mysqli_fetch_array($this->query);


		echo $this->result[0];
		die();
		$this->disconnect(); 
		//return $this->result[0];
	}
	
	//Esta função desconecta do Banco
	function disconnect()
	{
		return mysqli_close($this->link);
	}

}
?>
