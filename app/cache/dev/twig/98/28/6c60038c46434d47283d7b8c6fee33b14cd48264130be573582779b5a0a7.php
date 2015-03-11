<?php

/* ChannelBundle:Default:index.html.twig */
class __TwigTemplate_98286c60038c46434d47283d7b8c6fee33b14cd48264130be573582779b5a0a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
";
        // line 3
        $this->displayBlock('heading', $context, $blocks);
        // line 8
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 10
        echo "<body>
";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "</body>
</html>
";
        // line 79
        $this->displayBlock('javascript', $context, $blocks);
    }

    // line 3
    public function block_heading($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/channel/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/channel/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "\t<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Menu baar start from here with mobile resolutions -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Virgin Media</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
\t  ";
        // line 28
        if (array_key_exists("packages", $context)) {
            // line 29
            echo "         <li><a href=\"#\">
\t\t<label>Select Package</label>
\t\t <select name='package' id='package'>
\t\t ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["packages"]) ? $context["packages"] : $this->getContext($context, "packages")));
            foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
                // line 33
                echo "\t\t <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["package"], "abr", array()), "html", null, true);
                echo "\" >  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["package"], "package", array()), "html", null, true);
                echo " </option>
\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t </select>
\t\t</a></li>
\t\t";
        }
        // line 38
        echo "\t\t
\t\t";
        // line 39
        if (array_key_exists("regions", $context)) {
            // line 40
            echo "        <li><a href=\"#\"><label class=''>Select Region</label>
\t\t\t<select name='region' id='regions'>
\t\t\t ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 43
                echo "\t\t\t <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
                echo "\" >  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "region", array()), "html", null, true);
                echo " </option>
\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t </select></a></li>
        ";
        }
        // line 47
        echo "      <ul class=\"nav navbar-nav navbar-right\">
\t  
\t \t  ";
        // line 49
        $context["username"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "username"), "method");
        // line 50
        echo "\t\t  ";
        if ((isset($context["username"]) ? $context["username"] : $this->getContext($context, "username"))) {
            // line 51
            echo "       <li> Welcome ";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
            echo " </li>
\t   <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("channel_homepage");
            echo "\">Home</a></li>
\t\t<li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("users_logout");
            echo "\">Logout</a></li>
\t\t";
        } else {
            // line 55
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("channel_homepage");
            echo "\">Home</a></li>
\t\t <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("users_login");
            echo "\">Login</a></li>
\t\t
\t\t";
        }
        // line 59
        echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Menu <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("channels_new");
        echo "\">Create Channels</a></li>
\t\t\t<li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("channels");
        echo "\">Channels List</a></li>
            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("channel_homepage");
        echo "\">Packages</a></li>
\t\t\t <li class=\"divider\"></li>
            <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\">Users</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
\t";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
    }

    // line 79
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ChannelBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  215 => 79,  210 => 75,  198 => 66,  193 => 64,  189 => 63,  185 => 62,  180 => 59,  174 => 56,  169 => 55,  164 => 53,  160 => 52,  155 => 51,  152 => 50,  150 => 49,  146 => 47,  142 => 45,  131 => 43,  127 => 42,  123 => 40,  121 => 39,  118 => 38,  113 => 35,  102 => 33,  98 => 32,  93 => 29,  91 => 28,  73 => 12,  70 => 11,  65 => 8,  59 => 6,  53 => 4,  50 => 3,  46 => 79,  42 => 77,  40 => 75,  37 => 74,  35 => 11,  32 => 10,  30 => 8,  28 => 3,  24 => 1,);
    }
}
