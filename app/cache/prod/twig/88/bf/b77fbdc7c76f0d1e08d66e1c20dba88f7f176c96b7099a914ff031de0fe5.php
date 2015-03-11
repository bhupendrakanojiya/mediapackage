<?php

/* ChannelBundle:Users:login.html.twig */
class __TwigTemplate_88bfb77fbdc7c76f0d1e08d66e1c20dba88f7f176c96b7099a914ff031de0fe5 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>
<style>
.vertical-offset-100{
    padding-top:100px;
}
</style>
<script src=\"http://mymaplist.com/js/vendor/TweenLite.min.js\"></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

<div class=\"container\">

    <div class=\"row vertical-offset-100\">
    \t<div class=\"col-md-4 col-md-offset-4\">
\t\t";
        // line 16
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 17
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
\t\t\t  <span class=\"sr-only\">Error:</span>
\t\t\t  ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 23
        echo "    \t\t<div class=\"panel panel-default\">
\t\t\t
\t\t\t  \t<div class=\"panel-heading\">
\t\t\t    \t<h3 class=\"panel-title\">Please sign in</h3>
\t\t\t \t</div>
\t\t\t  \t<div class=\"panel-body\">
\t\t\t    \t<form accept-charset=\"UTF-8\" method=\"POST\">
                    <fieldset>
\t\t\t    \t  \t<div class=\"form-group\">
\t\t\t    \t\t    <input class=\"form-control\" placeholder=\"Username\" name=\"username\" type=\"text\">
\t\t\t    \t\t</div>
\t\t\t    \t\t<div class=\"form-group\">
\t\t\t    \t\t\t<input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\">
\t\t\t    \t\t</div>
\t\t\t    \t\t<div class=\"checkbox\">
\t\t\t    \t    \t<label>
\t\t\t    \t    \t\t<input name=\"remember\" type=\"checkbox\" value=\"Remember Me\"> Remember Me
\t\t\t    \t    \t</label>
\t\t\t    \t    </div>
\t\t\t    \t\t<input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" value=\"Login\">
\t\t\t    \t</fieldset>
\t\t\t      \t</form>
\t\t\t    </div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script \$(document).ready(function(){
  \$(document).mousemove(function(e){
     TweenLite.to(\$('body'), 
        .5, 
        { css: 
            {
                backgroundPosition: \"\"+ parseInt(event.pageX/8) + \"px \"+parseInt(event.pageY/'12')+\"px, \"+parseInt(event.pageX/'15')+\"px \"+parseInt(event.pageY/'15')+\"px, \"+parseInt(event.pageX/'30')+\"px \"+parseInt(event.pageY/'30')+\"px\"
            }
        });
  });
});
</script>";
    }

    public function getTemplateName()
    {
        return "ChannelBundle:Users:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  43 => 20,  38 => 17,  36 => 16,  19 => 1,);
    }
}
