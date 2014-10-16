<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDemoBundle:Main:index.html.twig', array(
                // ...
            ));    }
		
	public function aboutAction()
    {
        return $this->render('AcmeDemoBundle:Main:about.html.twig', array(
                // ...
            ));    }
			
	public function parentAction()
    {
        return $this->render('AcmeDemoBundle:Main:parent.html.twig', array(
                // ...
            ));    }
	
	public function teacherAction()
    {
        return $this->render('AcmeDemoBundle:Main:teacher.html.twig', array(
                // ...
            ));    }
	
	public function advisorAction()
    {
        return $this->render('AcmeDemoBundle:Main:advisor.html.twig', array(
                // ...
            ));    }
	
	public function contactAction()
    {
        return $this->render('AcmeDemoBundle:Main:contact.html.twig', array(
                // ...
            ));    }	
	
	public function testimonialAction()
    {
        return $this->render('AcmeDemoBundle:Main:testimonial.html.twig', array(
                // ...
            ));    }		
}
