<?php
$form = [
    'inputs' => [
        'user_name' => [
            'type' => 'text',
            'placeholder' => 'User name:',
            'name' => 'user_name',
        ],
        'user_email' => [
            'type' => 'email',
            'placeholder' => 'User email:',
            'name' => 'user_email',
        ],
        'user_password' => [
            'type' => 'password',
            'placeholder' => 'User password:',
            'name' => 'user_password',
        ],
        'user_age' => [
            'type' => 'number',
            'placeholder' => 'User age:',
            'name' => 'user_age',
        ],
    ],
    'buttons' => [
        'send' => [
            'type' => 'submit',
            'value' => 'Siusti',
            'name' => 'send'
        ],
        'delete' => [
            'type' => 'submit',
            'value' => 'Istrinti',
            'name' => 'delete'
        ]
    ],
];
//1. Sukurkite funkcija kuri grazintu inputo 'user_name' reiksme type

function return_type($array, $input_key)
{
    foreach ($array['inputs'] as $key => $input) {
        if ($key == $input_key) {
            return $input['type'];
        }
    }
}
var_dump(return_type($form, 'user_name'));


//2. Panaudokite funkcija, kad matytume kiek balu gavo kiekvienas asmuo.
function get_mark($name, $mark)
{
    print $name . ' -> ' . $mark . '<br>';
}

get_mark('Dainius', 10);
get_mark('Karolis', 2);

//3. sukurkite selektroiu kuriame butu visi 4 vardai.paselektinus varda ir
// paspaudus mygtuka sis vardas atsiranda zemiau, ir atitinkamos spalvos kaip masyve nurodyta

$masyvas = [
    'Dainius' => 'green',
    'Karolis' => 'blue',
    'Saulius' => 'grey',
    'Petras' => 'red',
];

function get_options($list)
{
    print '<form method="post"><select name="selected_name" id="">';
    foreach ($list as $name => $color) {
        print '<option value="' . $name . '">' . $name . '</option>';
    }
    print '</select><input type="Submit" value="Select"<\form>';
    foreach ($list as $name => $color) {
        if (!empty ($_POST) && $name == $_POST['selected_name']) {
            print '<h1 style="color:' . $color . ';">' . $name . '</h1>';
        }
    }
}
print '<br>';
//4. sukurti funkcija kuri paims musu serverio data ir laika.
//Funkcijos parametras $data_laikas ir $ +2 dienos.

function new_time($days)
{
    echo "date " . date("Y-m-d h:i:sa", strtotime(' + '.$days.' days'));
}
new_time(2);

print '<br>';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<?php get_options($masyvas); ?>
</body>
</html>
