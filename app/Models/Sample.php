<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sample extends Model
{
    protected $table = 'M_SHAIN';

    protected $guarded = array('ID');
  
    public $timestamps = false;
  
    public function getData()
    {
      $data = DB::table('M_SHAIN')
      ->leftJoin('MSHAINKINMU', 'M_SHAIN.USERCD', '=', 'MSHAINKINMU.USERID')
      ->get();
  
      return $data;
    }
}
