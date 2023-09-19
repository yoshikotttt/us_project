<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>検索結果</h3>
    {{-- <form action="/process" method="POST">
    @csrf
    <label>
        <input type="checkbox" name="option1" value="1"> 超音波専門医（関西）
腹部/上腹部
    </label><br>
    <label>
        <input type="checkbox" name="option2" value="2"> 超音波検査士（九州）
腹部/上腹部/下腹部
    </label><br>
    <label>
        <input type="checkbox" name="option3" value="3"> 超音波検査士（四国）
腹部/上腹部/下腹部
    </label><br>
    <label>
        <input type="checkbox" name="option4" value="4"> 超音波検査士（九州）
腹部/上腹部/下腹部
    </label><br>
    <button type="submit">依頼</button>
</form> --}}
  
    <label>
        <input type="checkbox" name="option1" value="1"> 超音波専門医（関西）
腹部/上腹部
    </label><br>
    <label>
        <input type="checkbox" name="option2" value="2"> 超音波検査士（九州）
腹部/上腹部/下腹部
    </label><br>
    <label>
        <input type="checkbox" name="option3" value="3"> 超音波検査士（四国）
腹部/上腹部/下腹部
    </label><br>
    <label>
        <input type="checkbox" name="option4" value="4"> 超音波検査士（九州）
腹部/上腹部/下腹部
    </label><br>
    <button type="submit"><a href="{{ route('process') }}">依頼</button>



</body>
</html>