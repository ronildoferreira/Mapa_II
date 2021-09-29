<?php

function loadController($NameController, $nameFunction = "index")
{
	$NameController .= "controller"; 
	require_once ('Controllers/'.$NameController.'.php');
	$controller = new $NameController();
	$controller->$nameFunction();

}

if(isset($_GET['c']))
	{	
		$NameController = $_GET['c'];


		if(isset($_GET['f']))
		
			loadController($NameController, $_GET['f']);
		
		else
		
			loadController($NameController);

		}
		else
		{
			loadController('course');
		}
	





#require_once('Model/Student.php');

#include_once ('Views/pageHeader.php');
#include_once ('Views/pageFooter.php');

#$controller = new CourseController();
#$controller->index();

#$student = new Student();
#$result = $student->findAll();
#$result = $student->find(0);
#$student->setName("Ronildo F Silva");
#$student->save();


#$course = new Course();
#$results = $course->findAll();
#$course->delete(3);
#$course->find(4);
#$course->setNameCourse("Curso de C++");
#$course->save();


#$result = $course->search(array(':STATUS' => 2, ':NAME' => '%php%'));

#$course->setNameCourse("Curso de PHP");
#$course->setDescription("Aprenda a programar em 20 dias");
#$course->setDateStart("2021-09-10");
#$course->setDateFinish("2021-12-25");
#$course->setStatus(2);
#$course->save();

?>
