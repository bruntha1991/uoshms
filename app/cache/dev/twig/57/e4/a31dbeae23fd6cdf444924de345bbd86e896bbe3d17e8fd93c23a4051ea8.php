<?php

/* uosuosBundle:Occupy:index.html.twig */
class __TwigTemplate_57e4a31dbeae23fd6cdf444924de345bbd86e896bbe3d17e8fd93c23a4051ea8 extends Twig_Template
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
        <h1>Occupy list</h1>
        <script src=\"assets/js/jquery.tablesorter.min.js\"></script>
        <script >
            \$(function() {
                \$(\"table#sortTableExample\").tablesorter({sortList: [[1, 0]]});
            });
            </script>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Hall Name</th>
                        <th>Room No</th>
                        <th>Notice</th>                            
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "student"), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hall"), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "room"), "html", null, true);
            echo "</td>
                            <td> ";
            // line 30
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "Y-m-d") < twig_date_format_filter($this->env, " -360 days", "Y-m-d"))) {
                echo "<font color=\"RED\"> Check IN Period Expired";
            }
            echo "</td>
                            <td>
                                <ul>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("occupy_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li class=\"nav-header\">
                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("occupy_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        echo "                    </tbody>
                </table>

                <ul>
                    <li>
                        <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("occupy_new");
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
    <li  class=\"nav-header\" ><a  href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("uosuos_home");
        echo "\"><b>Home</b></a></li>

";
        // line 63
        if (($this->getContext($context, "role") == "SuperUser")) {
            echo "     
    <li class=\"nav-header\">UOS Halls</li>
    <li ><a  href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("hall");
            echo "\">View All </a></li>
    <li ><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("hall_new");
            echo "\">Add Hall</a></li>

    <li class=\"nav-header\">UOS Rooms</li>
    <li ><a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("room");
            echo "\">View All</a></li>
    <li><a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("room_new");
            echo "\">Add Room</a></li>
    
    <li class=\"nav-header\">UOS Student Management </li>
    <li ><a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("student");
            echo "\">View All Students</a></li>
    <li><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("student_new");
            echo "\">Add Student</a></li>
    
    <li class=\"nav-header\">UOS Employee Management </li>
    <li><a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("employee");
            echo "\">Employee</a></li>
    <li><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("employee_new");
            echo "\">Add Employee</a></li>
    
    <li class=\"nav-header\">UOS Managers </li>
    <li><a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("employee");
            echo "\">View Managers</a></li>
    <li><a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("employee_new");
            echo "\">Add Manager</a></li>
    
";
        }
        // line 85
        echo "    
";
        // line 86
        if (($this->getContext($context, "role") == "Manager")) {
            // line 87
            echo "    <li class=\"nav-header\">UOS Student Accomodation </li>
    <li class=\"active\"><a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("occupy");
            echo "\">Accomodation</a></li>
    <li><a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("occupy_new");
            echo "\">Check IN</a></li>
    <li><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("checkOut");
            echo "\">Check OUT</a></li>

    <li class=\"nav-header\">UOS Employee Positining </li>
    <li><a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("work");
            echo "\">Positions</a></li>
    <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("work_new");
            echo "\">Add Position</a></li>

    <li class=\"nav-header\">UOS Finance Details </li>
    <li><a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("finance");
            echo "\">Finance Details</a></li>
    <li><a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("finance_new");
            echo "\">Make A New Payment</a></li>
";
        }
        // line 100
        echo "    
    <li class=\"nav-header\">User Settings </li>
 ";
        // line 102
        if (($this->getContext($context, "role") == "Student")) {
            echo "   
    <li><a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getContext($context, "stud_emp_id"))), "html", null, true);
            echo "\">Edit Personal Infomation</a></li>
    <li><a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_info", array("id" => $this->getContext($context, "u_id"))), "html", null, true);
            echo "\">View Payment Details</a></li>
 ";
        }
        // line 106
        echo " ";
        if (($this->getContext($context, "role") == "Employee")) {
            echo "   
    <li><a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_edit", array("id" => $this->getContext($context, "stud_emp_id"))), "html", null, true);
            echo "\">Edit Personal Infomation</a></li>
 ";
        }
        // line 109
        echo "
    <li><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getContext($context, "u_id"))), "html", null, true);
        echo "\">Change Password</a></li>
    
    
</ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Occupy:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 110,  253 => 109,  248 => 107,  243 => 106,  238 => 104,  234 => 103,  230 => 102,  226 => 100,  221 => 98,  217 => 97,  211 => 94,  207 => 93,  201 => 90,  197 => 89,  193 => 88,  190 => 87,  188 => 86,  185 => 85,  179 => 82,  175 => 81,  169 => 78,  165 => 77,  159 => 74,  155 => 73,  149 => 70,  145 => 69,  139 => 66,  135 => 65,  130 => 63,  125 => 61,  121 => 59,  118 => 58,  108 => 48,  101 => 43,  89 => 37,  83 => 34,  74 => 30,  70 => 29,  66 => 28,  62 => 27,  59 => 26,  55 => 25,  32 => 4,  29 => 3,);
    }
}
