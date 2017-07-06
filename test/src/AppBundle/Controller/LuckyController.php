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

class LuckyController extends Controller
{
  /**
   * @Route("/lucky/number/{max}")
   */
  public function numberAction($max)
  {
    $number = mt_rand(0, $max);

    /*return new Response(
      '<html><body>Lucky number: '.$number.'</body></html>'
    );*/
    // renders app/Resources/views/lucky/number.html.twig
    return $this->render('lucky/number.html.twig', array('number' => $number));
  }
}