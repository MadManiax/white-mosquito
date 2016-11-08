<?php
/**
 * Class that operate on table 'files'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
class FilesMySqlDAO implements FilesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FilesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM files WHERE FilesID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM files';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM files ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param file primary key
 	 */
	public function delete($FilesID){
		$sql = 'DELETE FROM files WHERE FilesID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($FilesID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FilesMySql file
 	 */
	public function insert($file){
		$sql = 'INSERT INTO files (Thumbnails, FilesName) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($file->thumbnails);
		$sqlQuery->set($file->filesName);

		$id = $this->executeInsert($sqlQuery);	
		$file->filesID = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FilesMySql file
 	 */
	public function update($file){
		$sql = 'UPDATE files SET Thumbnails = ?, FilesName = ? WHERE FilesID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($file->thumbnails);
		$sqlQuery->set($file->filesName);

		$sqlQuery->setNumber($file->filesID);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM files';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByThumbnails($value){
		$sql = 'SELECT * FROM files WHERE Thumbnails = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFilesName($value){
		$sql = 'SELECT * FROM files WHERE FilesName = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByThumbnails($value){
		$sql = 'DELETE FROM files WHERE Thumbnails = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFilesName($value){
		$sql = 'DELETE FROM files WHERE FilesName = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return FilesMySql 
	 */
	protected function readRow($row){
		$file = new File();
		
		$file->filesID = $row['FilesID'];
		$file->thumbnails = $row['Thumbnails'];
		$file->filesName = $row['FilesName'];

		return $file;
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
	 * @return FilesMySql 
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