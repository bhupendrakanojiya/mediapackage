<?php

namespace ChannelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\DBAL\DriverManager;

use ChannelBundle\Entity\Channels;
use ChannelBundle\Form\ChannelsType;


/**
 * Channels controller.
 *
 */
class ChannelsController extends Controller
{

    /**
     * Lists all Channels entities.
     *
     */
    public function indexAction(Request $request)
    {
		
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ChannelBundle:Channels')->findAll();
		

        return $this->render('ChannelBundle:Channels:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Channels entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Channels();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
		
	
        if ($form->isValid()) {
				$req=$request->request->get('channelbundle_channels');
			
				$packages=$req['packages'];

		
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
			$ch_id=$entity->getId();
			if(is_array($packages))
			{
				
				/*$conn = DriverManager::getConnection($params, $config); */
				foreach($packages as $package)
				{
					$sql = "INSERT INTO channel_mapping (channel_id, package_abc) VALUES ('".$ch_id."', '".$package."')";
				$stmt = $em->getConnection()->prepare($sql);
				//$stmt->bindValue(':invoice', $invoiceId);
				$result = $stmt->execute();
				}
				
			}

            return $this->redirect($this->generateUrl('channels_show', array('id' => $entity->getId())));
        }

        return $this->render('ChannelBundle:Channels:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Channels entity.
     *
     * @param Channels $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Channels $entity)
    {
        $form = $this->createForm(new ChannelsType(), $entity, array(
            'action' => $this->generateUrl('channels_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Channels entity.
     *
     */
    public function newAction(Request $request)
    {
		$username=$this->isLogged($request);
		if(empty($username)){if(empty($username)){return $this->redirect($this->generateUrl('users_login'));}
			}
        $entity = new Channels();
        $form   = $this->createCreateForm($entity);
		
        return $this->render('ChannelBundle:Channels:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Channels entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChannelBundle:Channels')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Channels entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ChannelBundle:Channels:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Channels entity.
     *
     */
    public function editAction($id,Request $request)
    {
		$username=$this->isLogged($request);
		if(empty($username)){if(empty($username)){return $this->redirect($this->generateUrl('users_login'));}
			}
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChannelBundle:Channels')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Channels entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ChannelBundle:Channels:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Channels entity.
    *
    * @param Channels $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Channels $entity)
    {
        $form = $this->createForm(new ChannelsType(), $entity, array(
            'action' => $this->generateUrl('channels_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Channels entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChannelBundle:Channels')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Channels entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('channels_edit', array('id' => $id)));
        }

        return $this->render('ChannelBundle:Channels:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Channels entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ChannelBundle:Channels')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Channels entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('channels'));
    }

    /**
     * Creates a form to delete a Channels entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('channels_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
	public function isLogged(Request $request){
		$session = $request->getSession();
		$username=$session->get('username');
		return $username;
	}
}
