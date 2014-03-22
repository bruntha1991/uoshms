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
            
            
            
            <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("makePay");
        echo "\" data-validate=\"parsley\">
                    <label>Student_id :</label>
                    <input type=\"text\" name=\"student_id\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "student"), "html", null, true);
        echo "\"> 
                    <label>Balance Amount :</label> 
                    <input type=\"text\" name=\"balance\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\"  readonly=\"true\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "balance"), "html", null, true);
        echo "\">
                    <label>Tranferring Amount :</label> 
                    <input type=\"text\" name=\"transferred\" id=\"transferred\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "transferred"), "html", null, true);
        echo "\"><br>   
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "finance"), "id"), "html", null, true);
        echo "\">

                    <div>
                        <button class=\"btn btn-primary\" type=\"submit\" >Pay</button>
                    </div>
                </form>
            
  
           
            </ul>
    ";
    }

    // line 36
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 37
        echo "
                <ul class=\"nav nav-list\">
                    <li  class=\"nav-header\" ><b>Home</b></li>

                    <li class=\"nav-header\">UOS Halls</li>
                    <li ><a  href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                    <li ><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                    <li class=\"nav-header\">UOS Rooms</li>
                    <li ><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                    <li class=\"nav-header\">UOS Student Management </li>
                    <li class=\"active\"><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                    <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                    <li class=\"nav-header\">UOS Student Accomodation </li>
                    <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
                    <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

                    <li class=\"nav-header\">UOS Employee Management </li>
                    <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                    <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                    <li class=\"nav-header\">UOS Employee Positining </li>
                    <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
                    <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>


                    <li class=\"nav-header\">UOS Finance Details </li>
                    <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
                    <li><a href=\"";
        // line 68
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
        return array (  155 => 68,  151 => 67,  144 => 63,  140 => 62,  134 => 59,  130 => 58,  124 => 55,  120 => 54,  114 => 51,  110 => 50,  104 => 47,  100 => 46,  94 => 43,  90 => 42,  83 => 37,  80 => 36,  65 => 23,  61 => 22,  56 => 20,  51 => 18,  46 => 16,  32 => 4,  29 => 3,);
    }
}
