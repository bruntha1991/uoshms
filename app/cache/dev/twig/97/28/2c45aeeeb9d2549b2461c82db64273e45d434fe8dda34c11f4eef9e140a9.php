<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_97282c45aeeeb9d2549b2461c82db64273e45d434fe8dda34c11f4eef9e140a9 extends Twig_Template
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
        return array (  57 => 12,  54 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  292 => 143,  287 => 142,  282 => 135,  276 => 134,  271 => 94,  266 => 88,  258 => 144,  255 => 143,  253 => 142,  243 => 136,  241 => 135,  237 => 134,  223 => 123,  219 => 122,  215 => 121,  211 => 120,  207 => 119,  203 => 118,  199 => 117,  195 => 116,  191 => 115,  187 => 114,  183 => 113,  179 => 112,  175 => 111,  158 => 96,  156 => 94,  150 => 90,  148 => 88,  129 => 71,  119 => 64,  113 => 63,  106 => 58,  104 => 57,  86 => 42,  74 => 39,  70 => 38,  37 => 11,  25 => 1,  122 => 43,  118 => 42,  112 => 39,  108 => 38,  102 => 35,  98 => 34,  92 => 31,  88 => 30,  82 => 41,  78 => 40,  72 => 23,  68 => 22,  64 => 20,  59 => 30,  55 => 18,  50 => 15,  48 => 14,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
