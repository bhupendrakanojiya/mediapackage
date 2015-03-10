<?php

/* ChannelBundle:Channels:new.html.twig */
class __TwigTemplate_72183d335a17ff10308d7b838e88df6024f91fcb57af68ecddc3873afcc9b67e extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "\t
   
";
    }

    public function getTemplateName()
    {
        return "ChannelBundle:Channels:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  39 => 3,  35 => 1,  33 => 2,  11 => 1,);
    }
}
