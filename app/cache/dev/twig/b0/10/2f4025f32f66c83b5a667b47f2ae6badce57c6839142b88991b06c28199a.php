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
        return array (  35 => 4,  26 => 3,  87 => 20,  55 => 13,  31 => 5,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 3,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  112 => 42,  101 => 24,  91 => 31,  69 => 25,  66 => 15,  62 => 23,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  80 => 19,  46 => 7,  44 => 10,  36 => 7,  27 => 4,  22 => 2,  57 => 14,  43 => 8,  40 => 8,  33 => 5,  30 => 3,  286 => 142,  281 => 141,  276 => 134,  270 => 133,  265 => 93,  260 => 87,  252 => 143,  249 => 142,  247 => 141,  237 => 135,  235 => 134,  231 => 133,  217 => 122,  213 => 121,  209 => 120,  205 => 119,  201 => 92,  197 => 117,  193 => 116,  181 => 113,  177 => 112,  173 => 74,  152 => 95,  150 => 93,  144 => 89,  142 => 59,  109 => 62,  86 => 28,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  59 => 30,  37 => 11,  25 => 4,  189 => 115,  185 => 114,  179 => 83,  175 => 82,  169 => 110,  165 => 78,  159 => 75,  155 => 74,  149 => 71,  145 => 70,  139 => 67,  135 => 66,  129 => 63,  125 => 62,  118 => 57,  115 => 43,  105 => 40,  98 => 40,  85 => 19,  79 => 18,  71 => 29,  67 => 28,  61 => 27,  58 => 26,  54 => 21,  32 => 12,  29 => 4,);
    }
}
