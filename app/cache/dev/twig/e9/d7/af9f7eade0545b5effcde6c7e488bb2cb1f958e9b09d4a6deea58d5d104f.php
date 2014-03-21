<?php

/* uosuosBundle:Occupy:roomsearch.html.twig */
class __TwigTemplate_e9d7af9f7eade0545b5effcde6c7e488bb2cb1f958e9b09d4a6deea58d5d104f extends Twig_Template
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
        <h1>Rooms Available</h1>
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
                        <th>Hall Name</th>
                        <th>Monthly cost</th>                
                    </tr>
                </thead>
                <tbody>

        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "                    <tr>
                        <td ><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "roomno"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hallname"), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "monthlycost"), "html", null, true);
            echo "</td>
                        <td><button lass=\"btn btn-large btn-primary\" type=\"submit\">Check IN</button></td>

                    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </tbody>
            </table>

            <ul>
                <li class=\"nav-header\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">

                    </a>
                </li>
            </ul>
    ";
    }

    // line 43
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 44
        echo "
            <ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>

                <li class=\"nav-header\">UOS Halls</li>
                <li ><a  href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                <li ><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                <li class=\"nav-header\">UOS Rooms</li>
                <li ><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                <li class=\"nav-header\">UOS Student Management </li>
                <li class=\"active\"><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                <li class=\"nav-header\">UOS Student Accomodation </li>
                <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
                <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

                <li class=\"nav-header\">UOS Employee Management </li>
                <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                <li class=\"nav-header\">UOS Employee Positining </li>
                <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
                <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>

                <li class=\"nav-header\">UOS Accounts </li>
                <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Account Details</a></li>
                <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Account</a></li>

            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Occupy:roomsearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 74,  168 => 73,  162 => 70,  158 => 69,  152 => 66,  148 => 65,  142 => 62,  138 => 61,  132 => 58,  128 => 57,  122 => 54,  118 => 53,  112 => 50,  108 => 49,  101 => 44,  98 => 43,  88 => 37,  81 => 32,  70 => 27,  66 => 26,  60 => 25,  57 => 24,  53 => 23,  32 => 4,  29 => 3,);
    }
}
