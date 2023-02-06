<?php 

/**
 * A class that represents a movie instance
 */
class Movie{
    protected $title;
    public $director;
    public $actors;
    public $yearOfRelease;

    /**
     * Creates a new movie instance
     *
     * @param String $_title The title of the movie
     * @param String $_director The director of the movie
     * @param [type] $_actors A list of actors who acted in the movie
     * @param [type] $_yearOfRelease The year of release of the movie
     */
    public function __construct(String $_title, String $_director, $_actors, $_yearOfRelease)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->actors = $_actors;
        $this->yearOfRelease = $_yearOfRelease;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($_title){
        $this->title = $_title;
    }
}



?>