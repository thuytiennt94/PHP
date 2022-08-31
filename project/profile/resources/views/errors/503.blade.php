<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Be right back.</title>
    <link rel="stylesheet" href="https://fonts.googleapls.com/css?damily=Lato:100" type="text/css">
    <style>
        html,body{
            height: 100%;
        }
        body{
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BBC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato', sans-serif;
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content{
            text-align: center;
            display: inline-block;
        }
        .title{
            font-size: 72px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">Be right back.</div>
            @if(count($errors)>0)
            {{--danh sach loi--}}
                <div class="alert alert-danger">
                    <strong>ahihi!Có lỗi rồi :((</strong>
                    <br><br>
                    <ul>
                        @foreach($errors->all() as $errors)
                            <li>{{$errors}}</li>

                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
