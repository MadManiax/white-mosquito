<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
interface DatEventsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DatEvents 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param datEvent primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DatEvents datEvent
 	 */
	public function insert($datEvent);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DatEvents datEvent
 	 */
	public function update($datEvent);	

	/**
	 * Delete all rows
	 */
	public function clean();
        public function queryByTitle($value);
	public function queryByLocale($value);

	public function queryByData($value);
	public function queryByDataGEQ($value);
        public function queryByDataLT($value);

	public function queryByIndirizzo($value);

	public function queryByCitta($value);

	public function queryByIngresso($value);

	public function queryByDescrizione($value);

	public function queryByIdDATImmagineLocandina($value);

	public function queryByLinkFBEvent($value);

        public function deleteByTitle($value);
	public function deleteByLocale($value);

	public function deleteByData($value);

	public function deleteByIndirizzo($value);

	public function deleteByCitta($value);

	public function deleteByIngresso($value);

	public function deleteByDescrizione($value);

	public function deleteByIdDATImmagineLocandina($value);

	public function deleteByLinkFBEvent($value);


}
?>