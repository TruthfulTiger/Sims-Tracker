<?php
// src/AppBundle/Menu/Builder.php
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->setChildrenAttribute('class', 'nav navbar-nav mr-auto');

        $menu->addChild('Home', array('route' => 'homepage'));

/*        $menu->addChild('How to use', array('route' => '', 'class' => 'nav-item'));
        $menu['How to use']->setLinkAttribute('class', 'nav-link');

        $menu->addChild('Support', array('route' => '', 'class' => 'nav-item'));
        $menu['Support']->setLinkAttribute('class', 'nav-link');

        $menu->addChild('Community', array('route' => '', 'class' => 'nav-item'));
        $menu['Community']->setLinkAttribute('class', 'nav-link');*/

        if($this->container->get('security.authorization_checker')->isGranted(array('ROLE_ADMIN', 'ROLE_SUPER_ADMIN', 'ROLE_USER'))) {
            $menu->addChild('Logout', array('route' => 'fos_user_security_logout'));
            $menu->addChild('Admin', array('route' => 'admin'));
         } else {
            $menu->addChild('Login', array('route' => 'fos_user_security_login'));

            $menu->addChild('Register', array('route' => 'fos_user_registration_register'));
        }

        // create another menu item

        foreach ($menu as $child) {
            $child->setLinkAttribute('class', 'nav-link')
                ->setAttribute('class', 'nav-item');
        }



        return $menu;
    }

    public function userMenu(FactoryInterface $factory, array $options)
    {
        $username = 'guest';
        $menu = $factory->createItem('root');

        // You probably want to show user specific information such as the username here. That's possible! Use any of the below methods to do this.
        //// Check if the visitor has any authenticated roles
        if($this->container->get('security.authorization_checker')->isGranted(array('ROLE_ADMIN', 'ROLE_SUPER_ADMIN', 'ROLE_USER'))) {
            $username = $this->container->get('security.token_storage')->getToken()->getUser()->getUsername(); // Get username of the current logged in user
            $menu->addChild(
                'user', array('uri' => '#'))
                ->setLabel('Hello '.$username)
            ->setAttribute('class', 'nav-item dropdown')
                ->setLinkAttribute('class', 'nav-link dropdown-toggle')
                ->setLinkAttribute('data-toggle', 'dropdown')
                ->setAttribute('id', 'dropdown');
            $menu['user']->addChild(
                'View Profile', array('route' => 'fos_user_profile_show'))
                ->setLinkAttribute('class', 'dropdown-item');

            $menu['user']->addChild(
                'Edit Profile', array('route' => 'fos_user_profile_edit'))
                ->setLinkAttribute('class', 'dropdown-item');

            $menu['user']->addChild(
                'Logout', array('route' => 'fos_user_security_logout'))
                ->setLinkAttribute('class', 'dropdown-item');

            $menu['user']->setChildrenAttribute('class', 'dropdown-menu')
            ->setChildrenAttribute('aria-labelledby', 'dropdown');

        } else {
            $menu->addChild(
                'user', array('uri' => '#'))
                ->setLabel('Hello guest');
        }

        $menu->setChildrenAttribute('class', 'nav navbar-nav float-right');
        foreach ($menu as $child) {
            $child->setLinkAttribute('class', 'nav-link')
                ->setAttribute('class', 'nav-item');
        }

        return $menu;
    }
}