<?php

/* uosuosBundle:Occupy:checkOutStudent.html.twig */
class __TwigTemplate_848d72e2bd6a03646888f9cc50bb668c07fb834b92480e9457242e444ce6b6e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'sideMenu' => array($this, 'block_sideMenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"span6\">
    <div class=\"containerHome\" >
        <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("checkOutStudent");
        echo "\" data-validate=\"parsley\">
        <h1>Student Check Out</h1>    
        <label>Student ID</label>
        <input type=\"text\" id=\"studentid\" name=\"studentid\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
        <div>
            <button class=\"btn btn-primary\" type=\"submit\" >Check Out</button>
        </div>
        </form>


    ";
    }

    // line 17
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 18
        echo "
        <ul class=\"nav nav-list\">
            <li  class=\"nav-header\" ><b>Home</b></li>

            <li class=\"nav-header\">UOS Halls</li>
            <li ><a  href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
            <li ><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

            <li class=\"nav-header\">UOS Rooms</li>
            <li ><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
            <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

            <li class=\"nav-header\">UOS Student Management </li>
            <li class=\"active\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

            <li class=\"nav-header\">UOS Student Accomodation </li>
            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

            <li class=\"nav-header\">UOS Employee Management </li>
            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

            <li class=\"nav-header\">UOS Employee Positining </li>
            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
            <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>

            <li class=\"nav-header\">UOS Accounts </li>
            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Account Details</a></li>
            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Account</a></li>

        </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Occupy:checkOutStudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  121 => 47,  115 => 44,  111 => 43,  105 => 40,  101 => 39,  95 => 36,  91 => 35,  85 => 32,  81 => 31,  75 => 28,  71 => 27,  65 => 24,  61 => 23,  54 => 18,  51 => 17,  36 => 6,  32 => 4,  29 => 3,);
    }
}
