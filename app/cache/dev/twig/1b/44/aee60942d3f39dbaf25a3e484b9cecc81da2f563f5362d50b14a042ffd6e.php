<?php

/* uosuosBundle:Room:new.html.twig */
class __TwigTemplate_1b44aee60942d3f39dbaf25a3e484b9cecc81da2f563f5362d50b14a042ffd6e extends Twig_Template
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
        echo "<div class=\"span10\">
    <div class=\"containerHome\" >
        <h1>Room creation</h1>

    ";
        // line 8
        if (array_key_exists("error", $context)) {
            // line 9
            echo "
        <h2> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
            echo "</h2>

    ";
        }
        // line 13
        echo "
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
        <ul class=\"record_actions\">
            <li class=\"nav-header\">
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">
                    Back to the list
                </a>
            </li>
        </ul>
";
    }

    // line 23
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 24
        echo "
        <ul class=\"nav nav-list\">
            <li  class=\"nav-header\" ><b>Home</b></li>

            <li class=\"nav-header\">UOS Halls</li>
            <li ><a  href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
            <li ><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

            <li class=\"nav-header\">UOS Rooms</li>
            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

            <li class=\"nav-header\">UOS Student Management </li>
            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

            <li class=\"nav-header\">UOS Student Accomodation </li>
            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>

            <li class=\"nav-header\">UOS Employee Management </li>
            <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
            <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

            <li class=\"nav-header\">UOS Employee Positining </li>
            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>

            <li class=\"nav-header\">UOS Finance Details </li>
            <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
            <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Make A New Payment</a></li>

        </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Room:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 54,  138 => 53,  132 => 50,  128 => 49,  122 => 46,  118 => 45,  112 => 42,  108 => 41,  102 => 38,  98 => 37,  92 => 34,  88 => 33,  82 => 30,  78 => 29,  71 => 24,  68 => 23,  58 => 17,  52 => 14,  49 => 13,  43 => 10,  40 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
