<?php
class delete {

    public function __construct($location) {

        $this->delfile($location);

    }

    public function delfile($location) {

        unlink($location);
        header('Location: index.php');

    }

}
