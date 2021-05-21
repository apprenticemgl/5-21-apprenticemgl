<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <button type="button" class="btn btn-primary" id="primary">Primary</button>
    <button type="button" class="btn btn-secondary" id="primary">Secondary</button>
    <button type="button" class="btn btn-success" id="success">Success</button>
    <button type="button" class="btn btn-danger" id="danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
    <?php //$user; print_r($user); die(); ?>
    <button type="button" class="btn btn-link">Link</button>

    <style>
    /* css ornoo = cascading STYLE sheet*/
    </style>

    <script>
    /* javaSCRIPT ornoo */
    // console.log('bi end log bichig baina');
    // console.error('bi end aldaa gargaj baina');

    // alert('Sanuulga');

    // console.error('alerting daraa aldaa');

    // console.log(variable_name);

    // $variable_name = 'variable holder';
    var variable_name = 'variable holder';

    // console.log(variable_name);

    //Method = Function

    function tooBod(variable) {
        // function happens here
        console.log(variable, 'tooBod function yavj duuslaa');
        return variable;
    }

    // tooBod('zov zov');
    // tooBod(variable_name);


    var successButton = document.getElementById('success');
    console.log(successButton);
    </script>





    <?php
    function tooBod($variable){
        // function happens here
        return $variable;
    }

    function xoyorVariable($neg, $xoyor) {
        return;
    }
    xoyorVariable(1,2);    
    ?>
</body>
</html>