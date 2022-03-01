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
class __TwigTemplate_ef208b6333ccde11046cf2942f1af473 extends Template
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
        // line 1
        echo "<div class=\"modal\" id=\"battle_modal\" style=\"display:none;\">
    <div class=\"modal_wrapper battle_modal_stop\" aria-hidden=\"true\" roles=\"dialog\" aria-labelled-by=\"modal_title\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["battle_form"] ?? null), 'form_start', ["attr" => ["id" => "battle_form"]]);
        echo "
            <div class=\"form\" id=\"battleModal_step1\">
                <h2>On which stock do you want to bet ?</h2>
                <a class=\"battle_form_choose_stock_btn\" href=\"#choose_stock_modal\" id=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["battle_form"] ?? null), "amount", [], "any", false, false, false, 41), 'row', ["label" => false, "id" => "battle_amount_input", "attr" => ["placeholder" => "Ex: 50 €"]]);
        echo "
                </div>
                <div id=\"step_btn_box_3\" class=\"step_btn_box\">
                    <i type=\"button\" id=\"battleModal_back2\" class=\"fa-solid fa-circle-arrow-left battleModal_back_button\"></i>
                    <button class=\"submit_btn\" type=\"submit\">Submit</button>
                </div>
            </div>
        
        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["battle_form"] ?? null), 'form_end');
        echo "
    </div>
</div>";
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
        return array (  96 => 49,  85 => 41,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/battleModal.html.twig", "C:\\xampp\\htdocs\\FunStock\\templates\\modals\\battleModal.html.twig");
    }
}
