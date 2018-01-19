<?php

/* partials/shoppingcart_core_price.html.twig */
class __TwigTemplate_a2aa5a1061eb2f6339a05c6c94c9e205e6a8d0789064794f3544ee6bde6aac53 extends Twig_Template
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
        $context["formatted_price"] = twig_number_format_filter($this->env, ($context["price"] ?? null), 2, ".", "");
        // line 2
        if (((is_string($__internal_75997f2c515040a69c11d20b2584a297a3f40dd12f2ece1c155ca66145381943 = ($context["formatted_price"] ?? null)) && is_string($__internal_f5789506a82560f69ac468d22ec9b956f6a12ffa44acd6cb864765b36b1ecb11 = ".00") && ('' === $__internal_f5789506a82560f69ac468d22ec9b956f6a12ffa44acd6cb864765b36b1ecb11 || $__internal_f5789506a82560f69ac468d22ec9b956f6a12ffa44acd6cb864765b36b1ecb11 === substr($__internal_75997f2c515040a69c11d20b2584a297a3f40dd12f2ece1c155ca66145381943, -strlen($__internal_f5789506a82560f69ac468d22ec9b956f6a12ffa44acd6cb864765b36b1ecb11)))) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "shoppingcart", array()), "ui", array()), "remove_cents_if_zero", array()))) {
            // line 3
            echo "    ";
            $context["formatted_price"] = twig_number_format_filter($this->env, ($context["price"] ?? null), 0);
        }
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "shoppingcart", array()), "ui", array()), "currency_symbol_position", array()) == "after")) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, ($context["formatted_price"] ?? null));
            echo twig_escape_filter($this->env, ($context["currency_symbol"] ?? null));
            echo "
";
        } else {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, ($context["currency_symbol"] ?? null));
            echo twig_escape_filter($this->env, ($context["formatted_price"] ?? null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "partials/shoppingcart_core_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set formatted_price = price|number_format(2, '.', '') %}
{% if formatted_price ends with '.00' and config.plugins.shoppingcart.ui.remove_cents_if_zero %}
    {% set formatted_price = price|number_format(0) %}
{% endif %}
{% if config.plugins.shoppingcart.ui.currency_symbol_position == 'after' %}
    {{ formatted_price|e }}{{ currency_symbol|e }}
{% else %}
    {{ currency_symbol|e }}{{ formatted_price|e }}
{% endif %}", "partials/shoppingcart_core_price.html.twig", "C:\\wamp\\www\\Grav\\user\\plugins\\shoppingcart\\templates\\partials\\shoppingcart_core_price.html.twig");
    }
}
