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
            
    
    ";
        }
        // line 70
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
        return array (  291 => 142,  286 => 141,  281 => 134,  275 => 133,  270 => 93,  265 => 87,  257 => 143,  254 => 142,  252 => 141,  242 => 135,  240 => 134,  236 => 133,  222 => 122,  218 => 121,  214 => 120,  210 => 119,  206 => 118,  202 => 117,  198 => 116,  194 => 115,  190 => 114,  186 => 113,  182 => 112,  178 => 111,  174 => 110,  155 => 93,  149 => 89,  106 => 58,  104 => 57,  59 => 30,  37 => 11,  25 => 1,  201 => 88,  197 => 87,  191 => 84,  187 => 83,  181 => 80,  177 => 79,  171 => 76,  167 => 75,  161 => 72,  157 => 95,  151 => 68,  147 => 87,  141 => 64,  137 => 63,  131 => 59,  128 => 70,  118 => 63,  112 => 62,  100 => 41,  94 => 38,  86 => 42,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  64 => 28,  61 => 27,  57 => 26,  32 => 3,  29 => 2,);
    }
}
