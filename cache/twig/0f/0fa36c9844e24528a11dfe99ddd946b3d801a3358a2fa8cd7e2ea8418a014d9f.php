<?php

/* shoppingcart_checkout.html.twig */
class __TwigTemplate_62ba8decc15e302a75f6c5d68f1c3467166c0a13908652929023824d563f929a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/shoppingcart_core_base.html.twig", "shoppingcart_checkout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/shoppingcart_core_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("partials/shoppingcart_core_cart.html.twig", "shoppingcart_checkout.html.twig", 4)->display($context);
        // line 5
        echo "
    <div class=\"shoppingcart-container js__checkout__block\">
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SHOPPINGCART.CHECKOUT_PAGE_TITLE"));
        echo "</h1>
        ";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        ";
        // line 9
        $context["form"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "shoppingcart", array()), "checkout_form", array());
        // line 10
        echo "        ";
        $this->loadTemplate("forms/default/form.html.twig", "shoppingcart_checkout.html.twig", 10)->display($context);
        // line 11
        echo "    </div>

    <script>
        (function() {
            ShoppingCart.checkout_form_fields = ";
        // line 15
        echo json_encode($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "shoppingcart", array()), "checkout_form", array()), "fields", array()));
        echo ";
        }());
    </script>

";
    }

    public function getTemplateName()
    {
        return "shoppingcart_checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  51 => 11,  48 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/shoppingcart_core_base.html.twig' %}

{% block content %}
    {% include 'partials/shoppingcart_core_cart.html.twig' %}

    <div class=\"shoppingcart-container js__checkout__block\">
        <h1>{{ 'PLUGIN_SHOPPINGCART.CHECKOUT_PAGE_TITLE'|t|e }}</h1>
        {{ page.content|raw }}
        {% set form = config.plugins.shoppingcart.checkout_form %}
        {% include 'forms/default/form.html.twig' %}
    </div>

    <script>
        (function() {
            ShoppingCart.checkout_form_fields = {{ json_encode(config.plugins.shoppingcart.checkout_form.fields)|raw }};
        }());
    </script>

{% endblock %}
", "shoppingcart_checkout.html.twig", "C:\\wamp\\www\\Grav\\user\\plugins\\shoppingcart\\templates\\shoppingcart_checkout.html.twig");
    }
}
