<?php

/* uosuosBundle:Hall:new.html.twig */
class __TwigTemplate_91977f4ec2388afed54d1015a3288e094de2d3de39facb56bb99ae2faa813aba extends Twig_Template
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
        echo "<h1>Hall creation</h1>

    ";
        // line 6
        if (array_key_exists("error", $context)) {
            // line 7
            echo "    
    <h2> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
            echo "</h2>
    
    ";
        }
        // line 11
        echo "    
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">
            Back to the list
        </a>
    </li>
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
        return array (  56 => 16,  49 => 12,  46 => 11,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
