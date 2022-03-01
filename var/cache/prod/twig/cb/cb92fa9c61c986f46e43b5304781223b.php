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

/* modals/viewBattleRequestsModal.html.twig */
class __TwigTemplate_50a677973dbb997ac66e4fa700d80ae3 extends Template
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
        echo "<div class=\"modal\" id=\"view_battle_request_modal\" style=\"display:none;\">
    <div class=\"modal_wrapper view_battle_request_modal_stop\" id=\"view_battle_request_modal_wrapper\" aria-hidden=\"true\" roles=\"dialog\" aria-labelled-by=\"modal_title\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modals/viewBattleRequestsModal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/viewBattleRequestsModal.html.twig", "C:\\xampp\\htdocs\\FunStock\\templates\\modals\\viewBattleRequestsModal.html.twig");
    }
}
