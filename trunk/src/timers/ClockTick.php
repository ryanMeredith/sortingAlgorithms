<?php namespace timers;

class ClockTick
{
	protected $milliseconds;
	protected $offset = 0;
	protected $startTime;
	protected $endTime;
	protected $tickCount;
	
	protected $timedObject;
	
	public function __construct(TimedObject $timedObject)
	{
		$this->timedObject = $timedObject;
	}
	
	public function startClock()
	{
		$this->startTime = time();
	}
	
	public function stopClock()
	{
		$this->endTime = time();
	}
	
	public function setMillisecondsThrowsException($milliseconds)
	{
		if (is_integer($milliseconds)){
			$this->milliseconds = $milliseconds;	
		}else{
			throw new Exception("Time must be an integer");	
		}
	}
	
	public function setOffset($offset)
	{
		$this->offset = $offset;
	}
	
	public function getMilliseconds()
	{
		return $this->milliseconds;
	}
	
	public function getTimeRunning()
	{
		$endTime = time();
		if(isset($this->endTime)){
			$endTime = $this->endTime;
		}
		return ($this->endTime - $this->startTime); 
	}
	
	protected function runProcess()
	{
		sleep($this->offset);
		while(!isset($this->endTime)){
			$this->timedObject->runProcess;
			$this->waitTime();
		}
	}
	
	protected function waitTime()
	{
		sleep($this->milliseconds/1000);
	}
	
}
?>
