<?php

/* =======================================================================
 * Improved File Manager
 * ---------------------
 * License: This project is provided under the terms of the MIT LICENSE
 * http://github.com/misterunknown/ifm/blob/master/LICENSE
 * =======================================================================
 *
 * config
*/

class IFMConfig {

	// 0 = no/not allowed;; 1 = yes/allowed;; default: no/forbidden;

	// action controls
	const upload = 1;			// allow uploads
	const remoteupload = 1;		// allow remote uploads using cURL
	const delete = 1;			// allow deletions
	const rename = 1;			// allow renamings
	const edit = 1;				// allow editing
	const chmod = 1;			// allow to change rights
	const extract = 1;			// allow extracting zip archives
	const download = 1; 		// allow to download files and skripts (even php scripts!)
	const selfdownload = 1;		// allow to download this skript itself
	const createdir = 1;		// allow to create directorys
	const createfile = 1;		// allow to create files
	const zipnload = 1;			// allow to zip and download directorys

	// view controls
	const multiselect = 1;		// implement multiselect of files and directories
	const showlastmodified = 0;	// show the last modified date?
	const showfilesize = 1;		// show filesize?
	const showowner = 1;		// show file owner?
	const showgroup = 1;		// show file group?
	const showpermissions = 2; 		// show permissions 0 -> not; 1 -> octal, 2 -> human readable
	const showhtdocs = 1;		// show .htaccess and .htpasswd
	const showhiddenfiles = 1;	// show files beginning with a dot (e.g. ".bashrc")
	const showpath = 0;			// show absolute path

	/*
	   authentication

	   This provides a super simple authentication functionality. At the moment only one user can be
	   configured. The credential information can be either set inline or read from a file. The
	   password has to be a hash generated by PHPs password_hash function. The default credentials are
       admin:admin.

	   If you specify a file it should only contain one line, with the credentials in the following
       format:
		<username>:<passwordhash>
       
       examples:
	   	const auth_source = 'inline;admin:$2y$10$0Bnm5L4wKFHRxJgNq.oZv.v7yXhkJZQvinJYR2p6X1zPvzyDRUVRC';
	   	const auth_source = 'file;/path/to/file';
	*/
	const auth = 0;
	const auth_source = 'inline;admin:$2y$10$0Bnm5L4wKFHRxJgNq.oZv.v7yXhkJZQvinJYR2p6X1zPvzyDRUVRC';

	/*
	   root_dir - set a custom root directory instead of the script location

	   This option is highly experimental and should only be set if you definitely know what you do.
	   Settings this option may cause black holes or other unwanted things. Use with special care.

	   default setting:
	   	const root_dir = "";
	*/
	const root_dir = "";
	const defaulttimezone = "Europe/Berlin"; // set default timezone

	/**
	 * Temp directory for zip files
	 *
	 * Default is the upload_tmp_dir which is set in the php.ini, but you may also set an different path
	 */
	const tmp_dir = "";

	// development tools
	const ajaxrequest = 1;		// formular to perform an ajax request

	static function getConstants() {
		$oClass = new ReflectionClass(__CLASS__);
		return $oClass->getConstants();
	}
}
