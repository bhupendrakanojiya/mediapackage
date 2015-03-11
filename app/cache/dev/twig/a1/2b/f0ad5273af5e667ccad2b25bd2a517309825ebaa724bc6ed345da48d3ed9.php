<?php

/* ChannelBundle:Default:mapping.html.twig */
class __TwigTemplate_a12bf0ad5273af5e667ccad2b25bd2a517309825ebaa724bc6ed345da48d3ed9 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mappings"]) ? $context["mappings"] : $this->getContext($context, "mappings")));
        foreach ($context['_seq'] as $context["_key"] => $context["mapping"]) {
            // line 3
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["mapping"]);
            foreach ($context['_seq'] as $context["_key"] => $context["map"]) {
                // line 4
                echo "\t\t<tr>
\t\t\t\t<td>";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["map"], "id", array()), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("channels_show", array("id" => $this->getAttribute($context["map"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["map"], "title", array()), "html", null, true);
                echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("channels_show", array("id" => $this->getAttribute($context["map"], "id", array()))), "html", null, true);
                echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("channels_edit", array("id" => $this->getAttribute($context["map"], "id", array()))), "html", null, true);
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
        return array (  53 => 13,  47 => 10,  38 => 6,  34 => 5,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
