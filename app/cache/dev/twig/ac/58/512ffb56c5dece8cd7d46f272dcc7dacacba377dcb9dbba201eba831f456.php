<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_ac58512ffb56c5dece8cd7d46f272dcc7dacacba377dcb9dbba201eba831f456 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  42 => 12,  38 => 13,  35 => 7,  26 => 3,  87 => 20,  55 => 13,  31 => 5,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  75 => 28,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 15,  41 => 9,  24 => 2,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  112 => 42,  101 => 24,  91 => 35,  69 => 25,  66 => 25,  62 => 24,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  80 => 19,  46 => 14,  44 => 10,  36 => 7,  27 => 4,  22 => 2,  57 => 16,  43 => 8,  40 => 8,  33 => 6,  30 => 5,  286 => 142,  281 => 141,  276 => 134,  270 => 133,  265 => 93,  260 => 87,  252 => 143,  249 => 142,  247 => 141,  237 => 135,  235 => 134,  231 => 133,  217 => 122,  213 => 121,  209 => 120,  205 => 119,  201 => 92,  197 => 117,  193 => 116,  181 => 113,  177 => 112,  173 => 74,  152 => 95,  150 => 93,  144 => 89,  142 => 59,  109 => 62,  86 => 28,  82 => 41,  78 => 40,  74 => 39,  70 => 26,  59 => 30,  37 => 11,  25 => 3,  189 => 115,  185 => 114,  179 => 83,  175 => 82,  169 => 110,  165 => 78,  159 => 75,  155 => 74,  149 => 71,  145 => 70,  139 => 67,  135 => 66,  129 => 63,  125 => 62,  118 => 57,  115 => 43,  105 => 40,  98 => 40,  85 => 19,  79 => 29,  71 => 29,  67 => 28,  61 => 27,  58 => 26,  54 => 21,  32 => 6,  29 => 4,);
    }
}
