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

/* main/index.html.twig */
class __TwigTemplate_bcba1596980ce300f0466f506d581f3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "FunStock !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "    
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_battles"]) || array_key_exists("all_battles", $context) ? $context["all_battles"] : (function () { throw new RuntimeError('Variable "all_battles" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["battle"]) {
            // line 10
            echo "        <div style=\"display:none;\">
            <div battle_preview_amount id=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["battle"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "_battle_preview_amount\">
                <span style=\"font-weight: bold;\">Amount of the fight :</span> ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["battle"], "amount", [], "any", false, false, false, 12), "html", null, true);
            echo " €
            </div>
            <div id=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["battle"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "_battle_preview_stock\">
                <span style=\"font-weight: bold;\">Stock :</span> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["battle"], "stock", [], "any", false, false, false, 15), "html", null, true);
            echo "
            </div>
            <div id=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["battle"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "_battle_preview_variation_direction_prediction\">
                <span style=\"font-weight: bold;\">Prediction :</span> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["battle"], "stockVariationDirectionPrediction", [], "any", false, false, false, 18), "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['battle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"main_boxes_row\">
        <div class=\"main_box\">
            <div class=\"main_box_title_container\">
                <h1 class=\"main_box_title\">Your stats</h1>
            </div>
            <div id=\"stats_buttons_container\">
                    <a href=\"#wins_chart\" class=\"stats_button\" id=\"wins_stats_button\">Wins / defeats</a>
                    <a href=\"#stock_valuation_chart\" class=\"stats_button\" id=\"stock_valuation_stats_button\">My stock valuation</a>
                </div>
                <div id=\"stats_chart_container\">
                    <canvas class=\"stats_chart\" id=\"wins_chart\"></canvas>
                </div>
        </div>
        <div class=\"main_box\">
            <div class=\"main_box_title_container\">
                <h1 class=\"main_box_title\">Challenge your friends</h1>
            </div>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_users_but_logged_one"]) || array_key_exists("all_users_but_logged_one", $context) ? $context["all_users_but_logged_one"] : (function () { throw new RuntimeError('Variable "all_users_but_logged_one" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 41
            echo "            <div id=\"battle_friends_box_wrapper\">
                <div class=\"profile_box_container\">
                    <div class=\"profile_picture_container\">
                        <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["user"], "picture", [], "any", false, false, false, 44)), "html", null, true);
            echo "\">
                    </div>
                    <h3>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 46), "html", null, true);
            echo "</h3>
                </div>
                <div class=\"stock_valuation_box_container\">
                    <h3>Victory rate</h3>
                    <div class=\"progress_bar\">
                        <div class=\"progress-done\" data-done=";
            // line 51
            if (((twig_get_attribute($this->env, $this->source, $context["user"], "numberOfLostBattles", [], "any", false, false, false, 51) + twig_get_attribute($this->env, $this->source, $context["user"], "numberOfWinnedBattles", [], "any", false, false, false, 51)) != 0)) {
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "numberOfWinnedBattles", [], "any", false, false, false, 51) / (twig_get_attribute($this->env, $this->source, $context["user"], "numberOfLostBattles", [], "any", false, false, false, 51) + twig_get_attribute($this->env, $this->source, $context["user"], "numberOfWinnedBattles", [], "any", false, false, false, 51))) * 100), "html", null, true);
            } else {
                echo "\"100\"";
            }
            echo "></div>
                    </div>
                </div>
                <div class=\"last_battles_box\">
                    <div class=\"battle_stats_box\" id=\"winned_battles_box\">
                        <div>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "numberOfWinnedBattles", [], "any", false, false, false, 56), "html", null, true);
            echo " wins</div>
                        <i class=\"fa-solid fa-trophy\"></i>
                    </div>
                    <div class=\"battle_stats_box\" id=\"lost_battles_box\">
                        <div>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "numberOfLostBattles", [], "any", false, false, false, 60), "html", null, true);
            echo " defeats</div>
                        <i class=\"fa-solid fa-skull-crossbones\"></i>
                    </div>
                </div>
                <div class=\"battle_btn_container\">
                    <a class=\"battle_btn\" href=\"#battle_modal\" id=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "_battle_btn\">
                    <div class=\"fight_text not-clickable\">Fight</div>
                        <i class=\"fa-solid fa-circle-radiation not-clickable\"></i>
                    </a>
                </div>  
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>
    </div>
    <div class=\"main_boxes_row\">
        <div class=\"main_box\">
            <div class=\"main_box_title_container\">
                <h1 class=\"main_box_title\">My battle requests</h1>
            </div>
            ";
        // line 79
        if ((isset($context["pending_inbound_battle_requests"]) || array_key_exists("pending_inbound_battle_requests", $context) ? $context["pending_inbound_battle_requests"] : (function () { throw new RuntimeError('Variable "pending_inbound_battle_requests" does not exist.', 79, $this->source); })())) {
            // line 80
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pending_inbound_battle_requests"]) || array_key_exists("pending_inbound_battle_requests", $context) ? $context["pending_inbound_battle_requests"] : (function () { throw new RuntimeError('Variable "pending_inbound_battle_requests" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pending_inbound_battle_request"]) {
                // line 81
                echo "                    <div class=\"battle_request_box_wrapper\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pending_inbound_battle_request"], "id", [], "any", false, false, false, 81), "html", null, true);
                echo "_battle_request_box_wrapper\">
                        <div class=\"profile_box_container\">
                            <div class=\"profile_picture_container\">
                                <img src=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pending_inbound_battle_request"], "attacker", [], "any", false, false, false, 84), "picture", [], "any", false, false, false, 84)), "html", null, true);
                echo "\">
                            </div>
                            <h3>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pending_inbound_battle_request"], "attacker", [], "any", false, false, false, 86), "firstName", [], "any", false, false, false, 86), "html", null, true);
                echo "</h3>
                        </div>
                        <a href=\"#view_battle_request_modal\" class=\"view_battle_request_btn battle_request_btn\" id=\"";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pending_inbound_battle_request"], "id", [], "any", false, false, false, 88), "html", null, true);
                echo "_view_battle_request_btn\">
                            <div class=\"not-clickable\">View the challenge</div>
                        </a>
                        <a href=\"#\" class=\"accept_battle_request_btn battle_request_btn\" id=\"";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pending_inbound_battle_request"], "id", [], "any", false, false, false, 91), "html", null, true);
                echo "_accept_battle_request_btn\">
                            <span class=\"not-clickable\">Accept</span>
                            <i class=\"fa-solid fa-check not-clickable\"></i>
                        </a>
                        <a href=\"#\" class=\"decline_battle_request_btn battle_request_btn\" id=\"";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pending_inbound_battle_request"], "id", [], "any", false, false, false, 95), "html", null, true);
                echo "_decline_battle_request_btn\">
                            <span class=\"not-clickable\">Decline</span>
                            <i class=\"fa-solid fa-check not-clickable\"></i>
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pending_inbound_battle_request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            ";
        } else {
            // line 102
            echo "            <div>You don't have battle requests. Don't wait for their move, <a href=\"#battle_friends_box_wrapper\">attack your friends !</a> </div>
            ";
        }
        // line 104
        echo "        </div>
        <div class=\"main_box\">
            <div class=\"main_box_title_container\">
                <h1 class=\"main_box_title\">Buy stocks</h1>
            </div>
            <div id=\"buy_sell_stock_box_wrapper\">
                ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["buy_or_sell_stocks_form"]) || array_key_exists("buy_or_sell_stocks_form", $context) ? $context["buy_or_sell_stocks_form"] : (function () { throw new RuntimeError('Variable "buy_or_sell_stocks_form" does not exist.', 110, $this->source); })()), 'form_start', ["attr" => ["id" => "buy_or_sell_stocks_form"]]);
        echo "
                    <div id=\"amount_and_currency\">
                        <div id=\"currency_symbol\">€</div>
                        <input type=\"number\" min=\"0\" name=\"stock_amount\" id=\"stock_amount_input\" value=\"0\">
                    </div>
                    <div id=\"buy_stock_container\">
                        <a class=\"buy_or_sell_stocks_form_choose_stock_btn\" href=\"#choose_stock_modal\" id=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116), "html", null, true);
        echo "_form_choose_stock_btn\">
                            <div class=\"not-clickable chosen_stock_container\" id=\"buy_or_sell_stocks_form_chosen_stock_container\">
                                <div class=\"stock_name_and_symbol\">Apple (AAPL)</div>
                                <i class=\"fa-solid fa-angle-right\"></i>
                            </div>
                        </a>
                    </div>
                    <div id=\"submit_btn_container\">
                        <button id=\"submit_btn\" type=\"submit\">Confirm</button>
                    </div>
                ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["buy_or_sell_stocks_form"]) || array_key_exists("buy_or_sell_stocks_form", $context) ? $context["buy_or_sell_stocks_form"] : (function () { throw new RuntimeError('Variable "buy_or_sell_stocks_form" does not exist.', 126, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
    ";
        // line 130
        $this->loadTemplate("modals/battleModal.html.twig", "main/index.html.twig", 130)->display($context);
        // line 131
        echo "    ";
        $this->loadTemplate("modals/viewBattleRequestsModal.html.twig", "main/index.html.twig", 131)->display($context);
        // line 132
        echo "    ";
        $this->loadTemplate("modals/chooseStockModal.html.twig", "main/index.html.twig", 132)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 132,  319 => 131,  317 => 130,  310 => 126,  297 => 116,  288 => 110,  280 => 104,  276 => 102,  273 => 101,  261 => 95,  254 => 91,  248 => 88,  243 => 86,  238 => 84,  231 => 81,  226 => 80,  224 => 79,  215 => 72,  202 => 65,  194 => 60,  187 => 56,  175 => 51,  167 => 46,  162 => 44,  157 => 41,  153 => 40,  133 => 22,  123 => 18,  119 => 17,  114 => 15,  110 => 14,  105 => 12,  101 => 11,  98 => 10,  94 => 9,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}FunStock !{% endblock %}

{% block body %}

    {# We get (without displaying) all the battle details to show them inside the modal #}
    
    {% for battle in all_battles %}
        <div style=\"display:none;\">
            <div battle_preview_amount id=\"{{ battle.id }}_battle_preview_amount\">
                <span style=\"font-weight: bold;\">Amount of the fight :</span> {{ battle.amount }} €
            </div>
            <div id=\"{{ battle.id }}_battle_preview_stock\">
                <span style=\"font-weight: bold;\">Stock :</span> {{ battle.stock }}
            </div>
            <div id=\"{{ battle.id }}_battle_preview_variation_direction_prediction\">
                <span style=\"font-weight: bold;\">Prediction :</span> {{ battle.stockVariationDirectionPrediction }}
            </div>
        </div>
    {% endfor %}

    <div class=\"main_boxes_row\">
        <div class=\"main_box\">
            <div class=\"main_box_title_container\">
                <h1 class=\"main_box_title\">Your stats</h1>
            </div>
            <div id=\"stats_buttons_container\">
                    <a href=\"#wins_chart\" class=\"stats_button\" id=\"wins_stats_button\">Wins / defeats</a>
                    <a href=\"#stock_valuation_chart\" class=\"stats_button\" id=\"stock_valuation_stats_button\">My stock valuation</a>
                </div>
                <div id=\"stats_chart_container\">
                    <canvas class=\"stats_chart\" id=\"wins_chart\"></canvas>
                </div>
        </div>
        <div class=\"main_box\">
            <div class=\"main_box_title_container\">
                <h1 class=\"main_box_title\">Challenge your friends</h1>
            </div>
            {% for user in all_users_but_logged_one %}
            <div id=\"battle_friends_box_wrapper\">
                <div class=\"profile_box_container\">
                    <div class=\"profile_picture_container\">
                        <img src=\"{{ asset(user.picture) }}\">
                    </div>
                    <h3>{{ user.firstName }}</h3>
                </div>
                <div class=\"stock_valuation_box_container\">
                    <h3>Victory rate</h3>
                    <div class=\"progress_bar\">
                        <div class=\"progress-done\" data-done={% if (user.numberOfLostBattles + user.numberOfWinnedBattles) != 0 %}{{ user.numberOfWinnedBattles / (user.numberOfLostBattles + user.numberOfWinnedBattles)*100 }}{% else %}\"100\"{% endif %}></div>
                    </div>
                </div>
                <div class=\"last_battles_box\">
                    <div class=\"battle_stats_box\" id=\"winned_battles_box\">
                        <div>{{ user.numberOfWinnedBattles }} wins</div>
                        <i class=\"fa-solid fa-trophy\"></i>
                    </div>
                    <div class=\"battle_stats_box\" id=\"lost_battles_box\">
                        <div>{{ user.numberOfLostBattles }} defeats</div>
                        <i class=\"fa-solid fa-skull-crossbones\"></i>
                    </div>
                </div>
                <div class=\"battle_btn_container\">
                    <a class=\"battle_btn\" href=\"#battle_modal\" id=\"{{ user.id }}_battle_btn\">
                    <div class=\"fight_text not-clickable\">Fight</div>
                        <i class=\"fa-solid fa-circle-radiation not-clickable\"></i>
                    </a>
                </div>  
            </div>
            {% endfor %}
        </div>
    </div>
    <div class=\"main_boxes_row\">
        <div class=\"main_box\">
            <div class=\"main_box_title_container\">
                <h1 class=\"main_box_title\">My battle requests</h1>
            </div>
            {% if pending_inbound_battle_requests %}
                {% for pending_inbound_battle_request in pending_inbound_battle_requests %}
                    <div class=\"battle_request_box_wrapper\" id=\"{{ pending_inbound_battle_request.id }}_battle_request_box_wrapper\">
                        <div class=\"profile_box_container\">
                            <div class=\"profile_picture_container\">
                                <img src=\"{{ asset(pending_inbound_battle_request.attacker.picture) }}\">
                            </div>
                            <h3>{{ pending_inbound_battle_request.attacker.firstName }}</h3>
                        </div>
                        <a href=\"#view_battle_request_modal\" class=\"view_battle_request_btn battle_request_btn\" id=\"{{ pending_inbound_battle_request.id }}_view_battle_request_btn\">
                            <div class=\"not-clickable\">View the challenge</div>
                        </a>
                        <a href=\"#\" class=\"accept_battle_request_btn battle_request_btn\" id=\"{{ pending_inbound_battle_request.id }}_accept_battle_request_btn\">
                            <span class=\"not-clickable\">Accept</span>
                            <i class=\"fa-solid fa-check not-clickable\"></i>
                        </a>
                        <a href=\"#\" class=\"decline_battle_request_btn battle_request_btn\" id=\"{{ pending_inbound_battle_request.id }}_decline_battle_request_btn\">
                            <span class=\"not-clickable\">Decline</span>
                            <i class=\"fa-solid fa-check not-clickable\"></i>
                        </a>
                    </div>
                {% endfor %}
            {% else %}
            <div>You don't have battle requests. Don't wait for their move, <a href=\"#battle_friends_box_wrapper\">attack your friends !</a> </div>
            {% endif %}
        </div>
        <div class=\"main_box\">
            <div class=\"main_box_title_container\">
                <h1 class=\"main_box_title\">Buy stocks</h1>
            </div>
            <div id=\"buy_sell_stock_box_wrapper\">
                {{ form_start(buy_or_sell_stocks_form, {'attr' : {'id' : 'buy_or_sell_stocks_form'}}) }}
                    <div id=\"amount_and_currency\">
                        <div id=\"currency_symbol\">€</div>
                        <input type=\"number\" min=\"0\" name=\"stock_amount\" id=\"stock_amount_input\" value=\"0\">
                    </div>
                    <div id=\"buy_stock_container\">
                        <a class=\"buy_or_sell_stocks_form_choose_stock_btn\" href=\"#choose_stock_modal\" id=\"{{ app.user.id }}_form_choose_stock_btn\">
                            <div class=\"not-clickable chosen_stock_container\" id=\"buy_or_sell_stocks_form_chosen_stock_container\">
                                <div class=\"stock_name_and_symbol\">Apple (AAPL)</div>
                                <i class=\"fa-solid fa-angle-right\"></i>
                            </div>
                        </a>
                    </div>
                    <div id=\"submit_btn_container\">
                        <button id=\"submit_btn\" type=\"submit\">Confirm</button>
                    </div>
                {{ form_end(buy_or_sell_stocks_form) }}
            </div>
        </div>
    </div>
    {% include 'modals/battleModal.html.twig' %}
    {% include 'modals/viewBattleRequestsModal.html.twig' %}
    {% include 'modals/chooseStockModal.html.twig' %}
{% endblock %}
", "main/index.html.twig", "C:\\xampp\\htdocs\\FunStock\\templates\\main\\index.html.twig");
    }
}
