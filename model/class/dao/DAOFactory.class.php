<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return DatEventsDAO
	 */
	public static function getDatEventsDAO(){
		return new DatEventsMySqlExtDAO();
	}

	/**
	 * @return DatGallerieDAO
	 */
	public static function getDatGallerieDAO(){
		return new DatGallerieMySqlExtDAO();
	}

	/**
	 * @return DatImmaginiDAO
	 */
	public static function getDatImmaginiDAO(){
		return new DatImmaginiMySqlExtDAO();
	}

	/**
	 * @return FilesDAO
	 */
	public static function getFilesDAO(){
		return new FilesMySqlExtDAO();
	}

	/**
	 * @return MembersDAO
	 */
	public static function getMembersDAO(){
		return new MembersMySqlExtDAO();
	}

        /**
	 * @return DatNewsDAO
	 */
	public static function getDatNewsDAO(){
                return new DatNewsMySqlExtDAO();		
	}

        /**
	 * @return DatPressDAO
	 */
	public static function getDatPressDAO(){
            return new DatPressMySqlExtDAO();
	}
}
?>