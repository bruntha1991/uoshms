<?php

/* uosuosBundle:Users:new.html.twig */
class __TwigTemplate_d4cec8e6ac00fb61ba9b0d4e725fc8dec76d8b67dcbf1f4c5c9671b553dd8138 extends Twig_Template
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
    <h1>Add Manager</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li class=\"nav-header\">
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    // line 19
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 20
        echo "
<ul class=\"nav nav-list\">
    <li  class=\"active\" class=\"nav-header\" ><b>Home</b></li>

";
        // line 24
        if (($this->getContext($context, "role") == "SuperUser")) {
            echo "     
    <li class=\"nav-header\">UOS Halls</li>
    <li ><a  href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("hall");
            echo "\">View All </a></li>
    <li ><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("hall_new");
            echo "\">Add Hall</a></li>

    <li class=\"nav-header\">UOS Rooms</li>
    <li ><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("room");
            echo "\">View All</a></li>
    <li><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("room_new");
            echo "\">Add Room</a></li>
    
    <li class=\"nav-header\">UOS Student Management </li>
    <li ><a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("student");
            echo "\">View All Students</a></li>
    <li><a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("student_new");
            echo "\">Add Student</a></li>
    
    <li class=\"nav-header\">UOS Employee Management </li>
    <li><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("employee");
            echo "\">Employee</a></li>
    <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("employee_new");
            echo "\">Add Employee</a></li>
    
    <li class=\"nav-header\">UOS Managers </li>
    <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("employee");
            echo "\">View Managers</a></li>
    <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("employee_new");
            echo "\">Add Manager</a></li>
    
";
        }
        // line 46
        echo "    
";
        // line 47
        if (($this->getContext($context, "role") == "Manager")) {
            // line 48
            echo "    <li class=\"nav-header\">UOS Student Accomodation </li>
    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("occupy");
            echo "\">Accomodation</a></li>
    <li><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("occupy_new");
            echo "\">Check IN</a></li>
    <li><a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("checkOut");
            echo "\">Check OUT</a></li>

    <li class=\"nav-header\">UOS Employee Positining </li>
    <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("work");
            echo "\">Positions</a></li>
    <li><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("work_new");
            echo "\">Add Position</a></li>

    <li class=\"nav-header\">UOS Finance Details </li>
    <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("finance");
            echo "\">Finance Details</a></li>
    <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("finance_new");
            echo "\">Make A New Payment</a></li>
";
        }
        // line 61
        echo "    
    <li class=\"nav-header\">User Settings </li>
 ";
        // line 63
        if (($this->getContext($context, "role") == "Student")) {
            echo "   
    <li><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getContext($context, "stud_emp_id"))), "html", null, true);
            echo "\">Edit Personal Infomation</a></li>
    <li><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_info", array("id" => $this->getContext($context, "u_id"))), "html", null, true);
            echo "\">View Payment Details</a></li>
 ";
        }
        // line 67
        echo " ";
        if (($this->getContext($context, "role") == "Employee")) {
            echo "   
    <li><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_edit", array("id" => $this->getContext($context, "stud_emp_id"))), "html", null, true);
            echo "\">Edit Personal Infomation</a></li>
 ";
        }
        // line 70
        echo "
    <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getContext($context, "u_id"))), "html", null, true);
        echo "\">Change Password</a></li>
    
    
</ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Users:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 71,  187 => 70,  182 => 68,  177 => 67,  172 => 65,  168 => 64,  164 => 63,  160 => 61,  155 => 59,  151 => 58,  145 => 55,  141 => 54,  135 => 51,  131 => 50,  127 => 49,  124 => 48,  122 => 47,  119 => 46,  113 => 43,  109 => 42,  103 => 39,  99 => 38,  93 => 35,  89 => 34,  83 => 31,  79 => 30,  73 => 27,  69 => 26,  64 => 24,  58 => 20,  55 => 19,  45 => 12,  38 => 8,  32 => 4,  29 => 3,);
    }
}
