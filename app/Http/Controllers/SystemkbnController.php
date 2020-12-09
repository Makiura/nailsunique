<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\SystemKbn;
use Illuminate\Support\Facades\DB;
 
class SystemkbnController extends Controller{
        
        public function index() {
                $data = SystemKbn::paginate(3);;
                return view('systemkbn/systemkbn_index',compact('data'));
        }
	
	public function add() {
                return view('systemkbn/systemkbn_add');
        }

        public function insert(Request $request){

		$validate_rule = [
                        'SYSTEMKBNNM' => 'required|between:0,30',
		];
		
		$this->validate($request , $validate_rule);

		$test ='';
		
		$param = [
			'ID' => $request->ID,
			'USERCD' => $request->USERCD,
			'USERNM' => $request->USERNM,
			'USERKANA' => $request->USERKANA
		];


		DB::table('M_SHAIN')->insert($param);

		return redirect('syskbn/index');
	}

        public function edit($id){

		$data = DB::table('MSYSKBN')->where('ID',$id)->first();
		return view('systemkbn/systemkbn_edit',compact('data'));

	}

}