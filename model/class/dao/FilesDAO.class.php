<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
interface FilesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Files 
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
 	 * @param file primary key
 	 */
	public function delete($FilesID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Files file
 	 */
	public function insert($file);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Files file
 	 */
	public function update($file);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByThumbnails($value);

	public function queryByFilesName($value);


	public function deleteByThumbnails($value);

	public function deleteByFilesName($value);


}
?>