<?php
/**
 * Class that operate on table 'dat_gallerie'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
class DatGallerieMySqlDAO implements DatGallerieDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DatGallerieMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM dat_gallerie WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM dat_gallerie';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM dat_gallerie ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param datGallerie primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM dat_gallerie WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DatGallerieMySql datGallerie
 	 */
	public function insert($datGallerie){
		$sql = 'INSERT INTO dat_gallerie (title, description, Path) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($datGallerie->title);
		$sqlQuery->set($datGallerie->description);
		$sqlQuery->set($datGallerie->path);

		$id = $this->executeInsert($sqlQuery);	
		$datGallerie->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DatGallerieMySql datGallerie
 	 */
	public function update($datGallerie){
		$sql = 'UPDATE dat_gallerie SET title = ?, description = ?, Path = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($datGallerie->title);
		$sqlQuery->set($datGallerie->description);
		$sqlQuery->set($datGallerie->path);

		$sqlQuery->setNumber($datGallerie->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM dat_gallerie';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTitle($value){
		$sql = 'SELECT * FROM dat_gallerie WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM dat_gallerie WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPath($value){
		$sql = 'SELECT * FROM dat_gallerie WHERE Path = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTitle($value){
		$sql = 'DELETE FROM dat_gallerie WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM dat_gallerie WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPath($value){
		$sql = 'DELETE FROM dat_gallerie WHERE Path = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DatGallerieMySql 
	 */
	protected function readRow($row){
		$datGallerie = new DatGallerie();
		
		$datGallerie->id = $row['id'];
		$datGallerie->title = $row['title'];
		$datGallerie->description = $row['description'];
		$datGallerie->path = $row['Path'];

		return $datGallerie;
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
	 * @return DatGallerieMySql 
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