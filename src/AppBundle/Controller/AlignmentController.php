<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Alignment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Alignment controller.
 *
 * @Route("alignment")
 */
class AlignmentController extends Controller
{
    /**
     * Lists all alignment entities.
     *
     * @Route("/", name="alignment_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $title = 'Alignments CRUD';
        $em = $this->getDoctrine()->getManager();

        $alignments = $em->getRepository('AppBundle:Alignment')->findAll();

        return $this->render('alignment/index.html.twig', array(
            'alignments' => $alignments,
            'title' => $title,
        ));
    }

    /**
     * Creates a new alignment entity.
     *
     * @Route("/new", name="alignment_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $alignment = new Alignment();
        $form = $this->createForm('AppBundle\Form\AlignmentType', $alignment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alignment);
            $em->flush();

            return $this->redirectToRoute('alignment_show', array('alignmentid' => $alignment->getAlignmentid()));
        }

        return $this->render('alignment/new.html.twig', array(
            'alignment' => $alignment,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a alignment entity.
     *
     * @Route("/{alignmentid}", name="alignment_show")
     * @Method("GET")
     */
    public function showAction(Alignment $alignment)
    {
        $deleteForm = $this->createDeleteForm($alignment);

        return $this->render('alignment/show.html.twig', array(
            'alignment' => $alignment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing alignment entity.
     *
     * @Route("/{alignmentid}/edit", name="alignment_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Alignment $alignment)
    {
        $deleteForm = $this->createDeleteForm($alignment);
        $editForm = $this->createForm('AppBundle\Form\AlignmentType', $alignment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('alignment_edit', array('alignmentid' => $alignment->getAlignmentid()));
        }

        return $this->render('alignment/edit.html.twig', array(
            'alignment' => $alignment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a alignment entity.
     *
     * @Route("/{alignmentid}", name="alignment_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Alignment $alignment)
    {
        $form = $this->createDeleteForm($alignment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($alignment);
            $em->flush();
        }

        return $this->redirectToRoute('alignment_index');
    }

    /**
     * Creates a form to delete a alignment entity.
     *
     * @param Alignment $alignment The alignment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Alignment $alignment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('alignment_delete', array('alignmentid' => $alignment->getAlignmentid())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
