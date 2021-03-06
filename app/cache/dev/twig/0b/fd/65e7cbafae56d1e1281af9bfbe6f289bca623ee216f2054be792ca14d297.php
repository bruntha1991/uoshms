<?php

/* uosuosBundle:Default:home.html.twig */
class __TwigTemplate_0bfd65e7cbafae56d1e1281af9bfbe6f289bca623ee216f2054be792ca14d297 extends Twig_Template
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
        echo "


        ";
    }

    // line 9
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 10
        echo "
<ul class=\"nav nav-list\">
    <li  class=\"active\" class=\"nav-header\" ><a  href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uosuos_home");
        echo "\"><b>Home</b></a></li>

";
        // line 14
        if (($this->getContext($context, "role") == "SuperUser")) {
            echo "     
    <li class=\"nav-header\">UOS Halls</li>
    <li ><a  href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("hall");
            echo "\">View All </a></li>
    <li ><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("hall_new");
            echo "\">Add Hall</a></li>

    <li class=\"nav-header\">UOS Rooms</li>
    <li ><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("room");
            echo "\">View All</a></li>
    <li><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("room_new");
            echo "\">Add Room</a></li>
    
    <li class=\"nav-header\">UOS Student Management </li>
    <li ><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("student");
            echo "\">View All Students</a></li>
    <li><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("student_new");
            echo "\">Add Student</a></li>
    
    <li class=\"nav-header\">UOS Employee Management </li>
    <li><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("employee");
            echo "\">Employee</a></li>
    <li><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("employee_new");
            echo "\">Add Employee</a></li>
    
    <li class=\"nav-header\">UOS Managers </li>
    <li><a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("users");
            echo "\">View Managers</a></li>
    <li><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("users_new");
            echo "\">Add Manager</a></li>
    
";
        }
        // line 36
        echo "    
";
        // line 37
        if (($this->getContext($context, "role") == "Manager")) {
            // line 38
            echo "    <li class=\"nav-header\">UOS Student Accomodation </li>
    <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("occupy");
            echo "\">Accomodation</a></li>
    <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("occupy_new");
            echo "\">Check IN</a></li>
    <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("checkOut");
            echo "\">Check OUT</a></li>

    <li class=\"nav-header\">UOS Employee Positining </li>
    <li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("work");
            echo "\">Positions</a></li>
    <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("work_new");
            echo "\">Add Position</a></li>

    <li class=\"nav-header\">UOS Finance Details </li>
    <li><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("finance");
            echo "\">Finance Details</a></li>
    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("finance_new");
            echo "\">Make A New Payment</a></li>
";
        }
        // line 51
        echo "    
    <li class=\"nav-header\">User Settings </li>
 ";
        // line 53
        if (($this->getContext($context, "role") == "Student")) {
            echo "   
    <li><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getContext($context, "stud_emp_id"))), "html", null, true);
            echo "\">Edit Personal Infomation</a></li>
    <li><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_info", array("id" => $this->getContext($context, "u_id"))), "html", null, true);
            echo "\">View Payment Details</a></li>
 ";
        }
        // line 57
        echo " ";
        if (($this->getContext($context, "role") == "Employee")) {
            echo "   
    <li><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_edit", array("id" => $this->getContext($context, "stud_emp_id"))), "html", null, true);
            echo "\">Edit Personal Infomation</a></li>
 ";
        }
        // line 60
        echo "
    <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getContext($context, "u_id"))), "html", null, true);
        echo "\">Change Password</a></li>
    
    
</ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 61,  174 => 60,  169 => 58,  164 => 57,  159 => 55,  155 => 54,  151 => 53,  147 => 51,  142 => 49,  138 => 48,  132 => 45,  128 => 44,  122 => 41,  118 => 40,  114 => 39,  111 => 38,  109 => 37,  106 => 36,  100 => 33,  96 => 32,  90 => 29,  86 => 28,  80 => 25,  76 => 24,  70 => 21,  66 => 20,  60 => 17,  56 => 16,  51 => 14,  46 => 12,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
