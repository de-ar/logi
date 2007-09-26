-- Dumping SQL for project logicampus
-- entity version: 0.0
-- DB type: mysql
-- generated on: 09.26.2007


DROP TABLE IF EXISTS `lob_repo_entry`;
CREATE TABLE `lob_repo_entry` (
		
	`lob_repo_entry_id` integer (11) NOT NULL auto_increment, 
	`lob_guid` varchar (255) NOT NULL, 
	`lob_title` varchar (255) NOT NULL, 
	`lob_type` varchar (100) NOT NULL, 
	`lob_sub_type` varchar (255) NOT NULL, 
	`lob_mime` varchar (100) NOT NULL, 
	`lob_description` text NOT NULL, 
	`lob_notes` text NOT NULL, 
	`lob_urltitle` varchar (255) NOT NULL, 
	`lob_version` integer (11) NOT NULL,
	PRIMARY KEY (lob_repo_entry_id) 
);
