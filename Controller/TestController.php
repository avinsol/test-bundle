<?php

namespace Avinsol\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="avinsol_test_Menu")
     */
    public function index($item = 'Menu')
    {
		$topMenu = array('Menu', 'Translations', 'Sysvars');
		$sideMenu = array('Menu' => array('Home', 'Products', 'About'),
							'Translations' => array('MenuItems', 'HomePage', 'ProductsPage', 'AboutPage'),
							'Sysvars' => array('MenuProperties', 'ContentProperties', 'FooterProperties'),
						 );
        return $this->render('@AvinsolTest/test/index.html.twig', [
            'topMenu' => $topMenu,
            'sideMenu' => $sideMenu,
            'item' => $item,
        ]);
    }

    /**
     * @Route("/Translations", name="avinsol_test_Translations")
     */
    public function testTranslations()
    {
        return $this->index('Translations');
    }

    /**
     * @Route("/Sysvars", name="avinsol_test_Sysvars")
     */
    public function testSysvars()
    {
        return $this->index('Sysvars');
    }

}
