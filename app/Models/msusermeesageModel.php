<?php

namespace App\Models;

use CodeIgniter\Model;

class msusermeesageModel extends Model
{
    protected $table = 'ms_user_message';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'phone', 'pesan'];

    // public function getuser($id)
    // {
    //     $db = \Config\Database::connect();
    //     $builder = $db->table('users');
    //     $builder->select('id, username, email, user_image');
    //     $array = ['id' => $id];
    //     $builder->where($array);
    //     $query = $builder->get();

    //     return $query->getRow();
    // }
}
