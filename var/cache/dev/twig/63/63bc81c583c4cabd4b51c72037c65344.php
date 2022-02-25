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

/* modals/battleModal.html.twig */
class __TwigTemplate_b509a48930b9013348eafdaf178f52cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/battleModal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/battleModal.html.twig"));

        // line 1
        echo "<div class=\"modal\" id=\"battle_modal\" style=\"display:none;\">
    <div class=\"modal_wrapper battle_modal_stop\" aria-hidden=\"true\" roles=\"dialog\" aria-labelled-by=\"modal_title\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["battle_form"]) || array_key_exists("battle_form", $context) ? $context["battle_form"] : (function () { throw new RuntimeError('Variable "battle_form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => "battle_form"]]);
        echo "
            <div class=\"form\" id=\"battleModal_step1\">
                <h2>On which stock do you want to bet ?</h2>
                <a class=\"battle_form_choose_stock_btn\" href=\"#choose_stock_modal\" id=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "_choose_stock_btn\">
                    <div class=\"not-clickable chosen_stock_container\" id=\"battle_form_chosen_stock_container\">
                        <div class=\"stock_name_and_symbol\">Apple (AAPL)</div>
                        <i class=\"fa-solid fa-angle-right\"></i>
                    </div>
                </a>
                <div id=\"step_btn_box_1\" class=\"step_btn_box\">
                    <i type=\"button\" id=\"battleModal_next1\" class=\"fa-solid fa-circle-arrow-right battleModal_next_button\"></i>
                </div>
            </div>
            <div class=\"form\" id=\"battleModal_step2\">
                <h2>What is your predicition ?</h2>
                <div id=\"step_2_btns_wrapper\">
                    <a href=\"#\" id=\"up\" class=\"prediction_btn_container\">
                        <div class=\"title not-clickable\">The stock value will increase</div>
                        <div class=\"prediction_icon_container not-clickable\">
                            <i class=\"fa-solid fa-hand-point-up prediction_icon not-clickable\"></i>
                        </div>
                    </a>
                    <a href=\"#\" id=\"down\" class=\"prediction_btn_container\">
                        <div class=\"title not-clickable\">The stock value will decrease</div>
                        <div class=\"prediction_icon_container not-clickable\">
                            <i class=\"fa-solid fa-hand-point-down prediction_icon not-clickable\"></i>
                        </div>
                    </a>
                </div>
                
                <div id=\"step_btn_box_2\" class=\"step_btn_box\">
                    <i type=\"button\" id=\"battleModal_back1\" class=\"fa-solid fa-circle-arrow-left battleModal_back_button\"></i>
                    <i type=\"button\" id=\"battleModal_next2\" class=\"fa-solid fa-circle-arrow-right battleModal_next_button\"></i>
                </div>
            </div>
            <div class=\"form\" id=\"battleModal_step3\">
                <h2>How much do you want to bet (in €) ?</h2>
                <div id=\"amount_and_currency\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["battle_form"]) || array_key_exists("battle_form", $context) ? $context["battle_form"] : (function () { throw new RuntimeError('Variable "battle_form" does not exist.', 41, $this->source); })()), "amount", [], "any", false, false, false, 41), 'row', ["label" => false, "id" => "battle_amount_input", "attr" => ["placeholder" => "Ex: 50 €"]]);
        echo "
                </div>
                <div id=\"step_btn_box_3\" class=\"step_btn_box\">
                    <i type=\"button\" id=\"battleModal_back2\" class=\"fa-solid fa-circle-arrow-left battleModal_back_button\"></i>
                    <button class=\"submit_btn\" type=\"submit\">Submit</button>
                </div>
            </div>
        
        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["battle_form"]) || array_key_exists("battle_form", $context) ? $context["battle_form"] : (function () { throw new RuntimeError('Variable "battle_form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "modals/battleModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 49,  91 => 41,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" id=\"battle_modal\" style=\"display:none;\">
    <div class=\"modal_wrapper battle_modal_stop\" aria-hidden=\"true\" roles=\"dialog\" aria-labelled-by=\"modal_title\">
        {{ form_start(battle_form, {'attr' : {'id' : 'battle_form'}}) }}
            <div class=\"form\" id=\"battleModal_step1\">
                <h2>On which stock do you want to bet ?</h2>
                <a class=\"battle_form_choose_stock_btn\" href=\"#choose_stock_modal\" id=\"{{ app.user.id }}_choose_stock_btn\">
                    <div class=\"not-clickable chosen_stock_container\" id=\"battle_form_chosen_stock_container\">
                        <div class=\"stock_name_and_symbol\">Apple (AAPL)</div>
                        <i class=\"fa-solid fa-angle-right\"></i>
                    </div>
                </a>
                <div id=\"step_btn_box_1\" class=\"step_btn_box\">
                    <i type=\"button\" id=\"battleModal_next1\" class=\"fa-solid fa-circle-arrow-right battleModal_next_button\"></i>
                </div>
            </div>
            <div class=\"form\" id=\"battleModal_step2\">
                <h2>What is your predicition ?</h2>
                <div id=\"step_2_btns_wrapper\">
                    <a href=\"#\" id=\"up\" class=\"prediction_btn_container\">
                        <div class=\"title not-clickable\">The stock value will increase</div>
                        <div class=\"prediction_icon_container not-clickable\">
                            <i class=\"fa-solid fa-hand-point-up prediction_icon not-clickable\"></i>
                        </div>
                    </a>
                    <a href=\"#\" id=\"down\" class=\"prediction_btn_container\">
                        <div class=\"title not-clickable\">The stock value will decrease</div>
                        <div class=\"prediction_icon_container not-clickable\">
                            <i class=\"fa-solid fa-hand-point-down prediction_icon not-clickable\"></i>
                        </div>
                    </a>
                </div>
                
                <div id=\"step_btn_box_2\" class=\"step_btn_box\">
                    <i type=\"button\" id=\"battleModal_back1\" class=\"fa-solid fa-circle-arrow-left battleModal_back_button\"></i>
                    <i type=\"button\" id=\"battleModal_next2\" class=\"fa-solid fa-circle-arrow-right battleModal_next_button\"></i>
                </div>
            </div>
            <div class=\"form\" id=\"battleModal_step3\">
                <h2>How much do you want to bet (in €) ?</h2>
                <div id=\"amount_and_currency\">
                    {{ form_row(battle_form.amount, {'label': false, 'id': 'battle_amount_input', 'attr' : {'placeholder' : 'Ex: 50 €'}}) }}
                </div>
                <div id=\"step_btn_box_3\" class=\"step_btn_box\">
                    <i type=\"button\" id=\"battleModal_back2\" class=\"fa-solid fa-circle-arrow-left battleModal_back_button\"></i>
                    <button class=\"submit_btn\" type=\"submit\">Submit</button>
                </div>
            </div>
        
        {{ form_end(battle_form) }}
    </div>
</div>", "modals/battleModal.html.twig", "C:\\xampp\\htdocs\\FunStock\\templates\\modals\\battleModal.html.twig");
    }
}
