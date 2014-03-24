<?php

namespace uos\uosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use uos\uosBundle\Modals\Login;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('uosuosBundle:Users');
        if ($request->getMethod() == 'POST') {
            $session->clear();
            $username = $request->get('username');
            $password = sha1($request->get('password'));
            //           $remember = $request->get('remember');
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
        //       $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('uosuosBundle:Users');

        if ($request->getMethod() == 'POST') {
            //          $session->clear();
            $user_id = $request->get('user_id');
            $password = $request->get('password');

            $user = $repository->findOneBy(array('user' => $user_id, 'password' => $password));

            if ($user) {

                if ($user->getStudent() != null) {
                    $stud_emp_id = $user->getStudent()->getId();
                } else if ($user->getEmployee() != null) {
                    $stud_emp_id = $user->getEmployee()->getId();
                }
                else
                {
                    $stud_emp_id='br';
                }
                /*                   $login = new Login();
                  $login->setUsername($user_id);
                  $login->setPassword($password);
                  $session->set('login', $login);
                 */
                $session = new Session();
                $session->start();

                // set and get session attributes
                $session->set('name', $user->getFirstname());
                $session->set('id', $user->getId());
                $session->set('role', $user->getRole());
                $session->set('stud_emp_id', $stud_emp_id);

                $session->getFlashBag()->add('user', 'Loged In');
  //              $twig->addGlobal("session", $_SESSION);

                //              

                return $this->render('uosuosBundle:Default:home.html.twig',array('name' => $user->getFirstname(),
                    'u_id'=>$user->getId(),'role'=>$user->getRole(),'stud_emp_id'=>$stud_emp_id));
            } else {
                return $this->render('uosuosBundle:Default:uos.html.twig', array('error' => 'Incorrect UserID or Password'));
            }
        }
        return $this->render('uosuosBundle:Default:uos.html.twig');
    }

   

    private function createEditForm(Student $entity) {
        $session  = $this->get("session");
        $form = $this->createForm(new StudentType(), $entity, array(
            'action' => $this->generateUrl('student_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    public function homeAction(Request $request) {

        $session  = $this->get("session");
        
        return $this->render('uosuosBundle:Default:home.html.twig',  array(
            'name' => $session->get('name'),
            'u_id' => $session->get('id'),
            'role'=>$session->get('role'),
            'stud_emp_id'=>$session->get('stud_emp_id'),
            ));
    }
    
    public function hall_roomAction(Request $request) {
        $session  = $this->get("session");

        $hallname = $request->get('hallname');

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uosuosBundle:Room')->findAll();

        return $this->render('uosuosBundle:Room:index_hall.html.twig', array(
                    'entities' => $entities, 'hallname' => $hallname,
        ));
    }
    
    public function student_financeAction(Request $request) {
        $session  = $this->get("session");

        $studentid= $request->get('studentid');
        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uosuosBundle:Finance')->findAll();
        if(!$entities){
            throw $this->createNotFoundException('Unable to find entity.');
        }

        return $this->render('uosuosBundle:Finance:index_student.html.twig', array(
                    'entities' => $entities, 'studentid' => $studentid,
        ));
    }

}
