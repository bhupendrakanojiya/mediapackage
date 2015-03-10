<?php

/* ChannelBundle:Users:show.html.twig */
class __TwigTemplate_772487a0e6f4040de8dd70e7f376f90a3f6c37f8273db1a60095c6bf9e1ff711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Users</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Username</th>
                <td>";
        // line 10
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 14
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 18
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 22
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "created", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 26
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 42
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_delete_form_, 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ChannelBundle:Users:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 42,  98 => 38,  90 => 33,  79 => 26,  71 => 22,  63 => 18,  55 => 14,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
