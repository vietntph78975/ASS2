<?php
namespace Ductong\XuongOop\Models;

use Ductong\XuongOop\Commons\Model;

class Category extends Model
{    
    protected string $tableName = 'categories';

    public function findByEmail($id)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }

}