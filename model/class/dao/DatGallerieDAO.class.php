<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
interface DatGallerieDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DatGallerie 
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
 	 * @param datGallerie primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DatGallerie datGallerie
 	 */
	public function insert($datGallerie);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DatGallerie datGallerie
 	 */
	public function update($datGallerie);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTitle($value);

	public function queryByDescription($value);

	public function queryByPath($value);


	public function deleteByTitle($value);

	public function deleteByDescription($value);

	public function deleteByPath($value);


}
?>