<?php

/* uosuosBundle:Finance:makePay.html.twig */
class __TwigTemplate_d569ea8f08b216c03c1027f38f5f77370f77944525bf0b4e454abd0fa843c13a extends Twig_Template
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
        <h1>Balance Payment</h1>
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
                        <th>Balance Payment</th>
                        <th>transferred Amount</th>
                        <th>Payment Date</th>
                        <th>ID</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <td><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_show", array("id" => $this->getAttribute($this->getContext($context, "finance"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "student"), "html", null, true);
        echo "</a></td>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "balance"), "html", null, true);
        echo "</td>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "transferred"), "html", null, true);
        echo "</td>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "payDate"), "Y/m/d"), "html", null, true);
        echo "</td>
                        

                        </ul>
                <ul>
                    <li class=\"nav-header\">
                        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_show", array("id" => $this->getAttribute($this->getContext($context, "finance"), "id"))), "html", null, true);
        echo "\">show</a>
                    </li>
                    <li class=\"nav-header\">
                        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_edit", array("id" => $this->getAttribute($this->getContext($context, "finance"), "id"))), "html", null, true);
        echo "\">Pay</a>
                    </li>
                </ul>


                </td>
                </tr>


                </tbody>
            </table>
            <label for=\"student_id\" >Student_id :</label> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "student"), "html", null, true);
        echo "
            <label for=\"balance\" >Balance Amount :</label> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "balance"), "html", null, true);
        echo "
            <label for=\"transfer\" >Tranferring Amount :</label> 
            <input type=\"transferred\" name=\"transferred\" id=\"trans\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "transferred"), "html", null, true);
        echo "\"><br>    

                                <li class=\"nav-header\">
                                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saveFinance", array("balance" => $this->getAttribute($this->getContext($context, "finance"), "balance"), "transferred" => $this->getAttribute($this->getContext($context, "finance"), "transferred"), "student" => $this->getContext($context, "student"))), "html", null, true);
        echo "\">Pay</a>
                                </li>
                                
                                
                <li class=\"nav-header\">
                    <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">
                        Transfer Money
                    </a>
                </li>
            </ul>
    ";
    }

    // line 79
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 80
        echo "
            <ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>

                <li class=\"nav-header\">UOS Halls</li>
                <li ><a  href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                <li ><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                <li class=\"nav-header\">UOS Rooms</li>
                <li ><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                <li class=\"nav-header\">UOS Student Management </li>
                <li class=\"active\"><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                <li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                <li class=\"nav-header\">UOS Student Accomodation </li>
                <li><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
                <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

                <li class=\"nav-header\">UOS Employee Management </li>
                <li><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                <li><a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                <li class=\"nav-header\">UOS Employee Positining </li>
                <li><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
                <li><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>


                <li class=\"nav-header\">UOS Finance Details </li>
                <li><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
                <li><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Make A New Payment</a></li>
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Finance:makePay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 111,  206 => 110,  199 => 106,  195 => 105,  189 => 102,  185 => 101,  179 => 98,  175 => 97,  169 => 94,  165 => 93,  159 => 90,  155 => 89,  149 => 86,  145 => 85,  138 => 80,  135 => 79,  125 => 63,  117 => 58,  111 => 55,  106 => 53,  102 => 52,  88 => 41,  82 => 38,  73 => 32,  69 => 31,  65 => 30,  59 => 29,  32 => 4,  29 => 3,);
    }
}
