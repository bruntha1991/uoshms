<?php

/* ::base.html.twig */
class __TwigTemplate_00bb651345a403face309d9d48ad2bf37917c39fe955963a62d77cd62b6486db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sideMenu' => array($this, 'block_sideMenu'),
            'container' => array($this, 'block_container'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>University of Sumanadasa, Hall Management System</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Le styles -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style type=\"text/css\">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }

            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                }
            }
        </style>
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src=\"../assets/html5shiv.js\"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"shortcut icon\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/favicon.png"), "html", null, true);
        echo "\">
    </head>

    <body>

        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"#\">Hall Management System for University of Sumanadasa</a>
                    <div class=\"nav-collapse collapse\">
              
              


                        <p class=\"navbar-text pull-right\">
                            Logged in as <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" class=\"navbar-link\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "</a>
                            <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("uosuos_uos");
        echo "\">
                                <button type=\"submit\" class=\"btn\">Log Out</button>
                            </a>
                        </p>










                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                <div class=\"span2\">
                    <div class=\"well sidebar-nav\">

              ";
        // line 87
        $this->displayBlock('sideMenu', $context, $blocks);
        // line 89
        echo "
                    </div><!--/.well -->
                </div><!--/span-->

        ";
        // line 93
        $this->displayBlock('container', $context, $blocks);
        // line 95
        echo "

                <!--/row-->

                <hr>

                <footer>
                    <p>&copy; Augmented Software Solutions 2014</p>
                </footer>

            </div><!--/.fluid-container-->

            <!-- Le javascript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>

<!--

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 133
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 134
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 135
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("fevicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        
        
        ";
        // line 141
        $this->displayBlock('body', $context, $blocks);
        // line 142
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 143
        echo "    </body>
</html>


";
    }

    // line 87
    public function block_sideMenu($context, array $blocks = array())
    {
    }

    // line 93
    public function block_container($context, array $blocks = array())
    {
    }

    // line 133
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 134
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 141
    public function block_body($context, array $blocks = array())
    {
    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 142,  281 => 141,  276 => 134,  270 => 133,  265 => 93,  260 => 87,  252 => 143,  249 => 142,  247 => 141,  237 => 135,  235 => 134,  231 => 133,  217 => 122,  213 => 121,  209 => 120,  205 => 119,  201 => 118,  197 => 117,  193 => 116,  181 => 113,  177 => 112,  173 => 111,  152 => 95,  150 => 93,  144 => 89,  142 => 87,  109 => 62,  86 => 42,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  59 => 30,  37 => 11,  25 => 1,  189 => 115,  185 => 114,  179 => 83,  175 => 82,  169 => 110,  165 => 78,  159 => 75,  155 => 74,  149 => 71,  145 => 70,  139 => 67,  135 => 66,  129 => 63,  125 => 62,  118 => 57,  115 => 63,  105 => 49,  98 => 44,  85 => 37,  79 => 34,  71 => 29,  67 => 28,  61 => 27,  58 => 26,  54 => 25,  32 => 5,  29 => 4,);
    }
}
