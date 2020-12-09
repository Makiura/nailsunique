<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Systemkbn extends Model
{
    protected $table = 'MSYSKBN';

    protected $guarded = array('ID');
  
    public $timestamps = false;
  
    public function getData()
    {
      $data = DB::table('MSYSKBN')->get();
  
      return $data;
    }
}
