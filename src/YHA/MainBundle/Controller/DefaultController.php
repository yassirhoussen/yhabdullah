<?php

namespace YHA\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use YHA\MainBundle\Form\MessageType;

class DefaultController extends Controller
{
	private $rssUrl = "http://blog.yhabdullah.com/feed/";
	
    public function indexAction($message)
    {
    	$form = $this->createForm(new MessageType());
    	//$this->getRssfeed();
        return $this->render('YHAMainBundle:Default:index.html.twig', array('form' => $form->createView(), 'message' => $message));
    }
    
    public function downloadAction($filename)
	{
	    $request = $this->get('request');
	    $path = dirname($this->get('kernel')->getRootDir()). "/web/downloads/";
	    $content = file_get_contents($path.$filename);
	
	    $response = new Response();
	    //set headers
	    $response->headers->set('Content-Type', 'application/pdf');
	    $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);
	
	    $response->setContent($content);
	    return $response;
	}
	
	private function getRssfeed() {
		$content = file_get_contents($this->rssUrl);
		echo "<pre>";
			print_r($content);
		echo "</pre>";
		
	}
 
}
