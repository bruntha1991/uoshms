<?php

/* ::base.html.twig */
class __TwigTemplate_1d66572a0e7dd18b34fbd89477f59b65e4250d56317ba794f6b73b311e009471 extends Twig_Template
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
    <title>University of Sumanadasa, Hostel Management System</title>
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
          <a class=\"brand\" href=\"#\">Hostel Management System for University of Sumanadasa</a>
          <div class=\"nav-collapse collapse\">
              ";
        // line 57
        if (array_key_exists("name", $context)) {
            // line 58
            echo "    
             
              
              
    <p class=\"navbar-text pull-right\">
              Logged in as <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getContext($context, "id"))), "html", null, true);
            echo "\" class=\"navbar-link\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "</a>
              <a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("uosuos_uos");
            echo "\">
            <button type=\"submit\" class=\"btn\">Log Out</button>
        </a>
            </p>
            
    
    ";
        }
        // line 71
        echo "            
            
              
              
           
            
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
      <div class=\"row-fluid\">
        <div class=\"span2\">
          <div class=\"well sidebar-nav\">
           
              ";
        // line 88
        $this->displayBlock('sideMenu', $context, $blocks);
        // line 90
        echo "              
          </div><!--/.well -->
        </div><!--/span-->
        
        ";
        // line 94
        $this->displayBlock('container', $context, $blocks);
        // line 96
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
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
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
        // line 134
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 135
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 136
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("fevicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        
        
        ";
        // line 142
        $this->displayBlock('body', $context, $blocks);
        // line 143
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 144
        echo "    </body>
</html>


";
    }

    // line 88
    public function block_sideMenu($context, array $blocks = array())
    {
    }

    // line 94
    public function block_container($context, array $blocks = array())
    {
    }

    // line 134
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 135
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 142
    public function block_body($context, array $blocks = array())
    {
    }

    // line 143
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
        return array (  292 => 143,  287 => 142,  282 => 135,  276 => 134,  271 => 94,  266 => 88,  258 => 144,  255 => 143,  253 => 142,  243 => 136,  241 => 135,  237 => 134,  223 => 123,  219 => 122,  215 => 121,  211 => 120,  207 => 119,  203 => 118,  199 => 117,  195 => 116,  191 => 115,  187 => 114,  183 => 113,  179 => 112,  175 => 111,  158 => 96,  156 => 94,  148 => 88,  129 => 71,  119 => 64,  113 => 63,  106 => 58,  104 => 57,  86 => 42,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  59 => 30,  37 => 11,  25 => 1,  194 => 88,  190 => 87,  184 => 84,  180 => 83,  174 => 80,  170 => 79,  164 => 76,  160 => 75,  154 => 72,  150 => 90,  144 => 68,  140 => 67,  134 => 64,  130 => 63,  123 => 58,  120 => 57,  110 => 50,  103 => 45,  91 => 39,  85 => 36,  79 => 33,  71 => 28,  67 => 27,  61 => 26,  58 => 25,  54 => 24,  32 => 4,  29 => 3,);
    }
}