<?php

/* ChannelBundle:Users:index.html.twig */
class __TwigTemplate_f7f5922209b3240d038843e2e9cdbb9ba317eec4f547ffa01dbbc983edc7dced extends Twig_Template
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
        // line 4
        echo "<h1>Users list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Status</th>
                <th>Created</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_show", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
            echo "\">";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "username", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "created", array())) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 28
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_show", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 31
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("users_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "ChannelBundle:Users:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  117 => 37,  104 => 31,  97 => 28,  89 => 24,  81 => 23,  76 => 22,  71 => 21,  63 => 20,  60 => 19,  55 => 18,  39 => 4,  36 => 3,  11 => 1,);
    }
}
