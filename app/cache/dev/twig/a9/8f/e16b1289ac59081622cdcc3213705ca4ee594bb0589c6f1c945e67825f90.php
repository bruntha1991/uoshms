<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a98fe16b1289ac59081622cdcc3213705ca4ee594bb0589c6f1c945e67825f90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  253 => 108,  250 => 107,  245 => 105,  240 => 104,  235 => 102,  231 => 101,  227 => 100,  223 => 98,  218 => 96,  214 => 95,  208 => 92,  204 => 91,  198 => 88,  194 => 87,  190 => 86,  187 => 85,  185 => 84,  182 => 83,  176 => 80,  172 => 79,  166 => 76,  162 => 75,  156 => 72,  152 => 71,  146 => 68,  142 => 67,  136 => 64,  132 => 63,  127 => 61,  122 => 59,  118 => 57,  115 => 56,  105 => 49,  98 => 44,  85 => 37,  79 => 34,  71 => 29,  67 => 28,  61 => 27,  58 => 26,  54 => 11,  32 => 5,  29 => 4,);
    }
}
