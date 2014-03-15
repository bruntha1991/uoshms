<?php

/* uosuosBundle:Employee:index.html.twig */
class __TwigTemplate_42f89b0ba1531139667d4247a5dd78066ad154d54a0b3bbed77e114b3cf8c061 extends Twig_Template
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
        echo "<div class=\"span8\">
    <div class=\"containerHome\" >
   <h1>Employee list</h1>
<script src=\"assets/js/jquery.tablesorter.min.js\"></script>
        <script >
            \$(function() {
                \$(\"table#sortTableExample\").tablesorter({sortList: [[1, 0]]});
            });
        </script>
    

    <table class=\"table\">
        <thead>
            <tr>
                <th>Employeeid</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Position</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "employeeid"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "salary"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    // line 57
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 58
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
        return "uosuosBundle:Employee:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 58,  124 => 57,  114 => 51,  107 => 46,  95 => 40,  89 => 37,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  64 => 29,  61 => 28,  57 => 27,  32 => 4,  29 => 3,);
    }
}
