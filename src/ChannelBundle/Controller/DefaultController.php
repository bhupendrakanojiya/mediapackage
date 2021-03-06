<?php

namespace ChannelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use ChannelBundle\Entity\Channels;
use ChannelBundle\Entity\Users;
use ChannelBundle\Entity\Packages;
use ChannelBundle\Entity\Regions;
use ChannelBundle\Entity\ChannelMapping;
use ChannelBundle\Form\ChannelsType;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
		
		
		$em = $this->getDoctrine()->getManager();
		
        $channels = $em->getRepository('ChannelBundle:Channels')->findAll();
		 $packages = $em->getRepository('ChannelBundle:Packages')->findAll();
		 $regions = $em->getRepository('ChannelBundle:Regions')->findAll();
		 		 
		return $this->render('ChannelBundle:Default:front.html.twig',array('entities' => $channels,'packages'=>$packages,'regions'=>$regions));
    }
	public function mappingAction($mapid)
	{
		//echo $mapid;
		$em = $this->getDoctrine()->getManager();
		//$mapping = $em->getRepository('ChannelBundle:ChannelMapping')->findAll();
		$mapping = $em->getRepository('ChannelBundle:ChannelMapping')->findBy(array('packageAbc' => $mapid ));
		$channels = $em->getRepository('ChannelBundle:Channels')->findAll();
		
		
		$results = $this->getDoctrine()
               ->getRepository('ChannelBundle:ChannelMapping')
               ->createQueryBuilder('e')
               ->select('e')
			   ->getQuery()
               ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
			   $ids[]=array();
			   
			  foreach($results as $result)
			  {
				  if($result['packageAbc']==$mapid)
				  {
					 // $ids[]=$result['channelId'];
					 $resultVal=$em->getRepository('ChannelBundle:Channels')->findById($result['channelId']);
					  $ids[]=$resultVal;
				  }
			  }
				  
		
		return $this->render('ChannelBundle:Default:mapping.html.twig',array('mappings' => $ids));
	}
	function authAction(Request $request)
	{
		$session = $request->getSession();
		$username=$session->get('username');
		if(empty($username)){return $this->redirect($this->generateUrl('users_login'));}
	}
	
 
}
