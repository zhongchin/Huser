<?php

namespace Huser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UsercenterController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

