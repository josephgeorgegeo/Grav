<?php

/* forms/fields/display/display.html.twig */
class __TwigTemplate_35e20264b261cfffb1458719b5af78400bf86c616d44c5eaf4f1fe817453ac9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/display/display.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"form-display-wrapper ";
        echo $this->getAttribute(($context["field"] ?? null), "size", array());
        echo "\" ";
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        echo ">
        ";
        // line 5
        if ($this->getAttribute(($context["field"] ?? null), "markdown", array())) {
            // line 6
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 7
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter(call_user_func_array($this->env->getFilter('tu')->getCallable(), array($this->getAttribute(($context["field"] ?? null), "content", array()))));
                echo "
            ";
            } else {
                // line 9
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "content", array())));
                echo "
            ";
            }
            // line 11
            echo "        ";
        } else {
            // line 12
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 13
                echo "                ";
                echo call_user_func_array($this->env->getFilter('tu')->getCallable(), array($this->getAttribute(($context["field"] ?? null), "content", array())));
                echo "
            ";
            } else {
                // line 15
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "content", array()));
                echo "
            ";
            }
            // line 17
            echo "        ";
        }
        // line 18
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/display/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  77 => 17,  71 => 15,  65 => 13,  62 => 12,  59 => 11,  53 => 9,  47 => 7,  44 => 6,  42 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    <div class=\"form-display-wrapper {{ field.size }}\" {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}>
        {% if field.markdown %}
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{ field.content|tu|markdown|raw }}
            {% else %}
                {{ field.content|t|markdown|raw }}
            {% endif %}
        {% else %}
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{ field.content|tu|raw }}
            {% else %}
                {{ field.content|t|raw }}
            {% endif %}
        {% endif %}
    </div>
{% endblock %}
", "forms/fields/display/display.html.twig", "C:\\wamp\\www\\Grav\\user\\plugins\\form\\templates\\forms\\fields\\display\\display.html.twig");
    }
}
