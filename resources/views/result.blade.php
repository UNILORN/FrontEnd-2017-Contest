<!doctype html>
<html lang=ja>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result - FrontEnd2017</title>
</head>
<body>
    <main>
    @foreach($user as $value)
        <div class="mainColumn">
            <div style="background-color: {{$value->toggle ? "#64b5f6" : "#e57373"}}">
                <a href="#">
                    <span>{{$value->name}}</span>
                </a>
            </div>
        </div>
    @endforeach
    </main>
</body>
<style>
    @import url('https://fonts.googleapis.com/css?family=Exo+2');
    body,html{
        margin:0;
        padding:0;
    }
    a{
        text-decoration: none;
    }
    main{
        letter-spacing: -0.5em;
    }
    .mainColumn{
        display: inline-block;
        width:25%;
        height:25vh;
        box-sizing: border-box;
        padding:20px;
        font-family: 'Exo 2', sans-serif;
        letter-spacing: initial;
    }
    .mainColumn > div{
        width:100%;
        height:100%;
    }
    .mainColumn a{
        display: table;
        font-size: 20px;
        width:100%;
        height:100%;
        line-height: 100%;
        text-align: center;
        color: #212121;
        letter-spacing: 0.1em;
    }
    .mainColumn a:active{
        background-color: rgba(0,0,0,0.3);
    }

    .mainColumn span{
        display: table-cell;
        vertical-align: middle;
    }


</style>
</html>