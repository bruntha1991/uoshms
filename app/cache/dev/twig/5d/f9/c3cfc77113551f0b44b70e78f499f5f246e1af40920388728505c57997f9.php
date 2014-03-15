<?php

/* uosuosBundle:Hall:new.html.twig */
class __TwigTemplate_5df9c3cfc77113551f0b44b70e78f499f5f246e1af40920388728505c57997f9 extends Twig_Template
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
    <h1>Hall creation</h1>

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
        // line 18
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    // line 25
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 26
        echo "
<ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>
              
              <li class=\"nav-header\">UOS Halls</li>
              <li ><a  href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
              <li class=\"active\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>
              
              <li class=\"nav-header\">UOS Rooms</li>
              <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
              <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>
              
              <li class=\"nav-header\">UOS Student Management </li>
              <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
              <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>
              
              <li class=\"nav-header\">UOS Student Accomodation </li>
              <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
              <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>
              
              <li class=\"nav-header\">UOS Employee Management </li>
              <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
              <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>
              
              <li class=\"nav-header\">UOS Employee Positining </li>
              <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
              <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>
              
              <li class=\"nav-header\">UOS Accounts </li>
              <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Account Details</a></li>
              <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Account</a></li>
              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Hall:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 56,  139 => 55,  133 => 52,  129 => 51,  123 => 48,  119 => 47,  113 => 44,  109 => 43,  103 => 40,  99 => 39,  93 => 36,  89 => 35,  83 => 32,  79 => 31,  72 => 26,  69 => 25,  59 => 18,  52 => 14,  49 => 13,  43 => 10,  40 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
