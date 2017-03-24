<?Php

/**
 * Curso de PHP OO Avançado
 * Classe Product
 * Date: 24/03/2017
 * Version 1.0
 * Developer: Will Angélico
 */

namespace Source;

class Product{

	private $db;

	public function __construct(Iconn $db){

		$this->db = $db->connect();
	}

	public function listP(){

		$query = "Select * from products";

		$stmt = $this->db->prepare($query);

		$stmt->execute();


		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		
	}

}
