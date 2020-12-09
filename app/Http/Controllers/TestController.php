<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Sample;
use Illuminate\Support\Facades\DB;
 
class TestController extends Controller
{
    public function index(Request $request, Response $response) {

        $macaddr=false;
		$arp=`arp -n`;
		$lines=explode("\n", $arp);

		foreach($lines as $line){
			$cols=preg_split('/\s+/', trim($line));

			if ($cols[0]==$_SERVER['REMOTE_ADDR']){
				$macaddr=$cols[2];
			}
		}
        
        $test_1 = "変数テスト";

        $test_array = ["変数テスト1","変数テスト2", "変数テスト3"];

        $md = new Sample();
    	// データ取得
		$data = $md->getData();

		$data2 = Sample::paginate(5);;

		$data3 = DB::table('M_SHAIN')->get();	  
	  
	  	$data4 = DB::table('M_SHAIN')
      	->leftJoin('MSHAINKINMU', 'M_SHAIN.USERCD', '=', 'MSHAINKINMU.USERID')
		  ->get();
		  
		$data5 = DB::table('M_SHAIN')
      	->leftJoin('MSHAINKINMU', 'M_SHAIN.USERCD', '=', 'MSHAINKINMU.USERID')
      	->simplePaginate(5);

        return view('test/test_index',compact('test_1','test_array','macaddr','data','data2'));

	}
	
	public function add() {

        return view('test/test_add');

	}
	
	public function send(Request $request){

		$validate_rule = [
            'ID' => 'required|between:0,36',
            'USERCD' => 'required|between:0,10',
			'USERNM' => 'required|between:0,20',
			'USERKANA' => 'required|between:0,30',
		];
		
		$this->validate($request , $validate_rule);

		$test ='';

//		$id = $request->input('ID');
//		$id2 = $request->ID;
		
		$param = [
			'ID' => $request->ID,
			'USERCD' => $request->USERCD,
			'USERNM' => $request->USERNM,
			'USERKANA' => $request->USERKANA
		];


		DB::table('M_SHAIN')->insert($param);

		return redirect('test/index');
	}


	public function edit(Request $request){

		$test = 1;
		$data = DB::table('M_SHAIN')->where('ID',$test)->first();

	//	$data = DB::table('M_SHAIN')->where('ID',$request->id)->first());
		return view('test/test_edit',compact('data'));

	}

	public function update(Request $request){

		$validate_rule = [
            'ID' => 'required|between:0,36',
            'USERCD' => 'required|between:0,10',
			'USERNM' => 'required|between:0,20',
			'USERKANA' => 'required|between:0,30',
		];
		
		$this->validate($request , $validate_rule);

		$test ='';

//		$id = $request->input('ID');
//		$id2 = $request->ID;
		
		$param = [
			'USERCD' => $request->USERCD,
			'USERNM' => $request->USERNM,
			'USERKANA' => $request->USERKANA
		];


		DB::table('M_SHAIN')->where('ID',$request->ID)->update($param);

		return redirect('test/index');
	}


}