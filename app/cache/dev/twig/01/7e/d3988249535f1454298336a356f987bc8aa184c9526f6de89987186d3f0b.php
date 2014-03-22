<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_017ed3988249535f1454298336a356f987bc8aa184c9526f6de89987186d3f0b extends Twig_Template
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
        return array (  38 => 13,  35 => 4,  26 => 5,  87 => 20,  31 => 5,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  56 => 9,  41 => 9,  24 => 4,  201 => 92,  196 => 90,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 24,  91 => 31,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  19 => 1,  93 => 9,  80 => 19,  46 => 7,  44 => 10,  36 => 7,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  40 => 8,  33 => 10,  30 => 3,  292 => 143,  287 => 142,  282 => 135,  276 => 134,  271 => 94,  266 => 88,  258 => 144,  255 => 143,  253 => 142,  243 => 136,  241 => 135,  237 => 134,  223 => 123,  219 => 122,  215 => 121,  211 => 120,  207 => 119,  203 => 118,  199 => 91,  195 => 116,  191 => 115,  187 => 84,  183 => 82,  179 => 112,  175 => 111,  158 => 67,  156 => 66,  150 => 90,  148 => 88,  129 => 71,  119 => 64,  113 => 63,  106 => 58,  104 => 57,  86 => 28,  74 => 39,  70 => 38,  37 => 11,  25 => 3,  122 => 43,  118 => 42,  112 => 42,  108 => 38,  102 => 35,  98 => 40,  92 => 21,  88 => 6,  82 => 41,  78 => 40,  72 => 16,  68 => 14,  64 => 12,  59 => 30,  55 => 13,  50 => 8,  48 => 14,  42 => 14,  39 => 6,  32 => 12,  29 => 3,);
    }
}
