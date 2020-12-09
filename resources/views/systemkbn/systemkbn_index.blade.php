<html>
    
    @include('layouts.header')

    <body> 
        <main>
            <label for="close" class="ppd2"><a href="#" class="dark">閉じる</a></label><label for="displayname" class="pgnm colo">システム区分マスタ</label>
            <div><label class="font-weight-bold" for="name">区分名</label></div>
            <div class="form-group col-md-4">
                <select class="form-control form-control-lg" id="CAMPAIGNKBN">
                    <option>キャンペーン</option>
                    <option>役職</option>
                    <option>来店理由</option>
                    <option>初来店理由</option>
                </select>
            </div>
            <div>
                <label for="buttons">
                    <button class="border add search-icon"><a href="#" class="fonts serviceadda" id="search">検索</a></button>
                </label>
            </div>
            
            <table class="table table-bordered ">
                <thead class="thead-light">
                    <tr><th class="">区分</th><th></th></tr>
                </thead>
                <tbody class="tdp">
                    @foreach($data as $d)
                        <tr class="table-light">
                            <td>{{$d->SYSTEMKBNNM}}</td>
                            <td class="tw3"><label class="lab2" for="link"><a href="{{ url('systemkbn/edit', $d->ID) }}" class="">詳細</a></label></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
             
            <div>
                <label for="buttons">
                    <button class="border add stuika-icon">
                        <a href="{{ route('systemkbn_add') }}" class="fonts serviceadda" id="add">追加</a>
                    </button>
                </label>
            </div>
        </main>    
    </body>
</html>