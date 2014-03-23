<?php

/* uosuosBundle:Finance:new.html.twig */
class __TwigTemplate_bd741c18c0ccc85aa07c37df283ca31db1def5bcf8e39bfaee34fbfd8fa26bfd extends Twig_Template
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
        <h1>Finance creation</h1>

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
        // line 18
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">
                    Back to the list
                </a>
            </li>
        </ul>
";
    }

    // line 26
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 27
        echo "
<ul class=\"nav nav-list\">
    <li class=\"nav-header\" ><a  href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("uosuos_home");
        echo "\"><b>Home</b></a></li>

";
        // line 31
        if (($this->getContext($context, "role") == "SuperUser")) {
            echo "     
    <li class=\"nav-header\">UOS Halls</li>
    <li ><a  href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("hall");
            echo "\">View All </a></li>
    <li ><a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("hall_new");
            echo "\">Add Hall</a></li>

    <li class=\"nav-header\">UOS Rooms</li>
    <li ><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("room");
            echo "\">View All</a></li>
    <li><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("room_new");
            echo "\">Add Room</a></li>
    
    <li class=\"nav-header\">UOS Student Management </li>
    <li ><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("student");
            echo "\">View All Students</a></li>
    <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("student_new");
            echo "\">Add Student</a></li>
    
    <li class=\"nav-header\">UOS Employee Management </li>
    <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("employee");
            echo "\">Employee</a></li>
    <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("employee_new");
            echo "\">Add Employee</a></li>
    
    <li class=\"nav-header\">UOS Managers </li>
    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("employee");
            echo "\">View Managers</a></li>
    <li><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("employee_new");
            echo "\">Add Manager</a></li>
    
";
        }
        // line 53
        echo "    
";
        // line 54
        if (($this->getContext($context, "role") == "Manager")) {
            // line 55
            echo "    <li class=\"nav-header\">UOS Student Accomodation </li>
    <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("occupy");
            echo "\">Accomodation</a></li>
    <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("occupy_new");
            echo "\">Check IN</a></li>
    <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("checkOut");
            echo "\">Check OUT</a></li>

    <li class=\"nav-header\">UOS Employee Positining </li>
    <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("work");
            echo "\">Positions</a></li>
    <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("work_new");
            echo "\">Add Position</a></li>

    <li class=\"nav-header\">UOS Finance Details </li>
    <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("finance");
            echo "\">Finance Details</a></li>
    <li class=\"active\" ><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("finance_new");
            echo "\">Make A New Payment</a></li>
";
        }
        // line 68
        echo "    
    <li class=\"nav-header\">User Settings </li>
 ";
        // line 70
        if (($this->getContext($context, "role") == "Student")) {
            echo "   
    <li><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getContext($context, "stud_emp_id"))), "html", null, true);
            echo "\">Edit Personal Infomation</a></li>
    <li><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_info", array("id" => $this->getContext($context, "u_id"))), "html", null, true);
            echo "\">View Payment Details</a></li>
 ";
        }
        // line 74
        echo " ";
        if (($this->getContext($context, "role") == "Employee")) {
            echo "   
    <li><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_edit", array("id" => $this->getContext($context, "stud_emp_id"))), "html", null, true);
            echo "\">Edit Personal Infomation</a></li>
 ";
        }
        // line 77
        echo "
    <li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getContext($context, "u_id"))), "html", null, true);
        echo "\">Change Password</a></li>
    
    
</ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Finance:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 78,  204 => 77,  199 => 75,  194 => 74,  189 => 72,  185 => 71,  181 => 70,  177 => 68,  172 => 66,  168 => 65,  162 => 62,  158 => 61,  152 => 58,  148 => 57,  144 => 56,  141 => 55,  139 => 54,  136 => 53,  130 => 50,  126 => 49,  120 => 46,  116 => 45,  110 => 42,  106 => 41,  100 => 38,  96 => 37,  90 => 34,  86 => 33,  81 => 31,  76 => 29,  72 => 27,  69 => 26,  59 => 18,  52 => 14,  49 => 13,  43 => 10,  40 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
