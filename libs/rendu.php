<?php

$stats = ''. count($joursDifferents).' jours différents.
<br/>
dont '.$joursWeekend.' jours de weekend.';
$html = '
<html>
<head>
    <meta charset="UTF-8"></meta>
    <title>Git log all</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row-fluid">
        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>Feuille de route

                    </h1>
                </div>
                <div class="panel-body">
'. $stats .'
<hr/>
                ' . $rep . '
                </div>
            </div>
        </div>
        <div class="col-lg-6">
        <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>
                        <a class="btn btn-primary" href="https://github.com/tykayn/gitall">
                        Git all
                        </a>
                    </h1>
                </div>
                <div class="panel-body">

                <div class="well">
                <small>généré le ' . date('r') . '</small>

                <hr/>
                <a href="http://artlemoine.com" class="btn btn-primary">portfolio</a>
                <a href="http://github.com/tykayn" class="btn btn-primary">github tykayn</a>
                </div>
            </div>


        </div>
    </div>



</div>
<style>
h2 {
    margin-left: 0.5em;
    }

    h3 {
    margin-left: 1em;
    }

    h4 {
    margin-left: 3em;
    }

    h5 {
    margin-left: 4em;
    }
</style>
</body>
</html>
<?php
';