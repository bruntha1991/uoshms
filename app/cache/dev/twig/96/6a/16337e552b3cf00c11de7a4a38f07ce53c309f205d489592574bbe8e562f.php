<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_966a16337e552b3cf00c11de7a4a38f07ce53c309f205d489592574bbe8e562f extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, "trace")));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 4,  26 => 5,  87 => 20,  55 => 13,  31 => 5,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  112 => 42,  101 => 24,  91 => 31,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  80 => 19,  46 => 7,  44 => 10,  36 => 7,  27 => 4,  22 => 2,  57 => 16,  43 => 8,  40 => 8,  33 => 10,  30 => 3,  286 => 142,  281 => 141,  276 => 134,  270 => 133,  265 => 93,  260 => 87,  252 => 143,  249 => 142,  247 => 141,  237 => 135,  235 => 134,  231 => 133,  217 => 122,  213 => 121,  209 => 120,  205 => 119,  201 => 92,  197 => 117,  193 => 116,  181 => 113,  177 => 112,  173 => 74,  152 => 95,  150 => 93,  144 => 89,  142 => 59,  109 => 62,  86 => 28,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  59 => 30,  37 => 11,  25 => 3,  189 => 115,  185 => 114,  179 => 83,  175 => 82,  169 => 110,  165 => 78,  159 => 75,  155 => 74,  149 => 71,  145 => 70,  139 => 67,  135 => 66,  129 => 63,  125 => 62,  118 => 57,  115 => 43,  105 => 40,  98 => 40,  85 => 19,  79 => 18,  71 => 29,  67 => 28,  61 => 27,  58 => 26,  54 => 21,  32 => 12,  29 => 4,);
    }
}
