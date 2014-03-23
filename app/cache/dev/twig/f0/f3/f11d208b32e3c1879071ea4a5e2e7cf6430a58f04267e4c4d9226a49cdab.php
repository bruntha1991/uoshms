<?php

/* uosuosBundle:Student:edit.html.twig */
class __TwigTemplate_f0f3f11d208b32e3c1879071ea4a5e2e7cf6430a58f04267e4c4d9226a49cdab extends Twig_Template
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
        // line 3
        echo "<div class=\"span10\">
    <div class=\"containerHome\" >
        <h1>Student edit</h1>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
        echo "
        <ul class=\"table\">
            <li class=\"nav-header\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">
                    Back to the list
                </a>
            </li>
            <li class=\"nav-header\">";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
        </ul>
";
    }

    // line 17
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 18
        echo "        <ul class=\"nav nav-list\">
            <li  class=\"nav-header\" ><b>Home</b></li>

            <li class=\"nav-header\">UOS Halls</li>
            <li ><a  href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
            <li ><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>

            <li class=\"nav-header\">UOS Rooms</li>
            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>

            <li class=\"nav-header\">UOS Student Management </li>
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>

            <li class=\"nav-header\">UOS Student Accomodation </li>
            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("occupy");
        echo "\">Accomodation</a></li>
            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("occupy_new");
        echo "\">Add Accomodation</a></li>

            <li class=\"nav-header\">UOS Employee Management </li>
            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>

            <li class=\"nav-header\">UOS Employee Positining </li>
            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>

            <li class=\"nav-header\">UOS Finance Details </li>
            <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("finance");
        echo "\">Finance Details</a></li>
            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("finance_new");
        echo "\">Make A New Payment</a></li>

        </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Student:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  126 => 46,  120 => 43,  116 => 42,  110 => 39,  106 => 38,  100 => 35,  96 => 34,  90 => 31,  86 => 30,  80 => 27,  76 => 26,  70 => 23,  66 => 22,  60 => 18,  57 => 17,  50 => 13,  43 => 9,  37 => 6,  32 => 3,  29 => 2,);
    }
}
