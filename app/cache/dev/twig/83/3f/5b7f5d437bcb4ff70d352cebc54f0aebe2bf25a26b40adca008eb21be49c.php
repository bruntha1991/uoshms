<?php

/* uosuosBundle:Employee:index.html.twig */
class __TwigTemplate_833f5b7f5d437bcb4ff70d352cebc54f0aebe2bf25a26b40adca008eb21be49c extends Twig_Template
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
                        <th>Employee Id</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Salary</th>



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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "employeeid"), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "salary"), "html", null, true);
            echo "</td>

                            <td>
                                <ul>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 39
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
        echo "                    </tbody>
                </table>

                <ul>
                    <li class=\"nav-header\">
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

    // line 58
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 59
        echo "
                <ul class=\"nav nav-list\">
                    <li  class=\"nav-header\" ><b>Home</b></li>

                    <li class=\"nav-header\">UOS Halls</li>
                    <li class=\"active\"><a  href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                    <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                    <li class=\"nav-header\">UOS Rooms</li>
                    <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                    <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                    <li class=\"nav-header\">UOS Student Management </li>
                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                    <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                    <li class=\"nav-header\">UOS Student Accomodation </li>
                    <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("occupy");
        echo "\">Accomodation</a></li>
                    <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("occupy_new");
        echo "\">Add Accomodation</a></li>

                    <li class=\"nav-header\">UOS Employee Management </li>
                    <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                    <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                    <li class=\"nav-header\">UOS Employee Positining </li>
                    <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("work");
        echo "\">Positions</a></li>
                    <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("work_new");
        echo "\">Add Position</a></li>

                    <li class=\"nav-header\">UOS Finance Details </li>
                    <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
                    <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Make A New Payment</a></li>

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
        return array (  195 => 89,  191 => 88,  185 => 85,  181 => 84,  175 => 81,  171 => 80,  165 => 77,  161 => 76,  155 => 73,  151 => 72,  145 => 69,  141 => 68,  135 => 65,  131 => 64,  124 => 59,  121 => 58,  111 => 51,  104 => 46,  91 => 39,  85 => 36,  77 => 31,  73 => 30,  69 => 29,  63 => 28,  60 => 27,  56 => 26,  32 => 4,  29 => 3,);
    }
}
