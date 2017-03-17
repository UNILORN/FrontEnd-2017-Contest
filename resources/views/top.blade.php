<!doctype html>
<html lang="jn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrontEnd2017 Unilorn!!</title>
</head>
<body>
    <main>
        <div class="mainColumn">
            <div style="background-color: #b2ebf2">
                <a href="/result">
                    <span>RESULT</span>
                </a>
            </div>
        </div>
        <div class="mainColumn">
            <div style="background-color: #ffcc80">
                <a href="/contact">
                    <span>CONTACT</span>
                </a>
            </div>
        </div>
        <div class="mainColumn">
            <div style="background-color: #69f0ae">
                <a href="/mypage">
                    <span>MY PAGE</span>
                </a>
            </div>
        </div>
        <div class="mainColumn">
            <div style="background-color: #ffab91">
                <a href="/group">
                    <span>GROUPS</span>
                </a>
            </div>
        </div>
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
        width:50%;
        height:50vh;
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
        font-size: 90px;
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