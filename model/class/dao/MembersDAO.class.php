<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2011-12-20 19:17
 */
interface MembersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Members 
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
 	 * @param member primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Members member
 	 */
	public function insert($member);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Members member
 	 */
	public function update($member);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUsername($value);

	public function queryByPassword($value);


	public function deleteByUsername($value);

	public function deleteByPassword($value);


}
?>