use Illuminate\Database\Eloquent\Model;

<?php

namespace App\Models;


class TBPromotionalModel extends Model
{
    protected $table = 'tb_promotional';

    protected $primaryKey = 'id';

    protected $allowedfields = [
        'title',
        'content',    
    ];

    protected $returnType = 'array';
    protected $useTimestamps = true;
}

?>