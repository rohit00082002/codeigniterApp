<?php
class Profilemodel extends CI_Model {

     var $name   = '';

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     function get_user_name()
     {
		// Get name from Database.
         return 'Rohit Awasthi';
     }
}