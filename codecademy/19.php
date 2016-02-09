<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
    $name = 'Dima';
    switch ($name):
        case 'Ira':
            echo 'Ira';
            break;
        case 'Max':
            echo 'Max';
            break;
        case 'Dima':
            echo 'Dima';
            break;
        default:
            echo "I do not know who are you.";
    endswitch;        
    ?>
	</body>
</html>