<?php

namespace Delight\Auth\Utils;

class DbErrorCatcher 
{
    use \libraries\traits\CIResolverTrait;
    
    protected $debug;
    
    public function __construct() {
        $this->debug = $this->db->db_debug;
        $this->db->db_debug = false;
    }
    
    public function catchError(\Exception $ex)
    {
        $error = $this->db->error();
        
        if (!empty($error['code'] || !empty($error['message']))) {
            if (ENVIRONMENT !== 'production') {
                $ex->setMessage($ex->getMessage() 
                    . ' &rang;&rang; error code: ' . $error['code']
                    . ', error mesage: ' . $error['message']
                );
            }
            throw $ex;
        }
        $this->db->db_debug = $this->debug;
    }
}
