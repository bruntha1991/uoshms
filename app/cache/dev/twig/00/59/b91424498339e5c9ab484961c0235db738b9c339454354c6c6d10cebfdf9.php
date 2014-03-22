<?php

/* uosuosBundle:Work:index.html.twig */
class __TwigTemplate_0059b91424498339e5c9ab484961c0235db738b9c339454354c6c6d10cebfdf9 extends Twig_Template
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

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"span6\">
    <div class=\"containerHome\" >
    <h1>Work list</h1>
<script src=\"assets/js/jquery.tablesorter.min.js\"></script>
        <script >
            \$(function() {
                \$(\"table#sortTableExample\").tablesorter({sortList: [[1, 0]]});
            });
        </script>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Employe Name</th>
                <th>Date</th>
                <th>Hall Name</th>
                
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
                            <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("work_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "employee"), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "m/d/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hall"), "html", null, true);
            echo "</td>

                            <td>
                                <ul>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("work_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("work_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("work_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    // line 56
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 57
        echo "
                <ul class=\"nav nav-list\">
                    <li  class=\"nav-header\" ><b>Home</b></li>

                    <li class=\"nav-header\">UOS Halls</li>
                    <li class=\"active\"><a  href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                    <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                    <li class=\"nav-header\">UOS Rooms</li>
                    <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                    <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                    <li class=\"nav-header\">UOS Student Management </li>
                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                    <li class=\"nav-header\">UOS Student Accomodation </li>
                    <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("occupy");
        echo "\">Accomodation</a></li>
                    <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("occupy_new");
        echo "\">Add Accomodation</a></li>

                    <li class=\"nav-header\">UOS Employee Management </li>
                    <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                    <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                    <li class=\"nav-header\">UOS Employee Positining </li>
                    <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("work");
        echo "\">Positions</a></li>
                    <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("work_new");
        echo "\">Add Position</a></li>

                    <li class=\"nav-header\">UOS Finance Details </li>
                    <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
                    <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Make A New Payment</a></li>

                </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Work:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 87,  185 => 86,  179 => 83,  175 => 82,  169 => 79,  165 => 78,  159 => 75,  155 => 74,  149 => 71,  145 => 70,  139 => 67,  135 => 66,  129 => 63,  125 => 62,  118 => 57,  115 => 56,  105 => 49,  98 => 44,  85 => 37,  79 => 34,  71 => 29,  67 => 28,  61 => 27,  58 => 26,  54 => 25,  32 => 5,  29 => 4,);
    }
}
