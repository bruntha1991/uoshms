<?php

/* uosuosBundle:Work:show.html.twig */
class __TwigTemplate_ac4ebfdcb005801c37ddfd57763a92ad91552e044aea551e6f1461adba4dc8e7 extends Twig_Template
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
        // line 5
        echo "<div class=\"span2\">
            <div class=\"containerHome\" >
    <h1>Work</h1>

    <table class=\"record_properties\">
        <tbody>
             <tr>
                <th>Employee Name</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "employee"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "m/d/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("work");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("work_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    // line 41
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 42
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
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/finance\">Account Details</a></li>
              <li><a href=\"http://localhost:8080/uoshms/web/app_dev.php/finance/new\">Add Account</a></li>
              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Work:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 42,  88 => 41,  81 => 37,  74 => 33,  66 => 28,  56 => 21,  49 => 17,  42 => 13,  32 => 5,  29 => 3,);
    }
}
