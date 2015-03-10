<?php

/* ChannelBundle:Default:front.html.twig */
class __TwigTemplate_a158fd1a1fd9e1984ccbfed6b9fb3e6af042e847d1f3f7a422ff7300d019672a extends Twig_Template
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
            'heading' => array($this, 'block_heading'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
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
    public function block_heading($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>
";
    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "<table class=\"table table-striped\" id='table_data'>
<tr><td>Channel ID</td><td>Channel Title </td><td>Update</td></tr>
 ";
        // line 14
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo " 
            <tr>
\t\t\t\t<td>";
            // line 17
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 18
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("channels_show", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
            echo "\">";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "title", array()), "html", null, true);
            echo "</a></td>
                            
                <td> 
                <ul>
                    <li>
                        <a href=\"";
            // line 23
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("channels_show", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 26
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("channels_edit", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
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
        // line 32
        echo "\t\t</table>
\t
";
    }

    // line 35
    public function block_javascript($context, array $blocks = array())
    {
        // line 36
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/channel/js/channel.js"), "html", null, true);
        echo "\"></script>
<script language='javascript'>

</script>
";
    }

    public function getTemplateName()
    {
        return "ChannelBundle:Default:front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  113 => 35,  107 => 32,  94 => 26,  87 => 23,  75 => 18,  70 => 17,  66 => 15,  61 => 14,  57 => 12,  54 => 11,  49 => 8,  42 => 4,  39 => 3,  11 => 1,);
    }
}
