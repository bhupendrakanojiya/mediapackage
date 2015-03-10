<?php

/* ChannelBundle:Default:mapping.html.twig */
class __TwigTemplate_00c7d962f668a22b4d58f2a63150df87b977e5feeaf9a4cb1b23f1174b84c1e3 extends Twig_Template
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
        echo "<tr><td>Channel ID</td><td>Channel Title </td><td>Update</td><tr>
";
        // line 2
        if (isset($context["mappings"])) { $_mappings_ = $context["mappings"]; } else { $_mappings_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_mappings_);
        foreach ($context['_seq'] as $context["_key"] => $context["mapping"]) {
            // line 3
            echo "\t";
            if (isset($context["mapping"])) { $_mapping_ = $context["mapping"]; } else { $_mapping_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_mapping_);
            foreach ($context['_seq'] as $context["_key"] => $context["map"]) {
                // line 4
                echo "\t\t<tr>
\t\t\t\t<td>";
                // line 5
                if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_map_, "id", array()), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 6
                if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("channels_show", array("id" => $this->getAttribute($_map_, "id", array()))), "html", null, true);
                echo "\">";
                if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_map_, "title", array()), "html", null, true);
                echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
                // line 10
                if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("channels_show", array("id" => $this->getAttribute($_map_, "id", array()))), "html", null, true);
                echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 13
                if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("channels_edit", array("id" => $this->getAttribute($_map_, "id", array()))), "html", null, true);
                echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['map'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mapping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ChannelBundle:Default:mapping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  52 => 10,  41 => 6,  36 => 5,  33 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
