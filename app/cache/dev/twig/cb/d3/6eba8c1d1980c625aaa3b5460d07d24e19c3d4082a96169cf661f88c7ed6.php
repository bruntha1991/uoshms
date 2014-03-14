<?php

/* uosuosBundle:Hall:show.html.twig */
class __TwigTemplate_cbd36eba8c1d1980c625aaa3b5460d07d24e19c3d4082a96169cf661f88c7ed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
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
        echo "<h1>Hall</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Hallname</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hallname"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "capacity"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gender"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hall_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Hall:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  78 => 34,  70 => 29,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
