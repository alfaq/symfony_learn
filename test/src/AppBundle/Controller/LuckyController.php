<?php
/**
 * Created by PhpStorm.
 * User: Mozh
 * Date: 29-06-2017
 * Time: 16:13
 */

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class LuckyController extends Controller
{
  /**
   * @Route("/lucky/number/{max}")
   */
  public function numberAction($max)
  {
    $number = mt_rand(0, $max);
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