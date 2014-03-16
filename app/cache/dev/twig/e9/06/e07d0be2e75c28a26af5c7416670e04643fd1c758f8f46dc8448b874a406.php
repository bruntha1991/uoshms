<?php

/* uosuosBundle:Room:index_hall.html.twig */
class __TwigTemplate_e906e07d0be2e75c28a26af5c7416670e04643fd1c758f8f46dc8448b874a406 extends Twig_Template
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
    <h1>Room list</h1>
<script src=\"assets/js/jquery.tablesorter.min.js\"></script>
        <script >
            \$(function() {
                \$(\"table#sortTableExample\").tablesorter({sortList: [[1, 0]]});
            });
        </script>
        <table class=\"table\">
        <thead>
            <tr>
                <th>Room Number</th>
                <th>Type</th>
                <th>Monthly cost</th>
                
                <th>Hall Name</th>
                
            </tr>
        </thead>
        <tbody>
            
           ";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "hallname"), "html", null, true);
        echo " 
            
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "            ";
            if (($this->getAttribute($this->getContext($context, "entity"), "hall") == $this->getContext($context, "hallname"))) {
                // line 30
                echo "            <tr>
                <td><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "roomno"), "html", null, true);
                echo "</a></td>
                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type"), "html", null, true);
                echo "</td>
                <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "monthlycost"), "html", null, true);
                echo "</td>
                
                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hall"), "html", null, true);
                echo "</td>
                <td>
                <ul>
                    <li class=\"nav-header\">
                        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">show</a>
                    </li>
                    <li class=\"nav-header\">
                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
            ";
            }
            // line 48
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

        <ul>
        <li class=\"nav-header\">
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    // line 60
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 61
        echo "
<ul class=\"nav nav-list\">
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
              <li ><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
              <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>
              
              <li class=\"nav-header\">UOS Student Management </li>
              <li class=\"active\"><a href=\"";
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
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
              <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("student");
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
              
              <li class=\"nav-header\">UOS Accounts </li>
              <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Account Details</a></li>
              <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Account</a></li>
              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Room:index_hall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 91,  201 => 90,  195 => 87,  191 => 86,  185 => 83,  181 => 82,  175 => 79,  171 => 78,  165 => 75,  161 => 74,  155 => 71,  151 => 70,  145 => 67,  141 => 66,  134 => 61,  131 => 60,  121 => 54,  114 => 49,  108 => 48,  99 => 42,  93 => 39,  86 => 35,  81 => 33,  77 => 32,  71 => 31,  68 => 30,  65 => 29,  61 => 28,  56 => 26,  32 => 4,  29 => 3,);
    }
}
