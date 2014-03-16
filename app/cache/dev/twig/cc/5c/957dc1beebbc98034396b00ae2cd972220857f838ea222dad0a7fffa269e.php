<?php

/* uosuosBundle:Hall:index.html.twig */
class __TwigTemplate_cc5c957dc1beebbc98034396b00ae2cd972220857f838ea222dad0a7fffa269e extends Twig_Template
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
        <h1>Hall list</h1>
        <script src=\"assets/js/jquery.tablesorter.min.js\"></script>
        <script >
            \$(function() {
                \$(\"table#sortTableExample\").tablesorter({sortList: [[1, 0]]});
            });
        </script>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Hallname</th>
                    <th>Capacity</th>
                    <th>Gender</th>


                </tr>
            </thead>
            <tbody>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "                <tr>
                    <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hall_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hallname"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "capacity"), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gender"), "html", null, true);
            echo "</td>

                    <td>
                        <ul>
                            <li class=\"nav-header\">
                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hall_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li class=\"nav-header\">
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hall_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                            </li>
                            <li class=\"nav-header\">
                                
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uosuos_hall_room", array("hallname" => $this->getAttribute($this->getContext($context, "entity"), "hallname"))), "html", null, true);
            echo "\">show rooms</a>
                                
                            </li>
                        </ul>
                    </td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>

        <ul>
            <li class=\"nav-header\">
                <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">
                    Create a new entry
                </a>
            </li>
        </ul>
    ";
    }

    // line 59
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 60
        echo "
        <ul class=\"nav nav-list\">
            <li  class=\"nav-header\" ><b>Home</b></li>

            <li class=\"nav-header\">UOS Halls</li>
            <li class=\"active\"><a  href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
            <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

            <li class=\"nav-header\">UOS Rooms</li>
            <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
            <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

            <li class=\"nav-header\">UOS Student Management </li>
            <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
            <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

            <li class=\"nav-header\">UOS Student Accomodation </li>
            <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
            <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

            <li class=\"nav-header\">UOS Employee Management </li>
            <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
            <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

            <li class=\"nav-header\">UOS Employee Positining </li>
            <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
            <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>

            <li class=\"nav-header\">UOS Accounts </li>
            <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Account Details</a></li>
            <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Account</a></li>

        </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Hall:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 90,  192 => 89,  186 => 86,  182 => 85,  176 => 82,  172 => 81,  166 => 78,  162 => 77,  156 => 74,  152 => 73,  146 => 70,  142 => 69,  136 => 66,  132 => 65,  125 => 60,  122 => 59,  112 => 52,  105 => 47,  92 => 40,  85 => 36,  79 => 33,  71 => 28,  67 => 27,  61 => 26,  58 => 25,  54 => 24,  32 => 4,  29 => 3,);
    }
}
