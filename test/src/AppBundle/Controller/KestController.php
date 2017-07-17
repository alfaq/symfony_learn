<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class KestController extends Controller
{
  /**
   * @Route("/test/number", name="test_route")
   */
  public function numberAction()
  {
    $number = mt_rand(0, 100);
    $this->testfuncasd();
    $url = $this->generateUrl(
      'test_route'
    //array('slug' => 'my-blog-post')
    );
    // /blog/my-blog-post
    return new Response(
      '<html><body>Lucky number1: '.$number.$url.'</body></html>'
    );
  }

  public function testfuncasd(){

  }
}