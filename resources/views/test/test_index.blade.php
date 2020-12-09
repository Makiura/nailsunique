<html>
  <head>
	<script src="{{ asset('js/test.js') }}" defer></script>
  	<script src="{{ asset('js/app.js') }}" defer></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>HelloWorld</title>
  </head>

  <body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
		<a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link" href="">Tasks</a></li>
		</ul>
		</div>
	</nav>

	<div class="container">
		@if(session('message'))
		<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		{{@session('message')}}
		</div>
		@endif

		@yield('header')
		@yield('content')
	</div>

	@yield('scripts')
　</body>


  <body>
    <h1>Laravel Test タイトル</h1>
  </body>

  <body>
	<div>
	<br>
		<table>
				<tr>
					<td  colspan="2">
						<p>MACアドレス↓</p>
					</td>
				</tr>
				<tr>
					<td  colspan="2">
						<p>({{$macaddr}})</p>
					</td>
				</tr>
				<br>
		</table>
	</div>

	<div>
		<table>
				<tr>
					<td  colspan="2">
						<p>変数↓</p>
					</td>
				</tr>
				<tr>
					<td  colspan="2">
						<p>送られてきた変数は({{$test_1}})</p>
					</td>
				</tr>
				<br>
		</table>
	</div>

	<div>
		<table>
				<tr>
					<td  colspan="2">
						<p>配列↓</p>
					</td>
				</tr>
				<tr>
					<td  colspan="2">
						<p>
							送られてきた配列の要素1は({{$test_array[0]}})
						</p>
						<p>
							送られてきた配列の要素2は({{$test_array[1]}})
						</p>
						<p>
							送られてきた配列の要素3は({{$test_array[2]}})
						</p>
					</td>
				</tr>
				<br>
		</table>
	</div>

 </body>

 <br>

  <body>
	<div>
		<div>
			<p>郵便番号から住所検索↓</p>
		</div>
		<div>
      		<label>郵便番号</label>
      		<span>
        	<input id="zip" name="zip" type="text" placeholder="1600002"/>
      		</span>
      		<span>
        		<input class="studentEnrollment_button" type="button" value="住所を自動で入力する" onClick="setState()" />
      		</span>
    	</div>
    	<div>
      		<label>都道府県</label>
      		<span>
        <input id="state" name="state" type="text" placeholder="東京都" />
      </span>
    </div>
    <div>
      <label>市区町村</label>
      <span>
        <input id="city" name="city" type="text" placeholder="新宿区" />
      </span>
    </div>
    <div>
      <label>番地</label>
      <span>
        <input id="address1" name="address1" type="text" placeholder="西新宿666" />
      </span>
    </div>
    <div>
      <label>建物名・階・部屋番号</label>
      <span>
        <input id="address2" name="address2" type="text" placeholder="ビルヂング666" />
      </span>
    </div>
  </div>
</body>

<br>

<body>
	<div>
		<div>
			<p>pagenate有↓</p>
		</div>
		<div>
			<ul>
				@foreach($data2 as $d)
				<li>{{$d->USERNM}}</li>
				@endforeach
			</ul>
			{{ $data2->links() }}
		</div>
  	</div>
</body>

<br>

<body>
	<div>
		<div>
			<p>pagenate無↓</p>
		</div>
		<div>
			<ul>
				@foreach($data as $d)
				<li>{{$d->USERNM}}</li>
				@endforeach
			</ul>
		</div>
  	</div>
</body>

</html>