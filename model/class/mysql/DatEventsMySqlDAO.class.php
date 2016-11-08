<?php
/**
 * Class that operate on table 'dat_events'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
class DatEventsMySqlDAO implements DatEventsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DatEventsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM dat_events WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM dat_events';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM dat_events ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param datEvent primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM dat_events WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DatEventsMySql datEvent
 	 */
	public function insert($datEvent){
		$sql = 'INSERT INTO dat_events (Title,Locale, Data, Indirizzo, Citta, Ingresso, Descrizione, idDAT_ImmagineLocandina, LinkFBEvent) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($datEvent->title);
		$sqlQuery->set($datEvent->locale);
		$sqlQuery->set($datEvent->data);
		$sqlQuery->set($datEvent->indirizzo);
		$sqlQuery->set($datEvent->citta);
		$sqlQuery->set($datEvent->ingresso);
		$sqlQuery->set($datEvent->descrizione);
		$sqlQuery->setNumber($datEvent->idDATImmagineLocandina);
		$sqlQuery->set($datEvent->linkFBEvent);

		$id = $this->executeInsert($sqlQuery);	
		$datEvent->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DatEventsMySql datEvent
 	 */
	public function update($datEvent){
		$sql = 'UPDATE dat_events SET Title = ?, Locale = ?, Data = ?, Indirizzo = ?, Citta = ?, Ingresso = ?, Descrizione = ?, idDAT_ImmagineLocandina = ?, LinkFBEvent = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
                $sqlQuery->set($datEvent->title);
		$sqlQuery->set($datEvent->locale);
		$sqlQuery->set($datEvent->data);
		$sqlQuery->set($datEvent->indirizzo);
		$sqlQuery->set($datEvent->citta);
		$sqlQuery->set($datEvent->ingresso);
		$sqlQuery->set($datEvent->descrizione);
		$sqlQuery->setNumber($datEvent->idDATImmagineLocandina);
		$sqlQuery->set($datEvent->linkFBEvent);

		$sqlQuery->setNumber($datEvent->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM dat_events';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}
        public function queryByTitle($value){
		$sql = 'SELECT * FROM dat_events WHERE Title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}
	public function queryByLocale($value){
		$sql = 'SELECT * FROM dat_events WHERE Locale = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByData($value){
		$sql = 'SELECT * FROM dat_events WHERE Data = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}
	
        public function queryByDataGEQ($value){
		$sql = 'SELECT * FROM dat_events WHERE Data >= ? ORDER BY data';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}
        
        public function queryByDataLT($value){
		$sql = 'SELECT * FROM dat_events WHERE Data < ? ORDER BY data DESC';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}
	public function queryByIndirizzo($value){
		$sql = 'SELECT * FROM dat_events WHERE Indirizzo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCitta($value){
		$sql = 'SELECT * FROM dat_events WHERE Citta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIngresso($value){
		$sql = 'SELECT * FROM dat_events WHERE Ingresso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescrizione($value){
		$sql = 'SELECT * FROM dat_events WHERE Descrizione = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdDATImmagineLocandina($value){
		$sql = 'SELECT * FROM dat_events WHERE idDAT_ImmagineLocandina = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLinkFBEvent($value){
		$sql = 'SELECT * FROM dat_events WHERE LinkFBEvent = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

        public function deleteByTitle($value){
		$sql = 'DELETE FROM dat_events WHERE Title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}
	public function deleteByLocale($value){
		$sql = 'DELETE FROM dat_events WHERE Locale = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByData($value){
		$sql = 'DELETE FROM dat_events WHERE Data = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIndirizzo($value){
		$sql = 'DELETE FROM dat_events WHERE Indirizzo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCitta($value){
		$sql = 'DELETE FROM dat_events WHERE Citta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIngresso($value){
		$sql = 'DELETE FROM dat_events WHERE Ingresso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescrizione($value){
		$sql = 'DELETE FROM dat_events WHERE Descrizione = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdDATImmagineLocandina($value){
		$sql = 'DELETE FROM dat_events WHERE idDAT_ImmagineLocandina = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLinkFBEvent($value){
		$sql = 'DELETE FROM dat_events WHERE LinkFBEvent = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DatEventsMySql 
	 */
	protected function readRow($row){
		$datEvent = new DatEvent();
		
		$datEvent->id = $row['id'];
                $datEvent->title = $row['Title'];
		$datEvent->locale = $row['Locale'];
		$datEvent->data = $row['Data'];
		$datEvent->indirizzo = $row['Indirizzo'];
		$datEvent->citta = $row['Citta'];
		$datEvent->ingresso = $row['Ingresso'];
		$datEvent->descrizione = $row['Descrizione'];
		$datEvent->idDATImmagineLocandina = $row['idDAT_ImmagineLocandina'];
		$datEvent->linkFBEvent = $row['LinkFBEvent'];

		return $datEvent;
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
	 * @return DatEventsMySql 
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