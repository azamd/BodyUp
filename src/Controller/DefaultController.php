<?php

namespace App\Controller;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{

    /**
     * Fake homepage - redirect to _locale homepage
     * @Route("/", name="app_fake_homepage")
     */
    public function fakeHomepage()
    {
        return $this->redirectToRoute('app_homepage');
    }

    /**
     * @Route("/{_locale}", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('homepage/homepage.html.twig');
    }

    /**
     * @Route("/locale/{_locale}", name="switch_locale")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function changeLocaleAction(Request $request)
    {
        $locale = $request->getLocale();
        $this->get('session')->set('_locale', $locale);
/*        if ($request->headers->get('referer') !== null) {
            return $this->redirect($request->headers->get('referer'));
        }*/
        return $this->redirectToRoute('app_homepage');
    }

}