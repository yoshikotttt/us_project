<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>〇〇さん</div>
    <div>受託アクティブ  30人</div>

    <div>
        <h3>検査を依頼したい</h3>
        <button>心臓</button>
         <button ><a href="{{ route('search') }}">腹部（上腹部）</button>
          <button>腹部（下腹部）</button>
           <button>表在</button>
    </div>
</body>
</html>