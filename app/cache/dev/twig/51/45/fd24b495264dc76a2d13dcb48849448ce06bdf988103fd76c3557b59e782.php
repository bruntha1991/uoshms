<?php

/* uosuosBundle:Student:show.html.twig */
class __TwigTemplate_5145fd24b495264dc76a2d13dcb48849448ce06bdf988103fd76c3557b59e782 extends Twig_Template
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
        echo "<div class=\"span2\">
    <div class=\"containerHome\" >
        <h1>Student</h1>
        <table class=\"record_properties\">
            <tbody>
                <tr>
                    <th>Studentid</th>
                    <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "studentid"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Firstname</th>
                    <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstname"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Lastname</th>
                    <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastname"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gender"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Deptname</th>
                    <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "deptName"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Year</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "year"), "m/d/Y"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
        <ul class=\"record_actions\">
            <li class=\"nav-header\">
                <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">
                    Back to the list
                </a>
            </li>
            <li class=\"nav-header\">
                <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                    Edit
                </a>
            </li>
            <li class=\"nav-header\">";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
        </ul>
";
    }

    // line 52
    public function block_sideMenu($context, array $blocks = array())
    {
        echo "       
        <ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>
              
              <li class=\"nav-header\">UOS Halls</li>
              <li ><a  href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
              <li ><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>
              
              <li class=\"nav-header\">UOS Rooms</li>
              <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
              <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>
              
              <li class=\"nav-header\">UOS Student Management </li>
              <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
              <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>
              
              <li class=\"nav-header\">UOS Student Accomodation </li>
              <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("occupy");
        echo "\">Accomodation</a></li>
              <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("occupy_new");
        echo "\">Add Accomodation</a></li>
              
              <li class=\"nav-header\">UOS Employee Management </li>
              <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
              <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>
              
              <li class=\"nav-header\">UOS Employee Positining </li>
              <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
              <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>
              
              <li class=\"nav-header\">UOS Accounts </li>
              <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Account Details</a></li>
              <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Account</a></li>
              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Student:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 82,  183 => 81,  177 => 78,  173 => 77,  167 => 74,  163 => 73,  157 => 70,  153 => 69,  147 => 66,  143 => 65,  137 => 62,  133 => 61,  127 => 58,  123 => 57,  114 => 52,  107 => 49,  100 => 45,  92 => 40,  83 => 34,  76 => 30,  69 => 26,  62 => 22,  55 => 18,  48 => 14,  41 => 10,  32 => 3,  29 => 2,);
    }
}
