<?php

/* partials/shoppingcart_core_detail_item.html.twig */
class __TwigTemplate_5de8bb3f1d2b690707b990c5fc122f017a072be749e993e78c21499d921b9f4c extends Twig_Template
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
        $context["shoppingcart_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 2
        $context["image_size_product"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "shoppingcart", array()), "ui", array()), "image_size_product", array());
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("partials/shoppingcart_core_cart.html.twig", "partials/shoppingcart_core_detail_item.html.twig", 4)->display($context);
        // line 5
        echo "
<div id=\"shoppingcart-detail\" class=\"shoppingcart-product-container block-group\">
    <div class=\"shoppingcart-info block\">
        <div class=\"shoppingcart-thumb\">
            ";
        // line 9
        if (($context["shoppingcart_image"] ?? null)) {
            // line 10
            echo "                ";
            echo $this->getAttribute($this->getAttribute(($context["shoppingcart_image"] ?? null), "cropResize", array(0 => ($context["image_size_product"] ?? null), 1 => ($context["image_size_product"] ?? null)), "method"), "html", array(0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array()), 1 => "shoppingcart-thumb-image"), "method");
            echo "
            ";
        } else {
            // line 12
            echo "                <br><br><br>
            ";
        }
        // line 14
        echo "            <span class=\"shoppingcart-price\">
                ";
        // line 15
        $this->loadTemplate("partials/shoppingcart_core_price.html.twig", "partials/shoppingcart_core_detail_item.html.twig", 15)->display(array_merge($context, array("price" => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "price", array()))));
        // line 16
        echo "            </span>
        </div>
        <p>
            <div class=\"shoppingcart-quantity-chooser\">
                <label for=\"js__shoppingcart__quantity\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SHOPPINGCART.QUANTITY"));
        echo "</label>
                <input type=\"text\" class=\"small\" id=\"js__shoppingcart__quantity\" placeholder=\"1\" value=\"1\" />
            </div>

            ";
        // line 24
        $context["product"] = array("title" => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array()), "id" => md5($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array())), "price" => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "price", array()), "image" => ($context["shoppingcart_image"] ?? null), "url" => $this->getAttribute(($context["page"] ?? null), "url", array()));
        // line 25
        echo "            ";
        $this->loadTemplate("partials/shoppingcart_core_add_to_cart.html.twig", "partials/shoppingcart_core_detail_item.html.twig", 25)->display(array_merge($context, array("product" => ($context["product"] ?? null))));
        // line 26
        echo "        </p>
    </div>
    <div class=\"shoppingcart-details block\">
        <h1>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array()));
        echo "</h1>
        <p>";
        // line 30
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/shoppingcart_core_detail_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  74 => 29,  69 => 26,  66 => 25,  64 => 24,  57 => 20,  51 => 16,  49 => 15,  46 => 14,  42 => 12,  36 => 10,  34 => 9,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set shoppingcart_image = page.media.images|first %}
{% set image_size_product = config.plugins.shoppingcart.ui.image_size_product %}

{% include 'partials/shoppingcart_core_cart.html.twig' %}

<div id=\"shoppingcart-detail\" class=\"shoppingcart-product-container block-group\">
    <div class=\"shoppingcart-info block\">
        <div class=\"shoppingcart-thumb\">
            {% if shoppingcart_image %}
                {{ shoppingcart_image.cropResize(image_size_product, image_size_product).html(page.header.title, 'shoppingcart-thumb-image')|raw }}
            {% else %}
                <br><br><br>
            {% endif %}
            <span class=\"shoppingcart-price\">
                {% include 'partials/shoppingcart_core_price.html.twig' with { price: page.header.price } %}
            </span>
        </div>
        <p>
            <div class=\"shoppingcart-quantity-chooser\">
                <label for=\"js__shoppingcart__quantity\">{{ 'PLUGIN_SHOPPINGCART.QUANTITY'|t|e }}</label>
                <input type=\"text\" class=\"small\" id=\"js__shoppingcart__quantity\" placeholder=\"1\" value=\"1\" />
            </div>

            {% set product = { 'title': page.header.title, 'id': md5(page.header.title), 'price': page.header.price, 'image': shoppingcart_image, 'url': page.url } %}
            {% include 'partials/shoppingcart_core_add_to_cart.html.twig' with { product: product } %}
        </p>
    </div>
    <div class=\"shoppingcart-details block\">
        <h1>{{ page.header.title|e }}</h1>
        <p>{{ page.content|raw }}</p>
    </div>
</div>
", "partials/shoppingcart_core_detail_item.html.twig", "C:\\wamp\\www\\Grav\\user\\plugins\\shoppingcart\\templates\\partials\\shoppingcart_core_detail_item.html.twig");
    }
}
