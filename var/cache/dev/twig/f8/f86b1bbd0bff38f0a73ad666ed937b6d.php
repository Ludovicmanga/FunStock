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

/* modals/fightModal.html.twig */
class __TwigTemplate_46510802c765e884ee5fd20e42f27f10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/fightModal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/fightModal.html.twig"));

        // line 1
        echo "<div class=\"modal\" id=\"fight_modal\" style=\"display:none;\">
    <div class=\"modal_wrapper fight_modal_stop\" aria-hidden=\"true\" roles=\"dialog\" aria-labelled-by=\"modal_title\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["battle_form"]) || array_key_exists("battle_form", $context) ? $context["battle_form"] : (function () { throw new RuntimeError('Variable "battle_form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => "fight_form"]]);
        echo "
            <div class=\"form\" id=\"fightModal_step1\">
                <p>On which stock do you want to bet ?</p>
                <div>Search...</div>
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["battle_form"]) || array_key_exists("battle_form", $context) ? $context["battle_form"] : (function () { throw new RuntimeError('Variable "battle_form" does not exist.', 7, $this->source); })()), "stock", [], "any", false, false, false, 7), 'label', ["label" => "Nom de l'action"]);
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["battle_form"]) || array_key_exists("battle_form", $context) ? $context["battle_form"] : (function () { throw new RuntimeError('Variable "battle_form" does not exist.', 8, $this->source); })()), "stock", [], "any", false, false, false, 8), 'row');
        echo "
                <div class=\"btn_box\">
                    <button type=\"button\" id=\"fightModal_next1\">Next</button>
                </div>
            </div>
            <div class=\"form\" id=\"fightModal_step2\">
                <p>What is your predicition ?</p>
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["battle_form"]) || array_key_exists("battle_form", $context) ? $context["battle_form"] : (function () { throw new RuntimeError('Variable "battle_form" does not exist.', 15, $this->source); })()), "stockVariationDirectionPrediction", [], "any", false, false, false, 15), 'label', ["label" => "Prediction"]);
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["battle_form"]) || array_key_exists("battle_form", $context) ? $context["battle_form"] : (function () { throw new RuntimeError('Variable "battle_form" does not exist.', 16, $this->source); })()), "stockVariationDirectionPrediction", [], "any", false, false, false, 16), 'row');
        echo "

                <div class=\"btn_box\">
                    <button type=\"button\" id=\"fightModal_back1\">Back</button>
                    <button type=\"button\" id=\"fightModal_next2\">Next</button>
                </div>
            </div>

            <div class=\"form\" id=\"fightModal_step3\">
                <p>How much do you want to bet ?</p>
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["battle_form"]) || array_key_exists("battle_form", $context) ? $context["battle_form"] : (function () { throw new RuntimeError('Variable "battle_form" does not exist.', 26, $this->source); })()), "stockVariationDirectionPrediction", [], "any", false, false, false, 26), 'label', ["label" => "Amount"]);
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["battle_form"]) || array_key_exists("battle_form", $context) ? $context["battle_form"] : (function () { throw new RuntimeError('Variable "battle_form" does not exist.', 27, $this->source); })()), "amount", [], "any", false, false, false, 27), 'row');
        echo "
                <div class=\"btn_box\">
                    <button type=\"button\" id=\"fightModal_back2\">Back</button>
                </div>
            </div>
        <button type=\"submit\">Submit</button>
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["battle_form"]) || array_key_exists("battle_form", $context) ? $context["battle_form"] : (function () { throw new RuntimeError('Variable "battle_form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "modals/fightModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  89 => 27,  85 => 26,  72 => 16,  68 => 15,  58 => 8,  54 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" id=\"fight_modal\" style=\"display:none;\">
    <div class=\"modal_wrapper fight_modal_stop\" aria-hidden=\"true\" roles=\"dialog\" aria-labelled-by=\"modal_title\">
        {{ form_start(battle_form, {'attr' : {'id' : 'fight_form'}}) }}
            <div class=\"form\" id=\"fightModal_step1\">
                <p>On which stock do you want to bet ?</p>
                <div>Search...</div>
                {{ form_label(battle_form.stock, 'Nom de l\\'action') }}
                {{ form_row(battle_form.stock) }}
                <div class=\"btn_box\">
                    <button type=\"button\" id=\"fightModal_next1\">Next</button>
                </div>
            </div>
            <div class=\"form\" id=\"fightModal_step2\">
                <p>What is your predicition ?</p>
                {{ form_label(battle_form.stockVariationDirectionPrediction, 'Prediction') }}
                {{ form_row(battle_form.stockVariationDirectionPrediction) }}

                <div class=\"btn_box\">
                    <button type=\"button\" id=\"fightModal_back1\">Back</button>
                    <button type=\"button\" id=\"fightModal_next2\">Next</button>
                </div>
            </div>

            <div class=\"form\" id=\"fightModal_step3\">
                <p>How much do you want to bet ?</p>
                {{ form_label(battle_form.stockVariationDirectionPrediction, 'Amount') }}
                {{ form_row(battle_form.amount) }}
                <div class=\"btn_box\">
                    <button type=\"button\" id=\"fightModal_back2\">Back</button>
                </div>
            </div>
        <button type=\"submit\">Submit</button>
        {{ form_end(battle_form) }}
    </div>
</div>", "modals/fightModal.html.twig", "C:\\xampp\\htdocs\\FunStock\\templates\\modals\\fightModal.html.twig");
    }
}
