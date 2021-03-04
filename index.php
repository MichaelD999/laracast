<?php



class Task {
	public $description;

	public $completed = false;

	public function __contruct($description)
	{
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}

	public function isComplete()
	{
       return $this->completed;
	}

}

$tasks = [
new task('Go to the store'), //0
new task('Finish my screencast'), //1
new task('Clean my room') //2
];

$tasks[0]->complete();



require 'index.view.php';
