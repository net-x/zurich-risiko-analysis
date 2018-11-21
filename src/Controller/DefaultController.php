<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="login")
     */
    public function login()
    {
        return $this->render('default/login.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/liste", name="liste")
     */
    public function liste()
    {
        return $this->render('default/liste.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/analyse", name="analyse")
     */
    public function analyse()
    {
        return $this->render('default/analyse.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/resume", name="resume")
     */
    public function resume()
    {
        return $this->render('default/resume.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/selectuser", name="selectuser")
     */
    public function selectuser()
    {
        return $this->render('default/selectuser.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_1", name="form_1")
     */
    public function form1()
    {
        return $this->render('default/form_1.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_2", name="form_2")
     */
    public function form2()
    {
        return $this->render('default/form_2.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_3", name="form_3")
     */
    public function form3()
    {
        return $this->render('default/form_3.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_4", name="form_4")
     */
    public function form4()
    {
        return $this->render('default/form_4.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_5", name="form_5")
     */
    public function form5()
    {
        return $this->render('default/form_5.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_6", name="form_6")
     */
    public function form6()
    {
        return $this->render('default/form_6.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_7", name="form_7")
     */
    public function form7()
    {
        return $this->render('default/form_7.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_8", name="form_8")
     */
    public function form8()
    {
        return $this->render('default/form_8.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_9", name="form_9")
     */
    public function form9()
    {
        return $this->render('default/form_9.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_10", name="form_10")
     */
    public function form10()
    {
        return $this->render('default/form_10.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_11", name="form_11")
     */
    public function form11()
    {
        return $this->render('default/form_11.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_12", name="form_12")
     */
    public function form12()
    {
        return $this->render('default/form_12.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/form_13", name="form_13")
     */
    public function form13()
    {
        return $this->render('default/form_13.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}