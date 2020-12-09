<html>
<form action="send" method="post">
    @csrf
    <table>
        新規作成ページ
        @if (count($errors) > 0)
        <p>入力に問題があります。再入力して下さい。</p>
        @endif
        <tr>
            <th>ID:</th>
            <td><input type="text" name="ID"></td>
            @error('ID')
                <td>{{$message}}</td>
            @enderror
        </tr>
        <tr>
            <th>USERCD:</th>
            <td><input type="text" name="USERCD"></td>
            @error('USERCD')
                <td>{{$message}}</td>
            @enderror
        </tr>
        <tr>
            <th>USERNM:</th>
            <td><input type="text" name="USERNM"></td>
            @error('USERNM')
                <td>{{$message}}</td>
            @enderror
        </tr>
        <tr>
            <th>USERKANA:</th>
            <td><input type="text" name="USERKANA"></td>
            @error('USERKANA')
                <td>{{$message}}</td>
            @enderror
        </tr>
        <tr>
            <th>NYUSHADAY:</th>
            <td><input type="text" name="NYUSHADAY"></td>
        </tr>
        <tr>
            <th>JNEC:</th>
            <td><input type="text" name="JNEC"></td>
        </tr>
        <tr>
            <th>GELTEST:</th>
            <td><input type="text" name="GELTEST"></td>
        </tr>
        <tr>
            <th>TECHTEST:</th>
            <td><input type="text" name="TECHTEST"></td>
        </tr>
        <tr>
            <th>WAITTEST:</th>
            <td><input type="text" name="WAITTEST"></td>
        </tr>
        <tr>
            <th>POSITION:</th>
            <td><input type="text" name="POSITION"></td>
        </tr>
        <tr>
            <th>PASSWORD:</th>
            <td><input type="text" name="PASSWORD"></td>
        </tr>
        <tr>
            <th>CHARGESHOPID1:</th>
            <td><input type="text" name="CHARGESHOPID1"></td>
        </tr>
        <tr>
            <th>CHARGESHOPID2:</th>
            <td><input type="text" name="CHARGESHOPID2"></td>
        </tr>
        <tr>
            <th>CHARGESHOPID3:</th>
            <td><input type="text" name="CHARGESHOPID3"></td>
        </tr>
        <tr>
            <th>CLAIMS:</th>
            <td><input type="text" name="CLAIMS"></td>
        </tr>
        <tr>
            <th>NATIONALITY:</th>
            <td><input type="text" name="NATIONALITY"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
</form>
</html>