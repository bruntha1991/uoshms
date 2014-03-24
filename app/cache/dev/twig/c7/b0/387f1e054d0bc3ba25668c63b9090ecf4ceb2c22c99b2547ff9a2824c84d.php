<?php

/* uosuosBundle:Student:edit.html.twig */
class __TwigTemplate_c7b0387f1e054d0bc3ba25668c63b9090ecf4ceb2c22c99b2547ff9a2824c84d extends Twig_Template
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

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"span10\">
    <div class=\"containerHome\" >
        <h1>Student edit</h1>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
        echo "
        <ul class=\"table\">
            <li class=\"nav-header\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">
                    Back to the list
                </a>
            </li>
            <li class=\"nav-header\">";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
        </ul>
";
    }

    // line 17
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 18
        echo "
<ul class=\"nav nav-list\">
    <li class=\"nav-header\"><a  href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("uosuos_home");
        echo "\"><b>Home</b></a></li>

";
        // line 22
        if (($this->getContext($context, "role") == "SuperUser")) {
            echo "     
    <li class=\"nav-header\">UOS Halls</li>
    <li ><a  href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("hall");
            echo "\">View All </a></li>
    <li ><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("hall_new");
            echo "\">Add Hall</a></li>

    <li class=\"nav-header\">UOS Rooms</li>
    <li ><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("room");
            echo "\">View All</a></li>
    <li><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("room_new");
            echo "\">Add Room</a></li>
    
    <li class=\"nav-header\">UOS Student Management </li>
    <li  class=\"active\" ><a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("student");
            echo "\">View All Students</a></li>
    <li><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("student_new");
            echo "\">Add Student</a></li>
    
    <li class=\"nav-header\">UOS Employee Management </li>
    <li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("employee");
            echo "\">Employee</a></li>
    <li><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("employee_new");
            echo "\">Add Employee</a></li>
    
    <li class=\"nav-header\">UOS Managers </li>
    <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("employee");
            echo "\">View Managers</a></li>
    <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("employee_new");
            echo "\">Add Manager</a></li>
    
";
        }
        // line 44
        echo "    
";
        // line 45
        if (($this->getContext($context, "role") == "Manager")) {
            // line 46
            echo "    <li class=\"nav-header\">UOS Student Accomodation </li>
    <li><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("occupy");
            echo "\">Accomodation</a></li>
    <li><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("occupy_new");
            echo "\">Check IN</a></li>
    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("checkOut");
            echo "\">Check OUT</a></li>

    <li class=\"nav-header\">UOS Employee Positining </li>
    <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("work");
            echo "\">Positions</a></li>
    <li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("work_new");
            echo "\">Add Position</a></li>

    <li class=\"nav-header\">UOS Finance Details </li>
    <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("finance");
            echo "\">Finance Details</a></li>
    <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("finance_new");
            echo "\">Make A New Payment</a></li>
";
        }
        // line 59
        echo "    
    <li class=\"nav-header\">User Settings </li>
 ";
        // line 61
        if (($this->getContext($context, "role") == "Student")) {
            echo "   
    <li><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getContext($context, "stud_emp_id"))), "html", null, true);
            echo "\">Edit Personal Infomation</a></li>
    <li><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_info", array("id" => $this->getContext($context, "u_id"))), "html", null, true);
            echo "\">View Payment Details</a></li>
 ";
        }
        // line 65
        echo " ";
        if (($this->getContext($context, "role") == "Employee")) {
            echo "   
    <li><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_edit", array("id" => $this->getContext($context, "stud_emp_id"))), "html", null, true);
            echo "\">Edit Personal Infomation</a></li>
 ";
        }
        // line 68
        echo "
    <li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getContext($context, "u_id"))), "html", null, true);
        echo "\">Change Password</a></li>
    
    
</ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Student:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 69,  192 => 68,  187 => 66,  182 => 65,  177 => 63,  173 => 62,  169 => 61,  165 => 59,  160 => 57,  156 => 56,  150 => 53,  146 => 52,  140 => 49,  136 => 48,  132 => 47,  129 => 46,  127 => 45,  124 => 44,  118 => 41,  114 => 40,  108 => 37,  104 => 36,  98 => 33,  94 => 32,  88 => 29,  84 => 28,  78 => 25,  74 => 24,  69 => 22,  64 => 20,  60 => 18,  57 => 17,  50 => 13,  43 => 9,  37 => 6,  32 => 3,  29 => 2,);
    }
}
