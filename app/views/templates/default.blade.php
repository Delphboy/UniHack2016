<html>
<head>
    <title>CompSoc Manager</title>

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/css/metro.css" rel="stylesheet"/>
    <link href="/css/metro-schemes.css" rel="stylesheet"/>
    <link href="/css/metro-responsive.css" rel="stylesheet"/>
    <link href="/css/metro-icons.css" rel="stylesheet"/>

    <link href="/css/style.css" rel="stylesheet"/>
</head>

<body>

@include('templates/navbar')

<div class="padding20" style="width:80%; margin:0 auto;">
    @yield("content")
</div>

<div class="footer bg-cobalt margin10 no-margin-left no-margin-right no-margin-bottom padding10 fg-white align-center">
    <div style="width:80%; margin:0 auto;">
        &copy; 2016 CSSOCUK All Rights Reserved<br/>
        Created by <a class="fg-lightBlue fg-hover-cyan" href="http://www.kpf.io/">Katie Paxton-Fear</a>, <a class="fg-lightBlue fg-hover-cyan" href="http://henrysenior.com">Henry Senior</a> and <a class="fg-lightBlue fg-hover-cyan" href="">George Broadly</a><br>
        Completed in 24 hours for <a class="fg-lightBlue fg-hover-cyan" href="">Great Uni Hack</a> 2016
    </div>
</div>


<script src="/js/jquery-3.1.1.js"></script>
<script src="/js/metro.js"></script>
</body>
</html>