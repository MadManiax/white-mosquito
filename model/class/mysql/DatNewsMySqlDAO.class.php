<?php
/**
 * Class that operate on table 'dat_news'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
class DatNewsMySqlDAO implements DatNewsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DatImmaginiMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM dat_news WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM dat_news';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM dat_news ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param datImmagini primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM dat_news WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DatImmaginiMySql datImmagini
 	 */
	public function insert($datNews){
		$sql = 'INSERT INTO dat_news (title, descr, data) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);	
		
		$sqlQuery->set($datNews->title);
		$sqlQuery->set($datNews->descr);
		$sqlQuery->set($datNews->data);		

		$id = $this->executeInsert($sqlQuery);	
		$datNews->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DatImmaginiMySql datImmagini
 	 */
	public function update($datNews){
		$sql = 'UPDATE dat_news SET title = ?, descr = ?, data = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($datNews->title);
		$sqlQuery->set($datNews->descr);
		$sqlQuery->set($datNews->data);	

		$sqlQuery->setNumber($datNews->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM dat_news';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}


	public function queryByTitle($value){
		$sql = 'SELECT * FROM dat_news WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescr($value){
		$sql = 'SELECT * FROM dat_news WHERE descr = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByData($value){
		$sql = 'SELECT * FROM dat_news WHERE data = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}
	

	public function deleteByTitle($value){
		$sql = 'DELETE FROM dat_news WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescr($value){
		$sql = 'DELETE FROM dat_news WHERE descr = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByData($value){
		$sql = 'DELETE FROM dat_news WHERE data = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}
	/**
	 * Read row
	 *
	 * @return DatImmaginiMySql 
	 */
	protected function readRow($row){
		$datNews = new DatNews();
		
		$datNews->id = $row['id'];		
		$datNews->title = $row['title'];
		$datNews->descr = $row['descr'];
		$datNews->data = $row['data'];		

		return $datNews;
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