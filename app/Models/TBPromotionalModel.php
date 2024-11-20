<?php

namespace App\Models;

use CodeIgniter\Model;

class TBPromotionalModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tb_promotional';
    
    protected $allowedfields = [
        'title',
        'content',    
    ];

    protected $returnType = 'array';
    protected $useTimestamps = true;
}

?>