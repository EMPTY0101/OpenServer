<?php
require_once 'quackbehaviour.php';
class Squeak implements QuackBehavior {
    public function quack() {
        echo 'Резиновая уточка пищит<br>';
    }
}
?>