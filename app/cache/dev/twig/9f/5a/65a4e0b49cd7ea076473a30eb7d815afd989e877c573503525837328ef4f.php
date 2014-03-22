<?php

/* uosuosBundle:Room:index.html.twig */
class __TwigTemplate_9f5a65a4e0b49cd7ea076473a30eb7d815afd989e877c573503525837328ef4f extends Twig_Template
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
                        <th>Hall name</th>
                        <th>Room Number</th>
                        <th>Type</th>
                        <th>Monthly cost</th>
                        <th>Id</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "                        <tr>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hall"), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "roomno"), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type"), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "monthlycost"), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 38
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
        // line 44
        echo "                    </tbody>
                </table>

                <ul>
                    <li class=\"nav-header\">
                        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">
                            Create a new entry
                        </a>
                    </li>
                </ul>
    ";
    }

    // line 55
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 56
        echo "
                <ul class=\"nav nav-list\">
                    <li  class=\"nav-header\" ><b>Home</b></li>

                    <li class=\"nav-header\">UOS Halls</li>
                    <li ><a  href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                    <li ><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                    <li class=\"nav-header\">UOS Rooms</li>
                    <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                    <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                    <li class=\"nav-header\">UOS Student Management </li>
                    <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                    <li class=\"nav-header\">UOS Student Accomodation </li>
                    <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
                    <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

                    <li class=\"nav-header\">UOS Employee Management </li>
                    <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                    <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                    <li class=\"nav-header\">UOS Employee Positining </li>
                    <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
                    <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>

                    <li class=\"nav-header\">UOS Finance Details </li>
                    <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
                    <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Make A New Payment</a></li>

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
        return array (  196 => 86,  192 => 85,  186 => 82,  182 => 81,  176 => 78,  172 => 77,  166 => 74,  162 => 73,  156 => 70,  152 => 69,  146 => 66,  142 => 65,  136 => 62,  132 => 61,  125 => 56,  122 => 55,  112 => 49,  105 => 44,  93 => 38,  87 => 35,  80 => 31,  76 => 30,  72 => 29,  66 => 28,  62 => 27,  59 => 26,  55 => 25,  32 => 4,  29 => 3,);
    }
}
