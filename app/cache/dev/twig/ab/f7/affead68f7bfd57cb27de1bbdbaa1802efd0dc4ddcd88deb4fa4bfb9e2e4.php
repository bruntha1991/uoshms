<?php

/* uosuosBundle:Occupy:checkOutStudent.html.twig */
class __TwigTemplate_abf7affead68f7bfd57cb27de1bbdbaa1802efd0dc4ddcd88deb4fa4bfb9e2e4 extends Twig_Template
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
    <li class=\"nav-header\" ><a  href=\"";
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
    <li ><a href=\"";
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
    <li class=\"active\" ><a href=\"";
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
        return "uosuosBundle:Occupy:checkOutStudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 69,  186 => 68,  181 => 66,  176 => 65,  171 => 63,  167 => 62,  163 => 61,  159 => 59,  154 => 57,  150 => 56,  144 => 53,  140 => 52,  134 => 49,  130 => 48,  126 => 47,  123 => 46,  121 => 45,  118 => 44,  112 => 41,  108 => 40,  102 => 37,  98 => 36,  92 => 33,  88 => 32,  82 => 29,  78 => 28,  72 => 25,  68 => 24,  63 => 22,  58 => 20,  54 => 18,  51 => 17,  36 => 6,  32 => 4,  29 => 3,);
    }
}
