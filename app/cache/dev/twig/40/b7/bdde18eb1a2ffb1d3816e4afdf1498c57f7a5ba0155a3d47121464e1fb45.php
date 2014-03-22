<?php

/* uosuosBundle:Finance:editPay.html.twig */
class __TwigTemplate_40b7bdde18eb1a2ffb1d3816e4afdf1498c57f7a5ba0155a3d47121464e1fb45 extends Twig_Template
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
            
            <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("editPay");
        echo "\" data-validate=\"parsley\">
                    <label>Student_id :</label>
                    <input type=\"text\" name=\"student_id\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "student"), "html", null, true);
        echo "\"> 
                    <label>Balance Amount :</label> 
                    <input type=\"text\" name=\"balance\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\"  readonly=\"true\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "balance"), "html", null, true);
        echo "\">
                    <label>Tranferring Amount :</label> 
                    <input type=\"text\" name=\"transferred\" id=\"transferred\" readonly=\"true\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "transferred"), "html", null, true);
        echo "\"><br>   
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "id"), "html", null, true);
        echo "\">

                    <div>
                        <button class=\"btn btn-primary\" type=\"submit\" >Make The Change</button>
                    </div>
                </form>
            
  
  </ul>
    ";
    }

    // line 33
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 34
        echo "
            <ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>

                <li class=\"nav-header\">UOS Halls</li>
                <li ><a  href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                <li ><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                <li class=\"nav-header\">UOS Rooms</li>
                <li ><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                <li class=\"nav-header\">UOS Student Management </li>
                <li class=\"active\"><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                <li class=\"nav-header\">UOS Student Accomodation </li>
                <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
                <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

                <li class=\"nav-header\">UOS Employee Management </li>
                <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                <li class=\"nav-header\">UOS Employee Positining </li>
                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
                <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>


                <li class=\"nav-header\">UOS Finance Details </li>
                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
                <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Make A New Payment</a></li>
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Finance:editPay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 65,  148 => 64,  141 => 60,  137 => 59,  131 => 56,  127 => 55,  121 => 52,  117 => 51,  111 => 48,  107 => 47,  101 => 44,  97 => 43,  91 => 40,  87 => 39,  80 => 34,  77 => 33,  63 => 21,  59 => 20,  54 => 18,  49 => 16,  44 => 14,  32 => 4,  29 => 3,);
    }
}
