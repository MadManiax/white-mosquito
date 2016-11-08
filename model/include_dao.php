<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/DatEventsDAO.class.php');
	require_once('class/dto/DatEvent.class.php');
	require_once('class/mysql/DatEventsMySqlDAO.class.php');
	require_once('class/mysql/ext/DatEventsMySqlExtDAO.class.php');
	require_once('class/dao/DatGallerieDAO.class.php');
	require_once('class/dto/DatGallerie.class.php');
	require_once('class/mysql/DatGallerieMySqlDAO.class.php');
	require_once('class/mysql/ext/DatGallerieMySqlExtDAO.class.php');
	require_once('class/dao/DatImmaginiDAO.class.php');
	require_once('class/dto/DatImmagini.class.php');
	require_once('class/mysql/DatImmaginiMySqlDAO.class.php');
	require_once('class/mysql/ext/DatImmaginiMySqlExtDAO.class.php');
	require_once('class/dao/FilesDAO.class.php');
	require_once('class/dto/File.class.php');
	require_once('class/mysql/FilesMySqlDAO.class.php');
	require_once('class/mysql/ext/FilesMySqlExtDAO.class.php');
	require_once('class/dao/MembersDAO.class.php');
	require_once('class/dto/Member.class.php');
	require_once('class/mysql/MembersMySqlDAO.class.php');
	require_once('class/mysql/ext/MembersMySqlExtDAO.class.php');
        
        require_once('class/dao/DatNewsDAO.class.php');
	require_once('class/dto/DatNews.class.php');
	require_once('class/mysql/DatNewsMySqlDAO.class.php');
	require_once('class/mysql/ext/DatNewsMySqlExtDAO.class.php');
        
        require_once('class/dao/DatPressDAO.class.php');
	require_once('class/dto/DatPress.class.php');
	require_once('class/mysql/DatPressMySqlDAO.class.php');
	require_once('class/mysql/ext/DatPressMySqlExtDAO.class.php');

?>