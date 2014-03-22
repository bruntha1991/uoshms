<?php

/* uosuosBundle:Finance:makePay.html.twig */
class __TwigTemplate_fd29543f31e6f1acf9f61a280a91eabedf0d1eff45457ac37df48e87b179aff0 extends Twig_Template
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
        <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("makePay");
        echo "\" data-validate=\"parsley\">
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "paydate"), "Y/m/d"), "html", null, true);
        echo "</td>
                        </td>
                    </tr>


                    </tbody>
                </table>                    
                    <label>Student_id :</label>
                    <input type=\"text\" name=\"student_id\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "student"), "html", null, true);
        echo "\"> 
                    <label>Balance Amount :</label> 
                    <input type=\"text\" name=\"balance\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "balance"), "html", null, true);
        echo "\">
                    <label>Tranferring Amount :</label> 
                    <input type=\"text\" name=\"transferred\" id=\"transferred\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "transferred"), "html", null, true);
        echo "\"><br>   
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "id"), "html", null, true);
        echo "\">

                    <div>
                        <button class=\"btn btn-primary\" type=\"submit\" >Pay</button>
                    </div>
                </form>

    ";
    }

    // line 63
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 64
        echo "
                <ul class=\"nav nav-list\">
                    <li  class=\"nav-header\" ><b>Home</b></li>

                    <li class=\"nav-header\">UOS Halls</li>
                    <li ><a  href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                    <li ><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                    <li class=\"nav-header\">UOS Rooms</li>
                    <li ><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                    <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                    <li class=\"nav-header\">UOS Student Management </li>
                    <li class=\"active\"><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                    <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                    <li class=\"nav-header\">UOS Student Accomodation </li>
                    <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
                    <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

                    <li class=\"nav-header\">UOS Employee Management </li>
                    <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                    <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                    <li class=\"nav-header\">UOS Employee Positining </li>
                    <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
                    <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>


                    <li class=\"nav-header\">UOS Finance Details </li>
                    <li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
                    <li><a href=\"";
        // line 95
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
        return array (  188 => 95,  184 => 94,  177 => 90,  173 => 89,  167 => 86,  163 => 85,  157 => 82,  153 => 81,  147 => 78,  143 => 77,  137 => 74,  133 => 73,  127 => 70,  123 => 69,  116 => 64,  113 => 63,  101 => 45,  97 => 44,  92 => 42,  87 => 40,  76 => 32,  72 => 31,  68 => 30,  62 => 29,  36 => 6,  32 => 4,  29 => 3,);
    }
}
