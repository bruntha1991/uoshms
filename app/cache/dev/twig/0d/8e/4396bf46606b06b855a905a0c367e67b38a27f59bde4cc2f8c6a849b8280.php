<?php

/* uosuosBundle:Room:index.html.twig */
class __TwigTemplate_0d8e4396bf46606b06b855a905a0c367e67b38a27f59bde4cc2f8c6a849b8280 extends Twig_Template
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
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "            
            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "roomno"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "monthlycost"), "html", null, true);
            echo "</td>
                
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hall"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li class=\"nav-header\">
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li class=\"nav-header\">
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        // line 43
        echo "        </tbody>
    </table>

        <ul>
        <li class=\"nav-header\">
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    // line 54
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 55
        echo "
<ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>
              
              <li class=\"nav-header\">UOS Halls</li>
              <li ><a  href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
              <li ><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>
              
              <li class=\"nav-header\">UOS Rooms</li>
              <li class=\"active\"><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
              <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>
              
              <li class=\"nav-header\">UOS Student Management </li>
              <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
              <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>
              
              <li class=\"nav-header\">UOS Student Accomodation </li>
              <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
              <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>
              
              <li class=\"nav-header\">UOS Employee Management </li>
              <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
              <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>
              
              <li class=\"nav-header\">UOS Employee Positining </li>
              <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
              <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>
              
              <li class=\"nav-header\">UOS Accounts </li>
              <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Account Details</a></li>
              <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Account</a></li>
              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Room:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 85,  188 => 84,  182 => 81,  178 => 80,  172 => 77,  168 => 76,  162 => 73,  158 => 72,  152 => 69,  148 => 68,  142 => 65,  138 => 64,  132 => 61,  128 => 60,  121 => 55,  118 => 54,  108 => 48,  101 => 43,  89 => 37,  83 => 34,  76 => 30,  71 => 28,  67 => 27,  61 => 26,  54 => 24,  32 => 4,  29 => 3,);
    }
}
