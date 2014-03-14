<?php

namespace uos\uosBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('uosuosBundle:Users');
        if ($request->getMethod() == 'POST') {
            $session->clear();
            $username = $request->get('username');
            $password = sha1($request->get('password'));
            $remember = $request->get('remember');
            $user = $repository->findOneBy(array('userName' => $username, 'password' => $password));
            if ($user) {
                if ($remember == 'remember-me') {
                    $login = new Login();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $session->set('login', $login);
                }
                return $this->render('uosuosBundle:Default:welcome.html.twig', array('name' => $user->getFirstName()));
            } else {
                return $this->render('uosuosBundle:Default:index.html.twig', array('name' => 'Login Error'));
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('userName' => $username, 'password' => $password));
                if ($user) {
                    $page = $request->get('page');
                    $count_per_page = 50;
                    $total_count = $this->getTotalCountries();
                    $total_pages = ceil($total_count / $count_per_page);

                    if (!is_numeric($page)) {
                        $page = 1;
                    } else {
                        $page = floor($page);
                    }
                    if ($total_count <= $count_per_page) {
                        $page = 1;
                    }
                    if (($page * $count_per_page) > $total_count) {
                        $page = $total_pages;
                    }
                    $offset = 0;
                    if ($page > 1) {
                        $offset = $count_per_page * ($page - 1);
                    }
                    $em = $this->getDoctrine()->getEntityManager();
                    $ctryQuery = $em->createQueryBuilder()
                            ->select('c')
                            ->from('uosuosBundle:Country', 'c')
                            ->setFirstResult($offset)
                            ->setMaxResults($count_per_page);
                    $ctryFinalQuery = $ctryQuery->getQuery();

                    $countries = $ctryFinalQuery->getArrayResult();
                    return $this->render('uosuosBundle:Default:welcome.html.twig', array('name' => $user->getFirstName(), 'countries' => $countries, 'total_pages' => $total_pages, 'current_page' => $page));
                }
            }
            return $this->render('uosuosBundle:Default:index.html.twig');
        }
    }
    
    public function uosAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('uosuosBundle:Users');

        if ($request->getMethod() == 'POST') {

            $user_id = $request->get('user_id');
            $password = $request->get('password');

            $user = $repository->findOneBy(array('user' => $user_id, 'password' => $password));
            if ($user) {
                return $this->render('uosuosBundle:Default:home.html.twig', array('name' => $user->getUser()));
            } else {
                return $this->render('uosuosBundle:Default:login.html.twig', array('name' => 'Login Error'));
            }
        }
        return $this->render('uosuosBundle:Default:uos.html.twig');
    }
}
