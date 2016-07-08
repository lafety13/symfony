<?php

namespace EmpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EmpBundle\Entity\Employees;
use EmpBundle\Form\EmployeesType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Employees controller.
 *
 */
class EmployeesController extends Controller
{
    /**
     * Lists all Employees entities.
     *
     */
    public function indexAction()
    {
        $request = Request::createFromGlobals();
        $employee = new Employees();
        $em = $this->getDoctrine()->getManager();
        $department = $em->getRepository('EmpBundle:Department')->findAll();
        
        foreach ($department as $departmentName) {
            $choice[$departmentName->getDepartmentName()] = $departmentName->getDepartmentName();
        }

        $form = $this->createFormBuilder($employee)
            ->add('department', ChoiceType::class, array(
                'choices' => $choice,
            'required'    => false,
            'placeholder' => 'Choose your gender',
            'empty_data'  => null))
            ->getForm();

        $form->handleRequest($request);
        $dep = $request->request->get('form');

        if ($form->isSubmitted() && !empty($dep['department'])) {
            $employees = $em->getRepository('EmpBundle:Employees')->findByDepartment($dep['department']);

            return $this->render('employees/index.html.twig', array(
                'employees' => $employees,
                'form' => $form->createView(),
            ));
        }

        $employees = $em->getRepository('EmpBundle:Employees')->findAll();

        return $this->render('employees/index.html.twig', array(
            'employees' => $employees,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Employees entity.
     *
     */
    public function newAction(Request $request)
    {
        $employee = new Employees();

        $em = $this->getDoctrine()->getManager();
        $department = $em->getRepository('EmpBundle:Department')->findAll();
        
        foreach ($department as $departmentName) {
            $choice[$departmentName->getDepartmentName()] = $departmentName->getDepartmentName();
        }
       
        $form = $this->createFormBuilder($employee)
            ->add('name', TextType::class)
            ->add('department', ChoiceType::class, array(
                'choices' => $choice,
            'required'    => false,
            'placeholder' => 'Choose your gender',
            'empty_data'  => null))
            ->getForm();

        $form->handleRequest($request);
        $dep = $request->request->get('form');

        if ($form->isSubmitted() && $form->isValid() && !empty($dep['department'])) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employee);
            $em->flush();

            return $this->redirectToRoute('employees_show', array('id' => $employee->getId()));
        }

        return $this->render('employees/new.html.twig', array(
            'employee' => $employee,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Employees entity.
     *
     */
    public function showAction(Employees $employee)
    {
        $deleteForm = $this->createDeleteForm($employee);

        return $this->render('employees/show.html.twig', array(
            'employee' => $employee,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Employees entity.
     *
     */
    public function editAction(Request $request, Employees $employee)
    {
        $deleteForm = $this->createDeleteForm($employee);
        $editForm = $this->createForm('EmpBundle\Form\EmployeesType', $employee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employee);
            $em->flush();

            return $this->redirectToRoute('employees_edit', array('id' => $employee->getId()));
        }

        return $this->render('employees/edit.html.twig', array(
            'employee' => $employee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Employees entity.
     *
     */
    public function deleteAction(Request $request, Employees $employee)
    {
        $form = $this->createDeleteForm($employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($employee);
            $em->flush();
        }

        return $this->redirectToRoute('employees_index');
    }


    /**
     * Creates a form to delete a Employees entity.
     *
     * @param Employees $employee The Employees entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Employees $employee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('employees_delete', array('id' => $employee->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
