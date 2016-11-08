<?php
/**
 * Class that operate on table 'dat_immagini'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
class DatImmaginiMySqlDAO implements DatImmaginiDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DatImmaginiMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM dat_immagini WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM dat_immagini';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM dat_immagini ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param datImmagini primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM dat_immagini WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DatImmaginiMySql datImmagini
 	 */
	public function insert($datImmagini){
		$sql = 'INSERT INTO dat_immagini (idGalleria, title, description, FilesID, alt) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($datImmagini->idGalleria);
		$sqlQuery->set($datImmagini->title);
		$sqlQuery->set($datImmagini->description);
		$sqlQuery->setNumber($datImmagini->filesID);
		$sqlQuery->set($datImmagini->alt);

		$id = $this->executeInsert($sqlQuery);	
		$datImmagini->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DatImmaginiMySql datImmagini
 	 */
	public function update($datImmagini){
		$sql = 'UPDATE dat_immagini SET idGalleria = ?, title = ?, description = ?, FilesID = ?, alt = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($datImmagini->idGalleria);
		$sqlQuery->set($datImmagini->title);
		$sqlQuery->set($datImmagini->description);
		$sqlQuery->setNumber($datImmagini->filesID);
		$sqlQuery->set($datImmagini->alt);

		$sqlQuery->setNumber($datImmagini->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM dat_immagini';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdGalleria($value){
		$sql = 'SELECT * FROM dat_immagini WHERE idGalleria = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTitle($value){
		$sql = 'SELECT * FROM dat_immagini WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM dat_immagini WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFilesID($value){
		$sql = 'SELECT * FROM dat_immagini WHERE FilesID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAlt($value){
		$sql = 'SELECT * FROM dat_immagini WHERE alt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdGalleria($value){
		$sql = 'DELETE FROM dat_immagini WHERE idGalleria = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTitle($value){
		$sql = 'DELETE FROM dat_immagini WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM dat_immagini WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFilesID($value){
		$sql = 'DELETE FROM dat_immagini WHERE FilesID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAlt($value){
		$sql = 'DELETE FROM dat_immagini WHERE alt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DatImmaginiMySql 
	 */
	protected function readRow($row){
		$datImmagini = new DatImmagini();
		
		$datImmagini->id = $row['id'];
		$datImmagini->idGalleria = $row['idGalleria'];
		$datImmagini->title = $row['title'];
		$datImmagini->description = $row['description'];
		$datImmagini->filesID = $row['FilesID'];
		$datImmagini->alt = $row['alt'];

		return $datImmagini;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return DatImmaginiMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>