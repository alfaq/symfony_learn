<?php

/**
 * Created by PhpStorm.
 * User: Mozh
 * Date: 17-07-2017
 * Time: 11:15
 */

namespace TestBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DefaultController extends Controller
{
  /**
   * @Route("/test")
   */
  public function indexAction()
  {
    $url = $this->generateUrl(
      'test_route',
      array(),
      UrlGeneratorInterface::ABSOLUTE_URL
    //array('slug' => 'my-blog-post')
    );

    $navigation = array(array('href'=> $url, 'caption'=>'test'), array('href'=> '/', 'caption'=>'test123'));

    // renders app/Resources/views/lucky/number.html.twig
    return $this->render('lucky/number.html.twig', array('page_title' => 'Page title', 'navigation' => $navigation));
  }
}
