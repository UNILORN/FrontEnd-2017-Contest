<!doctype html>
<html lang=ja>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.0.js" integrity="sha256-wPFJNIFlVY49B+CuAIrDr932XSb6Jk3J1M22M3E2ylQ=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
    <script src="/js/push.js"></script>
    <title>Result - FrontEnd2017</title>
</head>
<body>
    <main>
    @foreach($user as $value)
        <div class="mainColumn">
            <div id="user{{$value->id}}" style="background-color: {{$value->toggle ? "#64b5f6" : "#e57373"}}">
                <a href="#">
                    <span>{{$value->name}}</span>
                </a>
            </div>
        </div>
    @endforeach
    </main>
</body>

<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('1330b9288dddb81f7487', {
        encrypted: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function (data) {

        var htmlData = "";
        if(data.toggle){
            htmlData = "帰宅しました";
            $('#user'+data.id).css("background-color","#64b5f6");
        }
        else{
            htmlData = "家を出ました";
            $('#user'+data.id).css("background-color","#e57373");
        }
        Push.create("成功！", {
            body: data.name+"が"+htmlData,
            timeout: 4000,
            onClick: function () {
                window.focus();
                this.close();
            }
        });

    });
</script>


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