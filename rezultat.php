<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php 
    print_r($_POST);
    echo('Pozdrav, ' . $_POST['prezime']);
    echo('<br>');
    echo('Vi imate: ' . $_POST['godine'] . ' godina');
    echo('<br>');
    
    if ($_POST['godine'] >= 18)
    {
        echo('Vi ste PUNOLJETNI!');
    }
    else
    {
        echo('Vi niste punoljetni!');
    }
    echo(gettype($_POST['godine']));

    echo($_POST['godine'] == 18);
    ?>
</body>

</html>