<?
namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class DefaultController
{
    public function indexAction(Request $request, Application $app)
    {
        return $app['twig']->render('index.html', array());
    }
}