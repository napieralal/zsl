<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #div{
            margin: auto;
            width: 804px;
            height: 205px;
            border-collapse: collapse;
        }
        #baner{
            height: 100px;
            width: 800px;
            margin: auto;
            border: 1px solid black;
        }
        #left{
            height: 100px;
            width: 400px;
            border: 1px solid black;
            float: left;
        }
        ul{
            list-style-type: none;
        }
        li:before{
            content: "-";
        }
        #right{
            font-style: italic;
            min-height: 100px;
            width: 400px;
            border: 1px solid black;
            float: left;
        }
    </style>
</head>
<body>
<div id="div">
    <div id="baner">
    <a href="index.html"><img src="" alt="tu powinien byc obrazek" width="800px" height="100px"></a>
    </div>
    <div id="left">
        <ul>
            <li><a href="strona1.html">Proste działania</a> </li>
            <li><a href="strona2.php">Potęgowanie</a> </li>
        </ul>
    </div>
    <div id="right">

    </div>
</div>
</body>
</html>