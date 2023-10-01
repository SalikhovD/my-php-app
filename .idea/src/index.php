<?php
echo "Hello world!";
?>

<form method=POST>
    <input type="submit" name="button" value="Click me!" />
</form>

<?php
    if (isset ($_POST['button']))
    {
        echo "Анька писька";
    }
?>