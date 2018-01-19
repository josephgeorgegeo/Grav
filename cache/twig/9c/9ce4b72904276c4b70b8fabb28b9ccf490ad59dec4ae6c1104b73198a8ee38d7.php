<?php

/* shoppingcart_product.html.twig */
class __TwigTemplate_563b69467818694587b9e0a003b47315602e6f5f8e7042efb421aa8f9c0e217b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/shoppingcart_core_base.html.twig", "shoppingcart_product.html.twig", 1);
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
        echo "
    ";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <div class=\"content-wrapper\">
        ";
        // line 8
        $this->loadTemplate("partials/shoppingcart_core_detail_item.html.twig", "shoppingcart_product.html.twig", 8)->display($context);
        // line 9
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "shoppingcart_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

    {{ parent() }}

    <div class=\"content-wrapper\">
        {% include 'partials/shoppingcart_core_detail_item.html.twig' %}
    </div>
{% endblock %}
", "shoppingcart_product.html.twig", "C:\\wamp\\www\\Grav\\user\\plugins\\shoppingcart\\templates\\shoppingcart_product.html.twig");
    }
}
