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
        return array (  42 => 14,  38 => 13,  35 => 7,  26 => 5,  87 => 20,  80 => 19,  55 => 13,  46 => 7,  44 => 10,  36 => 7,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  27 => 4,  24 => 4,  22 => 2,  201 => 92,  199 => 91,  196 => 90,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  163 => 70,  158 => 67,  151 => 63,  138 => 57,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  112 => 42,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  57 => 16,  43 => 8,  40 => 7,  33 => 6,  30 => 3,  253 => 108,  250 => 107,  245 => 105,  240 => 104,  235 => 102,  231 => 101,  227 => 100,  223 => 98,  218 => 96,  214 => 95,  208 => 92,  204 => 91,  198 => 88,  194 => 87,  190 => 86,  187 => 84,  185 => 84,  182 => 83,  176 => 80,  172 => 79,  166 => 71,  162 => 75,  156 => 66,  152 => 71,  146 => 68,  142 => 59,  136 => 56,  132 => 63,  127 => 61,  122 => 59,  118 => 57,  115 => 43,  105 => 40,  98 => 44,  85 => 19,  79 => 18,  71 => 29,  67 => 28,  61 => 27,  58 => 26,  54 => 21,  32 => 12,  29 => 4,);
    }
}
