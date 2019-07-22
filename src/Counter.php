<?php
namespace Binayak;

use \DateTime;


class Counter{
	private $date;
	private $conn;

	public function __construct(){
		
	}

	public function calculate()
	{
		$sql = "SELECT * FROM events";
		$result = mysqli_query($this->conn,$sql);
		while($row = mysqli_fetch_assoc($result))
		{
			echo $row['name']."<br>";
			echo $this->dateDiffernce($row['date']);
			
		}

	}
	public function dateDiffernce($dateThen)
	{
		$dateNow = new DateTime(date("Y-m-d H:i:s"));
		$dateThen = new DateTime($dateThen);
		$diff = $dateNow->diff($dateThen);
		return $this->getCounter($diff);

	}

	public function getCounter($diff)
	{
		if($diff->y > 0)
		{
			$time = $diff->y."Y ". $diff->m."M ".$diff->d."d  ". $diff->h." : ".$diff->i." : ".$diff->s;
			return $time;
		}

		if($diff->m > 0)
		{
			$time = $diff->m."M ".$diff->d."d  ". $diff->h." : ".$diff->i." : ".$diff->s;
			return $time;
		}

		if($diff->d > 0)
		{
			$time = $diff->d."d  ". $diff->h." : ".$diff->i." : ".$diff->s;
			return $time;
		}

		
		$time =  $diff->h." : ".$diff->i." : ".$diff->s;
		return $time;

	}
	public function connect()
	{
		$this->conn = mysqli_connect("localhost","root","","events");
		return $this;
	}

	
}