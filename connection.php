<?php
class connection
{
    public $mysqli;
    public function __construct() {
        $this->mysqli = mysqli_connect(
            "localhost",
            "root",
            "",
            "biodata"
        );
    }
}
