<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_bf68e5483a5df9c162915b53115c6a11015384f2776532a4fb09149538f341e2 extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute($this->getContext($context, "trace"), "class") . $this->getAttribute($this->getContext($context, "trace"), "type")) . $this->getAttribute($this->getContext($context, "trace"), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($this->getContext($context, "trace"), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute($this->getContext($context, "trace"), "file");
            echo " line ";
            echo $this->getAttribute($this->getContext($context, "trace"), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 7,  26 => 5,  87 => 20,  55 => 13,  31 => 5,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  69 => 25,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  80 => 19,  46 => 7,  44 => 10,  36 => 7,  27 => 4,  22 => 2,  54 => 21,  43 => 8,  40 => 8,  33 => 6,  30 => 3,  287 => 140,  282 => 139,  277 => 132,  271 => 131,  266 => 91,  261 => 85,  253 => 141,  250 => 140,  248 => 139,  238 => 133,  236 => 132,  232 => 131,  218 => 120,  214 => 119,  210 => 118,  206 => 117,  202 => 116,  198 => 115,  194 => 114,  190 => 113,  186 => 112,  182 => 111,  178 => 110,  174 => 109,  170 => 108,  153 => 93,  151 => 63,  145 => 87,  143 => 85,  124 => 68,  114 => 61,  110 => 60,  106 => 58,  104 => 57,  86 => 28,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  59 => 30,  37 => 11,  25 => 3,  111 => 53,  108 => 52,  98 => 40,  91 => 31,  79 => 18,  73 => 31,  66 => 15,  60 => 26,  57 => 16,  53 => 24,  32 => 12,  29 => 4,);
    }
}
