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
        return array (  57 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  286 => 142,  281 => 141,  276 => 134,  270 => 133,  265 => 93,  260 => 87,  252 => 143,  249 => 142,  247 => 141,  237 => 135,  235 => 134,  231 => 133,  217 => 122,  213 => 121,  209 => 120,  205 => 119,  201 => 118,  197 => 117,  193 => 116,  181 => 113,  177 => 112,  173 => 111,  152 => 95,  150 => 93,  144 => 89,  142 => 87,  109 => 62,  86 => 42,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  59 => 30,  37 => 11,  25 => 1,  189 => 115,  185 => 114,  179 => 83,  175 => 82,  169 => 110,  165 => 78,  159 => 75,  155 => 74,  149 => 71,  145 => 70,  139 => 67,  135 => 66,  129 => 63,  125 => 62,  118 => 57,  115 => 63,  105 => 49,  98 => 44,  85 => 37,  79 => 34,  71 => 29,  67 => 28,  61 => 27,  58 => 26,  54 => 11,  32 => 5,  29 => 4,);
    }
}
