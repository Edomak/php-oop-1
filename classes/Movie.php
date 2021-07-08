<?php 

class Movie {
    public $title;
    public $genre;
    public $year;
    public $director;
    public $country;
    public $duration;

    function __construct ($title, $genre, $year, $director, $country) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->director = $director;
        $this->country = $country;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function setDuration($duration) {
        $this->duration = $duration;
    }
}; 

?>
