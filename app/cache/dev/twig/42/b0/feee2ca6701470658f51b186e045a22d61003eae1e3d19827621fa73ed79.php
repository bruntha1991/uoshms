<?php

/* uosuosBundle:Room:edit.html.twig */
class __TwigTemplate_42b0feee2ca6701470658f51b186e045a22d61003eae1e3d19827621fa73ed79 extends Twig_Template
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
    <h1>Room edit</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
        echo "

         <ul class=\"record_actions\">
    <li class=\"nav-header\">
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">
            Back to the list
        </a>
    </li>
    <li class=\"nav-header\">";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    // line 22
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 23
        echo "
<ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>
              
              <li class=\"nav-header\">UOS Halls</li>
              <li ><a  href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
              <li ><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>
              
              <li class=\"nav-header\">UOS Rooms</li>
              <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
              <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>
              
              <li class=\"nav-header\">UOS Student Management </li>
              <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
              <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>
              
              <li class=\"nav-header\">UOS Student Accomodation </li>
              <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
              <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>
              
              <li class=\"nav-header\">UOS Employee Management </li>
              <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
              <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>
              
              <li class=\"nav-header\">UOS Employee Positining </li>
              <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
              <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>
              
              <li class=\"nav-header\">UOS Accounts </li>
              <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Account Details</a></li>
              <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Account</a></li>
              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Room:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 53,  129 => 52,  123 => 49,  119 => 48,  113 => 45,  109 => 44,  103 => 41,  99 => 40,  93 => 37,  89 => 36,  83 => 33,  79 => 32,  73 => 29,  69 => 28,  62 => 23,  59 => 22,  52 => 16,  45 => 12,  38 => 8,  32 => 4,  29 => 3,);
    }
}
