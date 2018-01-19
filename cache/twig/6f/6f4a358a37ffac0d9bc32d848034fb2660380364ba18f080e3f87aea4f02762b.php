<?php

/* partials/shoppingcart_core_add_to_cart.html.twig */
class __TwigTemplate_991c35fcf431687fe6d5b6e8ab07875637c7833dab6042992b40b1e9cc95396c extends Twig_Template
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
        $context["price"] = twig_number_format_filter($this->env, $this->getAttribute(($context["product"] ?? null), "price", array()), 2, ".", "");
        // line 2
        $context["image_size_cart"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "shoppingcart", array()), "ui", array()), "image_size_cart", array());
        // line 3
        echo "
";
        // line 4
        echo ($context["shoppingcart_output_page_product_before_add_to_cart"] ?? null);
        echo "

<button type=\"button\" class=\"button js__shoppingcart__button-add-to-cart\" data-id=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "id", array()));
        echo "\">
    <i class=\"fa fa-shopping-cart\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SHOPPINGCART.ADD_TO_CART"));
        echo "
</button>

<script>
    (function() {
        var currentProduct = {
            title: \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "title", array()));
        echo "\",
            id: \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "id", array()));
        echo "\",
            formatted_price: \"";
        // line 15
        echo twig_escape_filter($this->env, ($context["price"] ?? null));
        echo "\",
            price: \"";
        // line 16
        echo twig_escape_filter($this->env, ($context["price"] ?? null));
        echo "\",
            image: \"";
        // line 17
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "image", array()), "cropResize", array(0 => ($context["image_size_cart"] ?? null), 1 => ($context["image_size_cart"] ?? null)), "method"), "url", array());
        echo "\",
            url: \"";
        // line 18
        echo $this->getAttribute(($context["product"] ?? null), "url", array());
        echo "\"
        };

        // Checks if page is a list of products or single product
        if (ShoppingCart.currentPageIsProducts) {
            ShoppingCart.currentProducts.push(currentProduct);
        } else {
            ShoppingCart.currentProduct = currentProduct;
            ShoppingCart.currentPageIsProduct = true;
        }
    }());
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/shoppingcart_core_add_to_cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  35 => 7,  31 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set price = product.price|number_format(2, '.', '') %}
{% set image_size_cart = config.plugins.shoppingcart.ui.image_size_cart %}

{{ shoppingcart_output_page_product_before_add_to_cart|raw }}

<button type=\"button\" class=\"button js__shoppingcart__button-add-to-cart\" data-id=\"{{product.id|e}}\">
    <i class=\"fa fa-shopping-cart\"></i> {{ 'PLUGIN_SHOPPINGCART.ADD_TO_CART'|t|e }}
</button>

<script>
    (function() {
        var currentProduct = {
            title: \"{{ product.title|e }}\",
            id: \"{{ product.id|e }}\",
            formatted_price: \"{{ price|e }}\",
            price: \"{{ price|e }}\",
            image: \"{{ product.image.cropResize(image_size_cart, image_size_cart).url|raw }}\",
            url: \"{{ product.url|raw }}\"
        };

        // Checks if page is a list of products or single product
        if (ShoppingCart.currentPageIsProducts) {
            ShoppingCart.currentProducts.push(currentProduct);
        } else {
            ShoppingCart.currentProduct = currentProduct;
            ShoppingCart.currentPageIsProduct = true;
        }
    }());
</script>
", "partials/shoppingcart_core_add_to_cart.html.twig", "C:\\wamp\\www\\Grav\\user\\plugins\\shoppingcart\\templates\\partials\\shoppingcart_core_add_to_cart.html.twig");
    }
}
