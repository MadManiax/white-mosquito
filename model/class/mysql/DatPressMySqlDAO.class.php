<?php
/**
 * Class that operate on table 'dat_press'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
class DatPressMySqlDAO implements DatPressDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DatImmaginiMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM dat_press WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM dat_press';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM dat_press ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param datImmagini primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM dat_press WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DatImmaginiMySql datImmagini
 	 */
	public function insert($datPress){
		$sql = 'INSERT INTO dat_press (title, subtitle, data, link, text, stralcio) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);	
		
		$sqlQuery->set($datPress->title);
		$sqlQuery->set($datPress->subtitle);
		$sqlQuery->set($datPress->data);		
                $sqlQuery->set($datPress->link);	
                $sqlQuery->set($datPress->text);	
                $sqlQuery->set($datPress->stralcio);

		$id = $this->executeInsert($sqlQuery);	
		$datPress->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DatImmaginiMySql datImmagini
 	 */
	public function update($datPress){
		$sql = 'UPDATE dat_press SET title = ?, subtitle = ?, data = ?, link = ?, text = ?, stralcio = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($datPress->title);
		$sqlQuery->set($datPress->subtitle);
		$sqlQuery->set($datPress->data);		
                $sqlQuery->set($datPress->link);	
                $sqlQuery->set($datPress->text);
                $sqlQuery->set($datPress->stralcio);

		$sqlQuery->setNumber($datPress->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM dat_press';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}


	public function queryByTitle($value){
		$sql = 'SELECT * FROM dat_press WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubTitle($value){
		$sql = 'SELECT * FROM dat_press WHERE subtitle = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByData($value){
		$sql = 'SELECT * FROM dat_press WHERE data = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}
	

	public function deleteByTitle($value){
		$sql = 'DELETE FROM dat_press WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubTitle($value){
		$sql = 'DELETE FROM dat_press WHERE subtitle = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByData($value){
		$sql = 'DELETE FROM dat_press WHERE data = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}
	/**
	 * Read row
	 *
	 * @return DatPressMySql 
	 */
	protected function readRow($row){
		$datPress = new DatPress();
		
		$datPress->id = $row['id'];		
		$datPress->title = $row['title'];
		$datPress->subtitle = $row['subtitle'];
		$datPress->data = $row['data'];		
                $datPress->link = $row['link'];	
                $datPress->text = $row['text'];	
                $datPress->stralcio = $row['stralcio'];

		return $datPress;
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