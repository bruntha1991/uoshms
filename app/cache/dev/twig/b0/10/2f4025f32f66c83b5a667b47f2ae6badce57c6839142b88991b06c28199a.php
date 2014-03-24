<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_b0102f4025f32f66c83b5a667b47f2ae6badce57c6839142b88991b06c28199a extends Twig_Template
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
        return array (  35 => 4,  26 => 3,  87 => 20,  80 => 19,  55 => 13,  46 => 7,  44 => 10,  36 => 7,  31 => 5,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  27 => 4,  24 => 3,  22 => 2,  201 => 92,  199 => 91,  196 => 90,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  163 => 70,  158 => 67,  151 => 63,  138 => 57,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  112 => 42,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  57 => 14,  43 => 8,  40 => 7,  33 => 5,  30 => 3,  253 => 108,  250 => 107,  245 => 105,  240 => 104,  235 => 102,  231 => 101,  227 => 100,  223 => 98,  218 => 96,  214 => 95,  208 => 92,  204 => 91,  198 => 88,  194 => 87,  190 => 86,  187 => 84,  185 => 84,  182 => 83,  176 => 80,  172 => 79,  166 => 71,  162 => 75,  156 => 66,  152 => 71,  146 => 68,  142 => 59,  136 => 56,  132 => 63,  127 => 61,  122 => 59,  118 => 57,  115 => 43,  105 => 40,  98 => 44,  85 => 19,  79 => 18,  71 => 29,  67 => 28,  61 => 27,  58 => 26,  54 => 21,  32 => 12,  29 => 4,);
    }
}
