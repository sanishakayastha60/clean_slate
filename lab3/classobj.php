<?php
class Book {
    public $name;
    public $genre;
    public function __construct($name, $genre) {
        $this->name = $name;
        $this->genre = $genre;
    }
    public function info() {
        echo " " . $this->name . " is a book of " . $this->genre . " genre <br>";
    }
}
$book1 = new Book("To kill a MockingBird", "Classic");
$book2 = new Book("Verity", "Psychological");
$book1->info();
$book2->info();
?>
