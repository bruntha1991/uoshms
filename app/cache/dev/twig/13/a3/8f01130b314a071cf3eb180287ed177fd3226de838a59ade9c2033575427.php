<?php

/* uosuosBundle:Employee:new.html.twig */
class __TwigTemplate_13a38f01130b314a071cf3eb180287ed177fd3226de838a59ade9c2033575427 extends Twig_Template
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
        echo "<div class=\"span10\">
            <div class=\"containerHome\" >
    <h1>Employee creation</h1>

    ";
        // line 8
        if (array_key_exists("error", $context)) {
            // line 9
            echo "    
    <h2> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
            echo "</h2>
    
    ";
        }
        // line 13
        echo "    
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
   <ul class=\"record_actions\">
    <li class=\"nav-header\">
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    // line 23
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 24
        echo "
<ul class=\"nav nav-list\">
                <li class=\"nav-header\"><b>Home</b></li>
              <li class=\"active\"><a href=\"http://localhost:8080/uoshms/web/app_dev.php/home\">Home</a></li>
              <li class=\"nav-header\">UOS Halls</li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/hall\">Halls</a></li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/hall/new\">Add Hall</a></li>
              <li><a href=\"#\">Link</a></li>
              <li class=\"nav-header\">UOS Rooms</li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/room\">Rooms</a></li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/room/new\">Add Room</a></li>
              <li class=\"nav-header\">UOS Student Management </li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/student\">Students</a></li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/student/new\">Add Student</a></li>
              <li class=\"nav-header\">UOS Student Accomodation </li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/occupy\">Accomodation</a></li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/occupy/new\">Add Accomodation</a></li>
              <li class=\"nav-header\">UOS Employee Management </li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/employee\">Employee</a></li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/employee/new\">Add Employee</a></li>
              <li class=\"nav-header\">UOS Employee Positining </li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/work\">Positions</a></li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/work/new\">Add Position</a></li>

            <li class=\"nav-header\">UOS Accounts </li>
            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Account Details</a></li>
            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Add Account</a></li>
              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Employee:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 50,  98 => 49,  71 => 24,  68 => 23,  58 => 17,  52 => 14,  49 => 13,  43 => 10,  40 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
