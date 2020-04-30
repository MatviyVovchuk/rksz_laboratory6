<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <form action='action.php' method='post'>
        <input type='text' name="firstName" /><span>Ім'я</span><br />
        <input type='text' name="lastName"  /><span>Фамілія</span><br />
        <input type='text' name="address"  /><span>Адреса</span><br />
        <input type='text' name="email"  /><span>Електронна пошта</span><br />
        <input type='submit'>
    </form>
    <?php 
        // Функція, що визначає найменше значення серед заданих чисел
        function printMin($array){   
            print(min($array));
        }

        printMin([221, 2, 3, 23, 23, 13, 412]);
    ?>
</body>
</html>