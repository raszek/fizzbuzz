<?php

use Raszek\FizzBuzz\FizzBuzzFactory;

require_once '../vendor/autoload.php';

$output = null;

if (isset($_GET['number-of-lines'])) {
    $factory = new FizzBuzzFactory();

    $fizzBuzzWeb = $factory->createWeb();

    if (!ctype_digit($_GET['number-of-lines'])) {
        throw new RuntimeException('Invalid argument of number of lines');
    }

    $output = $fizzBuzzWeb->run($_GET['number-of-lines']);
}

?>

<form>
    Number of lines:
    <input type="number" name="number-of-lines">
    <input type="submit" value="Submit">
</form>

<?php if($output) : ?>
    <?php echo $output ?>
<?php endif; ?>

