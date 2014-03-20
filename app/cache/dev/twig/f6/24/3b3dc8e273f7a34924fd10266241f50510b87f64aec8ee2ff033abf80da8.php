<?php

/* uosuosBundle:Finance:index.html.twig */
class __TwigTemplate_f6243b3dc8e273f7a34924fd10266241f50510b87f64aec8ee2ff033abf80da8 extends Twig_Template
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
        <h1>Finance list</h1>
        <script src=\"assets/js/jquery.tablesorter.min.js\"></script>
        <script >
            \$(function() {
                \$(\"table#sortTableExample\").tablesorter({sortList: [[1, 0]]});
            });
            </script>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Studentno</th>
                        <th>Balance</th>
                        <th>Id</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "                        <tr>
                            <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "student"), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "balance"), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        // line 41
        echo "                    </tbody>
                </table>

                <ul>
                    <li class=\"nav-header\">
                        <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">
                            Create a new entry
                        </a>
                    </li>
                </ul>
    ";
    }

    // line 52
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 53
        echo "
                <ul class=\"nav nav-list\">
                    <li  class=\"nav-header\" ><b>Home</b></li>

                    <li class=\"nav-header\">UOS Halls</li>
                    <li class=\"active\"><a  href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                    <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                    <li class=\"nav-header\">UOS Rooms</li>
                    <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                    <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                    <li class=\"nav-header\">UOS Student Management </li>
                    <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                    <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                    <li class=\"nav-header\">UOS Student Accomodation </li>
                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

                    <li class=\"nav-header\">UOS Employee Management </li>
                    <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                    <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                    <li class=\"nav-header\">UOS Employee Positining </li>
                    <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
                    <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>

                    <li class=\"nav-header\">UOS Accounts </li>
                    <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Account Details</a></li>
                    <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Account</a></li>

                </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Finance:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 83,  183 => 82,  177 => 79,  173 => 78,  167 => 75,  163 => 74,  157 => 71,  153 => 70,  147 => 67,  143 => 66,  137 => 63,  133 => 62,  127 => 59,  123 => 58,  116 => 53,  113 => 52,  103 => 46,  96 => 41,  84 => 35,  78 => 32,  71 => 28,  67 => 27,  61 => 26,  58 => 25,  54 => 24,  32 => 4,  29 => 3,);
    }
}
