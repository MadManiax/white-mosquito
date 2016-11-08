<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
interface DatImmaginiDAO{

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
	public function insert($datImmagini);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DatImmagini datImmagini
 	 */
	public function update($datImmagini);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdGalleria($value);

	public function queryByTitle($value);

	public function queryByDescription($value);

	public function queryByFilesID($value);

	public function queryByAlt($value);


	public function deleteByIdGalleria($value);

	public function deleteByTitle($value);

	public function deleteByDescription($value);

	public function deleteByFilesID($value);

	public function deleteByAlt($value);


}
?>