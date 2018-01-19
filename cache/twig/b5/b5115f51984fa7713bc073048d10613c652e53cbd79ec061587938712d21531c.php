<?php

/* partials/shoppingcart_core_base.html.twig */
class __TwigTemplate_220709ab00b367c892e86d1850ce12cc6702f527ce93db69512213f25bfc2ed3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partials/shoppingcart_core_base.html.twig", 1);
        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 9
            echo "        ";
            try {
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/shoppingcart_core_base.html.twig", 9)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/shoppingcart_core_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block footer %}
    {{ parent() }}
{% endblock %}

{% block content %}
    {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' ignore missing %}
    {% endif %}
{% endblock %}
", "partials/shoppingcart_core_base.html.twig", "C:\\wamp\\www\\Grav\\user\\plugins\\shoppingcart\\templates\\partials\\shoppingcart_core_base.html.twig");
    }
}
