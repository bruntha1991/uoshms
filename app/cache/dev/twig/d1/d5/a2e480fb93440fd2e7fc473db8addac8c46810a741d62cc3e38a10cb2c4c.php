<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_d1d5a2e480fb93440fd2e7fc473db8addac8c46810a741d62cc3e38a10cb2c4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  87 => 20,  31 => 5,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  56 => 9,  41 => 9,  24 => 3,  201 => 92,  196 => 90,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 24,  91 => 31,  69 => 25,  66 => 15,  62 => 23,  51 => 12,  49 => 19,  19 => 1,  93 => 9,  80 => 19,  46 => 7,  44 => 10,  36 => 7,  27 => 4,  22 => 2,  57 => 14,  54 => 21,  43 => 8,  40 => 8,  33 => 5,  30 => 3,  292 => 143,  287 => 142,  282 => 135,  276 => 134,  271 => 94,  266 => 88,  258 => 144,  255 => 143,  253 => 142,  243 => 136,  241 => 135,  237 => 134,  223 => 123,  219 => 122,  215 => 121,  211 => 120,  207 => 119,  203 => 118,  199 => 91,  195 => 116,  191 => 115,  187 => 84,  183 => 82,  179 => 112,  175 => 111,  158 => 67,  156 => 66,  150 => 90,  148 => 88,  129 => 71,  119 => 64,  113 => 63,  106 => 58,  104 => 57,  86 => 28,  74 => 39,  70 => 38,  37 => 11,  25 => 4,  122 => 43,  118 => 42,  112 => 42,  108 => 38,  102 => 35,  98 => 40,  92 => 21,  88 => 6,  82 => 41,  78 => 40,  72 => 16,  68 => 14,  64 => 12,  59 => 30,  55 => 13,  50 => 8,  48 => 14,  42 => 10,  39 => 6,  32 => 12,  29 => 3,);
    }
}
