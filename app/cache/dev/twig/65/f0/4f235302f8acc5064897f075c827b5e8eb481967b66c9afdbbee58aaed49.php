<?php

/* uosuosBundle:Finance:index_student.html.twig */
class __TwigTemplate_65f04f235302f8acc5064897f075c827b5e8eb481967b66c9afdbbee58aaed49 extends Twig_Template
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
        <h1>Account Details</h1>
            <table class=\"table\">
                ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 9
            echo "            ";
            if (($this->getAttribute($this->getContext($context, "entity"), "student") == $this->getContext($context, "studentid"))) {
                // line 10
                echo "                    <thead>
                        <tr>
                            <th>Studentno</th>
                            <td>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "student"), "html", null, true);
                echo "</a></td>
                        </tr>
                        <tr>
                            <th>Amount Before transfer </th>
                            <td>";
                // line 17
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "balance") + $this->getAttribute($this->getContext($context, "entity"), "transferred")), "html", null, true);
                echo "</td>
                        </tr>
                        <tr>
                            <th>Amount Transferred</th>
                            <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "transferred"), "html", null, true);
                echo "</td>
                        </tr>
                        <tr>
                            <th>Balance Payment</th>
                            <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "balance"), "html", null, true);
                echo "</td>
                        </tr>
                    </thead>
                ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "       
                </table>

                <ul>
                    <li class=\"nav-header\">
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">
                            Pay Due
                        </a>
                    </li>
                </ul>
    ";
    }

    // line 41
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 42
        echo "
                <ul class=\"nav nav-list\">
                    <li  class=\"nav-header\" ><b>Home</b></li>

                    <li class=\"nav-header\">UOS Halls</li>
                    <li ><a  href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
                    <li ><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

                    <li class=\"nav-header\">UOS Rooms</li>
                    <li ><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
                    <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

                    <li class=\"nav-header\">UOS Student Management </li>
                    <li class=\"active\"><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
                    <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

                    <li class=\"nav-header\">UOS Student Accomodation </li>
                    <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
                    <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

                    <li class=\"nav-header\">UOS Employee Management </li>
                    <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
                    <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

                    <li class=\"nav-header\">UOS Employee Positining </li>
                    <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
                    <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>

                    <li class=\"nav-header\">UOS Finance Details </li>
                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Make A New Payment</a></li>

                </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Finance:index_student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 72,  171 => 71,  165 => 68,  161 => 67,  155 => 64,  151 => 63,  145 => 60,  141 => 59,  135 => 56,  131 => 55,  125 => 52,  121 => 51,  115 => 48,  111 => 47,  104 => 42,  101 => 41,  91 => 35,  84 => 30,  78 => 29,  71 => 25,  64 => 21,  57 => 17,  50 => 13,  45 => 10,  42 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
