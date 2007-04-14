<?
$installTableSchemas = array();
$table = <<<campusdelimeter
DROP TABLE IF EXISTS `class_syllabus`
campusdelimeter;
$installTableSchemas[] = $table;
$table = <<<campusdelimeter
CREATE TABLE `class_syllabus` (
	`id_class_syllabus` integer (11) NOT NULL auto_increment, 
	`id_classes` integer (11) NOT NULL, 
	`section_title` varchar (255) NOT NULL, 
	`section_content` text NOT NULL,
	PRIMARY KEY (id_class_syllabus) 
);
campusdelimeter;
$installTableSchemas[] = $table;

?>