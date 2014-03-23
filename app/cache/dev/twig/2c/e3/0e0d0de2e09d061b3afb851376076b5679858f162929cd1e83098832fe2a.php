<?php

/* uosuosBundle:Finance:show.html.twig */
class __TwigTemplate_2ce30e0d0de2e09d061b3afb851376076b5679858f162929cd1e83098832fe2a extends Twig_Template
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

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"span2\">
    <div class=\"containerHome\" >
        <h1>Finance</h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Studentno</th>
                    <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "student"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Amount Before transfer </th>
                    <td>";
        // line 16
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "balance") + $this->getAttribute($this->getContext($context, "entity"), "transferred")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Amount Transferred</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "transferred"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Balance Payment</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "balance"), "html", null, true);
        echo "</td>
                </tr>

                <tr>
                    <th>Trasferred Date</th>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "payDate"), "Y/m/d"), "html", null, true);
        echo "</td>
                </tr>


            </tbody>
        </table>

        <ul class=\"record_actions\">
            <li class=\"nav-header\">
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">
                    Back to the list
                </a>
            </li>
            <li class=\"nav-header\">
                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finance_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                    Edit
                </a>
            </li>
            <li class=\"nav-header\">";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
        </ul>
";
    }

    // line 50
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 51
        echo "
        <ul class=\"nav nav-list\">
            <li  class=\"nav-header\" ><b>Home</b></li>

            <li class=\"nav-header\">UOS Halls</li>
            <li ><a  href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
            <li ><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

            <li class=\"nav-header\">UOS Rooms</li>
            <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

            <li class=\"nav-header\">UOS Student Management </li>
            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
            <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

            <li class=\"nav-header\">UOS Student Accomodation </li>
            <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
            <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

            <li class=\"nav-header\">UOS Employee Management </li>
            <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
            <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

            <li class=\"nav-header\">UOS Employee Positining </li>
            <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
            <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>

            <li class=\"nav-header\">UOS Finance Details </li>
            <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
            <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Make A New Payment</a></li>

        </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Finance:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 81,  175 => 80,  169 => 77,  165 => 76,  159 => 73,  155 => 72,  149 => 69,  145 => 68,  139 => 65,  135 => 64,  129 => 61,  125 => 60,  119 => 57,  115 => 56,  108 => 51,  105 => 50,  98 => 47,  91 => 43,  83 => 38,  71 => 29,  63 => 24,  56 => 20,  49 => 16,  42 => 12,  32 => 4,  29 => 2,);
    }
}
