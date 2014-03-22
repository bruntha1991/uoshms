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
            <!--
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Balance Payment</th>
                        <th>transferred Amount</th>
                        <th>Payment Date</th>

                    </tr>
                </thead>
            -->  
            
            <!--
            <tbody>

                    <tr>

                        <td><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_show", array("id" => $this->getAttribute($this->getContext($context, "finance"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "student"), "html", null, true);
        echo "</a></td>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "balance"), "html", null, true);
        echo "</td>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "transferred"), "html", null, true);
        echo "</td>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "payDate"), "Y/m/d"), "html", null, true);
        echo "</td>


                        </ul>
                <ul>
                    <li class=\"nav-header\">
                        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_show", array("id" => $this->getAttribute($this->getContext($context, "finance"), "id"))), "html", null, true);
        echo "\">show</a>
                    </li>
                    <li class=\"nav-header\">
                        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_edit", array("id" => $this->getAttribute($this->getContext($context, "finance"), "id"))), "html", null, true);
        echo "\">Pay</a>
                    </li>
                </ul>


                </td>
                </tr>


                </tbody>
            -->
            </table>
            
            
            <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("makePay");
        echo "\" data-validate=\"parsley\">
                    <label>Student_id :</label>
                    <input type=\"text\" name=\"student_id\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "student"), "html", null, true);
        echo "\"> 
                    <label>Balance Amount :</label> 
                    <input type=\"text\" name=\"balance\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\"  readonly=\"true\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "balance"), "html", null, true);
        echo "\">
                    <label>Tranferring Amount :</label> 
                    <input type=\"text\" name=\"transferred\" id=\"transferred\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "transferred"), "html", null, true);
        echo "\"><br>   
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "id"), "html", null, true);
        echo "\">

                    <div>
                        <button class=\"btn btn-primary\" type=\"submit\" >Pay</button>
                    </div>
                </form>
            
  
           
            </ul>
    ";
    }

    // line 77
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 78
        echo "
            <ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>

                <li class=\"nav-header\">UOS Halls</li>
                <li ><a  href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                <li ><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                <li class=\"nav-header\">UOS Rooms</li>
                <li ><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                <li class=\"nav-header\">UOS Student Management </li>
                <li class=\"active\"><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                <li><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                <li class=\"nav-header\">UOS Student Accomodation </li>
                <li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
                <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

                <li class=\"nav-header\">UOS Employee Management </li>
                <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                <li class=\"nav-header\">UOS Employee Positining </li>
                <li><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
                <li><a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>


                <li class=\"nav-header\">UOS Finance Details </li>
                <li><a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
                <li><a href=\"";
        // line 109
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
        return array (  216 => 109,  212 => 108,  205 => 104,  201 => 103,  195 => 100,  191 => 99,  185 => 96,  181 => 95,  175 => 92,  171 => 91,  165 => 88,  161 => 87,  155 => 84,  151 => 83,  144 => 78,  141 => 77,  126 => 64,  122 => 63,  117 => 61,  112 => 59,  107 => 57,  90 => 43,  84 => 40,  75 => 34,  71 => 33,  67 => 32,  61 => 31,  32 => 4,  29 => 3,);
    }
}
