<?php

/* ChannelBundle:Channels:edit.html.twig */
class __TwigTemplate_2c382971faf6efa919f19772d748230ff4382f523dec4ef8189e3e2a3ee0c0df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ChannelBundle:Default:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ChannelBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Channels edit</h1>

    ";
        // line 7
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_edit_form_, 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("channels");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 15
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_delete_form_, 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ChannelBundle:Channels:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  51 => 11,  43 => 7,  39 => 5,  36 => 3,  11 => 1,);
    }
}
