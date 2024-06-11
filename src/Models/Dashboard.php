<?php
namespace Ductong\XuongOop\Models;

use Ductong\XuongOop\Commons\Model;
use Ductong\XuongOop\Commons\Helper;

class Dashboard extends Model
{    
    protected string $tableName = 'categories';

    public function analysis(){
        $data = $this -> queryBuilder
        ->select('c.id','c.name', 'COUNT(p.id) as analys_post')
        ->from($this->tableName, 'c')
        ->leftJoin('c','products', 'p', 'p.category_id = c.id')
        ->groupBy('c.id', 'c.name')
        ->orderBy('analys_post', 'desc')
        ->fetchAllAssociative();

        //Helper::debug($data);

        //echo $data->getSQL();

        return $data;
    }

}