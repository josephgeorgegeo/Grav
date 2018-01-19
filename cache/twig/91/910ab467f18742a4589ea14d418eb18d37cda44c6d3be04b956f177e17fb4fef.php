<?php

/* forms/fields/checkbox/checkbox.html.twig */
class __TwigTemplate_6a1d9a7ab02cb7e9c012dc252b816368838356d342bd89330496d1eaa4819b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/checkbox/checkbox.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
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
    public function block_label($context, array $blocks = array())
    {
    }

    // line 6
    public function block_input($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["id"] = (((($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", array()), $this->getAttribute(($context["field"] ?? null), "name", array()))) : ($this->getAttribute(($context["field"] ?? null), "name", array()))) . "-") . ($context["key"] ?? null));
        // line 8
        echo "    <div class=\"";
        echo ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-input-wrapper"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", array());
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array());
        echo "\">
        <input
            ";
        // line 11
        echo "            name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())));
        echo "\"
            value=\"";
        // line 12
        echo twig_join_filter(($context["value"] ?? null), ", ");
        echo "\"
            type=\"checkbox\"
            ";
        // line 14
        if ((($context["value"] ?? null) == true)) {
            echo " checked=\"checked\" ";
        }
        // line 15
        echo "
            ";
        // line 17
        echo "            ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 26
        echo "            />
        <label style=\"display:inline;\" class=\"inline\" for=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["id"] ?? null));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "label", array())));
        echo " ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "</label>
    </div>
";
    }

    // line 17
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 18
        echo "                id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null));
        echo "\"
                ";
        // line 19
        if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute(($context["field"] ?? null), "classes", array());
            echo "\" ";
        }
        // line 20
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 21
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 22
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 23
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 24
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 25
        echo "            ";
    }

    public function getTemplateName()
    {
        return "forms/fields/checkbox/checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 25,  121 => 24,  116 => 23,  111 => 22,  106 => 21,  99 => 20,  93 => 19,  88 => 18,  85 => 17,  74 => 27,  71 => 26,  68 => 17,  65 => 15,  61 => 14,  56 => 12,  51 => 11,  41 => 8,  38 => 7,  35 => 6,  30 => 3,  11 => 1,);
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

{% block label %}
{% endblock %}

{% block input %}
    {% set id = field.id|default(field.name) ~ '-' ~ key %}
    <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
        <input
            {# required attribute structures #}
            name=\"{{ (scope ~ field.name)|fieldName }}\"
            value=\"{{ value|join(', ') }}\"
            type=\"checkbox\"
            {% if value == true %} checked=\"checked\" {% endif %}

            {# input attribute structures #}
            {% block input_attributes %}
                id=\"{{ id|e }}\"
                {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
            {% endblock %}
            />
        <label style=\"display:inline;\" class=\"inline\" for=\"{{ id|e }}\">{{ field.label|t|e }} {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}</label>
    </div>
{% endblock %}
", "forms/fields/checkbox/checkbox.html.twig", "C:\\wamp\\www\\Grav\\user\\plugins\\form\\templates\\forms\\fields\\checkbox\\checkbox.html.twig");
    }
}
