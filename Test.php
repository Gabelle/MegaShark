<?php

class Movie
{
    private $name;
    private $releaseDate;
    private $duration;
    private $description;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
    
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }
    
    public function setReleaseDate($releaseDate = "")
    {
        $this->releaseDate = $releaseDate;
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration($duration = "")
    {
        $this->duration = $duration;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description = "")
    {
        $this->description = $description;
    }
    
    
    function showMovieDesc()
    {
        print 'Name: '.$this->name."\n".'Release date: '.$this->releaseDate."\n".'Duration: '.$this->duration."\n".'Description:'.$this->description;
    }
}



$movie1 = new Movie();
$movie1->setName('The Last Crusade');
$movie1->setReleaseDate('07 07 17');
$movie1->setDuration('7h');
$movie1->setDescription('The Medieval age need more crusade to take back Jerusalem.'."\n".'The pope made it clear, this will be the world last crusade to retrieve the Saint Ground !!!');
$movie1->showMovieDesc();