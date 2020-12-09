<html>

    @include('layouts.header')

    <body>
        <main>
            <input type="hidden" name="ID" value="{{$data->ID}}">
            <label class="ppd2"><a href="{{ route('systemkbn_index') }}" class="dark">閉じる</a></label><label class="pgnm colo">システム区分マスタ</label>
            @if (count($errors) > 0)
                <div class="alert alert-danger" role="alert"><strong>エラー</strong> - 入力に問題があります。再入力して下さい。</div>
            @endif
            <div><label class="font-weight-bold">区分名</label></div>
            <label class="cp" id="KBNNM">キャンペーン</label>
            <div><label class="font-weight-bold">名称</label></div>
            <input class="textbox boxmg col-md-7" id="MEISYO" type="text" value="{{$data->SYSTEMKBNNM}}" placeholder="名称">
            <div>
                <button type="button" class="border delete trash-icon"><a href="#" class="fonts serviceadda">削除</a></button>
                <label id="buttons">
                    <button class="border btn btn-success" id="save">保存</button>
                    <button class="border add clear-icon"><a href="#" class="fonts serviceadda">クリア</a></button>
                </label>
            </div>
        </main>
    </body>

</html>