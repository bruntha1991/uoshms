<?php

/* uosuosBundle:Student:index.html.twig */
class __TwigTemplate_4fb34781ce294386ae90505e4e370c471ebd18055655dec14b4b3ff0b44fa2b7 extends Twig_Template
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
        echo "<div class=\"span6\">
    <div class=\"containerHome\" >
        <h1>Student list</h1>
        <script src=\"assets/js/jquery.tablesorter.min.js\"></script>
        <script >
            \$(function() {
                \$(\"table#sortTableExample\").tablesorter({sortList: [[1, 0]]});
            });
            </script>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Student Id </th>
                        <th>First Name </th>
                        <th>Last Name </th>
                        <th>Gender </th>
                        <th>Department </th>
                        <th>Year </th>
                        
                        
                    </tr>
                </thead>
                <tbody>
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "                        <tr>
                            <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "studentid"), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstname"), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastname"), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gender"), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "deptName"), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "year"), "html", null, true);
            echo "</td>
                            
                            <td>
                                <ul>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                                    </li>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uosuos_student_finance", array("studentid" => $this->getAttribute($this->getContext($context, "entity"), "studentid"))), "html", null, true);
            echo "\">Accounts</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </tbody>
                </table>
                <ul>
                    <li class=\"nav-header\">
                        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">
                            Create a new entry
                        </a>
                    </li>
                </ul>
    ";
    }

    // line 61
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 62
        echo "            <ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>
              
              <li class=\"nav-header\">UOS Halls</li>
              <li ><a  href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
              <li ><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>
              
              <li class=\"nav-header\">UOS Rooms</li>
              <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
              <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>
              
              <li class=\"nav-header\">UOS Student Management </li>
              <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
              <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>
              
              <li class=\"nav-header\">UOS Student Accomodation </li>
              <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("occupy");
        echo "\">Accomodation</a></li>
              <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("occupy_new");
        echo "\">Add Accomodation</a></li>
              
              <li class=\"nav-header\">UOS Employee Management </li>
              <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
              <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>
              
              <li class=\"nav-header\">UOS Employee Positining </li>
              <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
              <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>
              
            <li class=\"nav-header\">UOS Finance Details </li>
            <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
            <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Make A New Payment</a></li>
              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Student:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 91,  203 => 90,  197 => 87,  193 => 86,  187 => 83,  183 => 82,  177 => 79,  173 => 78,  167 => 75,  163 => 74,  157 => 71,  153 => 70,  147 => 67,  143 => 66,  137 => 62,  134 => 61,  124 => 54,  118 => 50,  106 => 44,  100 => 41,  94 => 38,  86 => 33,  82 => 32,  78 => 31,  74 => 30,  70 => 29,  64 => 28,  61 => 27,  57 => 26,  32 => 3,  29 => 2,);
    }
}
