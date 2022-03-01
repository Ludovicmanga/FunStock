<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modals/chooseStockModal.html.twig */
class __TwigTemplate_edb3030ec328091260bdde90d1cdedb5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/chooseStockModal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/chooseStockModal.html.twig"));

        // line 1
        echo "<div class=\"modal\" id=\"choose_stock_modal\" style=\"display:none;\">
    <div class=\"modal_wrapper choose_stock_modal_stop\" aria-hidden=\"true\" roles=\"dialog\" aria-labelled-by=\"modal_title\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_stocks"]) || array_key_exists("all_stocks", $context) ? $context["all_stocks"] : (function () { throw new RuntimeError('Variable "all_stocks" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 4
            echo "            <a href=\"#\" class=\"stock_card\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "_stock_card\">
                <div id=\"cards_container\" class=\"not-clickable\">
                    <div class=\"identity_container not-clickable\">
                        <div class=\"stock_name not-clickable\" id=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "_stock_name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "companyName", [], "any", false, false, false, 7), "html", null, true);
            echo "</div>
                        <div class=\"stock_symbol not-clickable\" id=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo "_stock_symbol\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "symbol", [], "any", false, false, false, 8), "html", null, true);
            echo "</div>
                    </div>
                    <div class=\"stock_img_container not-clickable\">
                        <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "logo", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"stock_information_container not-clickable\">
                        <div class=\"stock_price not-clickable\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "currentPrice", [], "any", false, false, false, 14), "html", null, true);
            echo " €</div>
                        <div class=\"stock_last_30_days_evolution not-clickable\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "last30DaysEvolution", [], "any", false, false, false, 15), "html", null, true);
            echo " %</div>
                    </div>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "modals/chooseStockModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  82 => 15,  78 => 14,  72 => 11,  64 => 8,  58 => 7,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" id=\"choose_stock_modal\" style=\"display:none;\">
    <div class=\"modal_wrapper choose_stock_modal_stop\" aria-hidden=\"true\" roles=\"dialog\" aria-labelled-by=\"modal_title\">
        {% for stock in all_stocks %}
            <a href=\"#\" class=\"stock_card\" id=\"{{ stock.id }}_stock_card\">
                <div id=\"cards_container\" class=\"not-clickable\">
                    <div class=\"identity_container not-clickable\">
                        <div class=\"stock_name not-clickable\" id=\"{{ stock.id }}_stock_name\">{{ stock.companyName }}</div>
                        <div class=\"stock_symbol not-clickable\" id=\"{{ stock.id }}_stock_symbol\">{{ stock.symbol }}</div>
                    </div>
                    <div class=\"stock_img_container not-clickable\">
                        <img src=\"{{ stock.logo }}\">
                    </div>
                    <div class=\"stock_information_container not-clickable\">
                        <div class=\"stock_price not-clickable\">{{ stock.currentPrice }} €</div>
                        <div class=\"stock_last_30_days_evolution not-clickable\">{{ stock.last30DaysEvolution }} %</div>
                    </div>
                </div>
            </a>
        {% endfor %}
    </div>
</div>", "modals/chooseStockModal.html.twig", "C:\\xampp\\htdocs\\FunStock\\templates\\modals\\chooseStockModal.html.twig");
    }
}
