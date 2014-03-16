<?php

/* uosuosBundle:Room:show.html.twig */
class __TwigTemplate_f41e8a7ccaf72f37931b7a7d7c3951a2c4cd085abf041882bf5d0b1c2d006332 extends Twig_Template
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
        // line 5
        echo "<div class=\"span2\">
            <div class=\"containerHome\" >
    <h1>Room</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Room Number</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "roomno"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Monthly Cost</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "monthlycost"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hall Name</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hall"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li class=\"nav-header\">
        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">
            Back to the list
        </a>
    </li>
    <li class=\"nav-header\">
        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li class=\"nav-header\">";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    // line 44
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 45
        echo "
<ul class=\"nav nav-list\">
                <li  class=\"nav-header\" ><b>Home</b></li>
              
              <li class=\"nav-header\">UOS Halls</li>
              <li ><a  href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">View All </a></li>
              <li ><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">Add Hall</a></li>
              
              <li  class=\"nav-header\">UOS Rooms</li>
              <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("room");
        echo "\">View All</a></li>
              <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Add Room</a></li>
              
              <li class=\"nav-header\">UOS Student Management </li>
              <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">View All Students</a></li>
              <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">Add Student</a></li>
              
              <li class=\"nav-header\">UOS Student Accomodation </li>
              <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Accomodation</a></li>
              <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Accomodation</a></li>
              
              <li class=\"nav-header\">UOS Employee Management </li>
              <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("employee");
        echo "\">Employee</a></li>
              <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\">Add Employee</a></li>
              
              <li class=\"nav-header\">UOS Employee Positining </li>
              <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Positions</a></li>
              <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Position</a></li>
              
              <li class=\"nav-header\">UOS Accounts </li>
              <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Account Details</a></li>
              <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">Add Account</a></li>
              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Room:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 75,  165 => 74,  159 => 71,  155 => 70,  149 => 67,  145 => 66,  139 => 63,  135 => 62,  129 => 59,  125 => 58,  119 => 55,  115 => 54,  109 => 51,  105 => 50,  98 => 45,  95 => 44,  88 => 41,  81 => 37,  73 => 32,  63 => 25,  56 => 21,  49 => 17,  42 => 13,  32 => 5,  29 => 3,);
    }
}
