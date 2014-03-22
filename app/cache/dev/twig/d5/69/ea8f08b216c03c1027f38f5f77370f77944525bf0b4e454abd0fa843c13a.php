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
               
                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <td><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_show", array("id" => $this->getAttribute($this->getContext($context, "finance"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "student"), "html", null, true);
        echo "</a></td>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "balance"), "html", null, true);
        echo "</td>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "transferred"), "html", null, true);
        echo "</td>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "payDate"), "Y/m/d"), "html", null, true);
        echo "</td>
                        

                        </ul>
                <ul>
                    <li class=\"nav-header\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_show", array("id" => $this->getAttribute($this->getContext($context, "finance"), "id"))), "html", null, true);
        echo "\">show</a>
                    </li>
                    <li class=\"nav-header\">
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_edit", array("id" => $this->getAttribute($this->getContext($context, "finance"), "id"))), "html", null, true);
        echo "\">Pay</a>
                    </li>
                </ul>


                </td>
                </tr>


                </tbody>
            </table>
            <label for=\"student_id\" >Student_id :</label> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "student"), "html", null, true);
        echo "
            <label for=\"balance\" >Balance Amount :</label> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "balance"), "html", null, true);
        echo "
            <label for=\"transfer\" >Tranferring Amount :</label> 
            <input type=\"transferred\" name=\"transferred\" id=\"transferred\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "transferred"), "html", null, true);
        echo "\"><br>    

            <ul>                    
                <li class=\"nav-header\"> <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saveFinance", array("balance" => $this->getAttribute($this->getContext($context, "finance"), "balance"), "transferred" => $this->getAttribute($this->getContext($context, "finance"), "transferred"), "student" => $this->getContext($context, "student"))), "html", null, true);
        echo "\">Pay</a>
                </li>
                    ";
        // line 58
        echo twig_escape_filter($this->env, $this->getContext($context, "student"), "html", null, true);
        echo "
           </ul>
                                
                <li class=\"nav-header\">
                    <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">
                        Transfer Money
                    </a>
                </li>
            </ul>
    ";
    }

    // line 70
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 71
        echo "
            <ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>

                <li class=\"nav-header\">UOS Halls</li>
                <li ><a  href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                <li ><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                <li class=\"nav-header\">UOS Rooms</li>
                <li ><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                <li class=\"nav-header\">UOS Student Management </li>
                <li class=\"active\"><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                <li class=\"nav-header\">UOS Student Accomodation </li>
                <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
                <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

                <li class=\"nav-header\">UOS Employee Management </li>
                <li><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                <li><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                <li class=\"nav-header\">UOS Employee Positining </li>
                <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
                <li><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>


                <li class=\"nav-header\">UOS Finance Details </li>
                <li><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
                <li><a href=\"";
        // line 102
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
        return array (  212 => 102,  208 => 101,  201 => 97,  197 => 96,  191 => 93,  187 => 92,  181 => 89,  177 => 88,  171 => 85,  167 => 84,  161 => 81,  157 => 80,  151 => 77,  147 => 76,  140 => 71,  137 => 70,  127 => 62,  120 => 58,  115 => 56,  109 => 53,  104 => 51,  100 => 50,  86 => 39,  80 => 36,  71 => 30,  67 => 29,  63 => 28,  57 => 27,  32 => 4,  29 => 3,);
    }
}
