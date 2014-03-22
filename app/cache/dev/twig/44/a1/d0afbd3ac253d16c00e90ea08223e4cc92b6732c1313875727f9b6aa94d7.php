<?php

/* uosuosBundle:Student:show.html.twig */
class __TwigTemplate_44a1d0afbd3ac253d16c00e90ea08223e4cc92b6732c1313875727f9b6aa94d7 extends Twig_Template
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
        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Student Id</th>
                    <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "studentid"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>First Name</th>
                    <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstname"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Last Name</th>
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
                    <th>Dept Name</th>
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
                
            </tbody>
        </table>
        <ul class=\"record_actions\">
            <li class=\"nav-header\">
                <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">
                    Back to the list
                </a>
            </li>
            <li class=\"nav-header\">
                <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                    Edit
                </a>
            </li>
            <li class=\"nav-header\">";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
        </ul>
";
    }

    // line 49
    public function block_sideMenu($context, array $blocks = array())
    {
        echo "       
        <ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>
              
              <li class=\"nav-header\">UOS Halls</li>
              <li ><a  href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
              <li ><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>
              
              <li class=\"nav-header\">UOS Rooms</li>
              <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
              <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>
              
              <li class=\"nav-header\">UOS Student Management </li>
              <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
              <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>
              
              <li class=\"nav-header\">UOS Student Accomodation </li>
              <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("occupy");
        echo "\">Accomodation</a></li>
              <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("occupy_new");
        echo "\">Add Accomodation</a></li>
              
              <li class=\"nav-header\">UOS Employee Management </li>
              <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
              <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>
              
              <li class=\"nav-header\">UOS Employee Positining </li>
              <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
              <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>
              
            <li class=\"nav-header\">UOS Finance Details </li>
            <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
            <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Make A New Payment</a></li>
              
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
        return array (  181 => 79,  177 => 78,  171 => 75,  167 => 74,  161 => 71,  157 => 70,  151 => 67,  147 => 66,  141 => 63,  137 => 62,  131 => 59,  127 => 58,  121 => 55,  117 => 54,  108 => 49,  101 => 46,  94 => 42,  86 => 37,  76 => 30,  69 => 26,  62 => 22,  55 => 18,  48 => 14,  41 => 10,  32 => 3,  29 => 2,);
    }
}
