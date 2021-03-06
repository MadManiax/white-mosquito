<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
interface DatNewsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DatImmagini 
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
 	 * @param datImmagini primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DatImmagini datImmagini
 	 */
	public function insert($datNews);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DatImmagini datImmagini
 	 */
	public function update($datNews);	

	/**
	 * Delete all rows
	 */
	public function clean();	

	public function queryByTitle($value);

	public function queryByDescr($value);

	public function queryByData($value);

	public function deleteByTitle($value);

	public function deleteByDescr($value);

	public function deleteByData($value);

}
?>