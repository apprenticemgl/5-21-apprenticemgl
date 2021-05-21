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
    <input type="button" class="btn btn-success" id="success" value="Success"/>
    <!-- <img/> -->
    <button type="button" class="btn btn-danger" id="danger" onclick="dangerDarsan()">Danger</button>
    <button type="button" class="btn btn-warning"
    onclick="document.getElementById('the-child').innerHtml = 'Sanuulj baina shuu!'">Warning</button>
    <button type="button" class="btn btn-info" onmouseover="document.getElementById('the-child').innerHtml = 'Info deer mouse irlee!'">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
    <?php //$user; print_r($user); die(); ?>

    <button type="button" class="btn btn-link">Link</button>

    <div class="with-child" id="with-child">
        <p class="the-child" id="the-child">I'm the child</p>
    </div>
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

    var buxButtons = document.getElementsByClassName('btn');
    tooBod(buxButtons);

    // document.getElementById('with-child').removeChild('p');


    function dangerDarsan() {
        var successButton = document.getElementById('success');
        console.log(successButton);
        // alert('succes soligdloo shuu');
        successButton.innerHTML = 'Hi';
        successButton.setAttribute('value', 'HI hi');
        successButton.setAttribute('type', 'text');
    }

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