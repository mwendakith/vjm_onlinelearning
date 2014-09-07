<?php

class Content_Model extends MY_Model {

    const DB_TABLE = 'content';
    const DB_TABLE_PK = 'content_id';


    /**
     * Content unique identifier
     * @var int
     */
    public $content_id;
    
    /**
     * The title of the content
     * @var string
     */
    public $title;
    
    /**
     * A short description about the content
     * @var string
     */
    public $description;
    
    /**
     * The path to the file in the site directory
     * @var string
     */
    public $file_path;
    
    /**
     * The file extention (e.g. word, pdf, excel)
     * @var string
     */
    public $file_type;
    
    /**
     * The group to which this content belongs to
     * @var int
     */
    public $group_id;
    
    /**
     * Identification of the user who uploaded the content.
     * @var int
     */
    public $uploader_user_id;
    
    
   
    
    function __construct() {
        parent::__construct();
        
    }
    
}

