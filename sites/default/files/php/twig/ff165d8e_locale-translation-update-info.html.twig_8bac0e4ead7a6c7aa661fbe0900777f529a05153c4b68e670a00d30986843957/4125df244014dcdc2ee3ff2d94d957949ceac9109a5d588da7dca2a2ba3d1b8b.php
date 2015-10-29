<?php

/* core/modules/locale/templates/locale-translation-update-info.html.twig */
class __TwigTemplate_b0f6d462944aa4ccda02302e00104c4c7534a032c6d45447f3c9215c972de631 extends Twig_Template
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
        // line 18
        echo "<div class=\"locale-translation-update__wrapper\" tabindex=\"0\" role=\"button\">
  <span class=\"locale-translation-update__prefix visually-hidden\">Show description</span>
  ";
        // line 20
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 21
            echo "    ";
            $context["module_list"] = $this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["modules"]) ? $context["modules"] : null), ", ");
            // line 22
            echo "    <span class=\"locale-translation-update__message\">";
            echo t("Updates for: @module_list", array("@module_list" => (isset($context["module_list"]) ? $context["module_list"] : null), ));
            echo "</span>
  ";
        } elseif (        // line 23
(isset($context["not_found"]) ? $context["not_found"] : null)) {
            // line 24
            echo "    <span class=\"locale-translation-update__message\">";
            // line 25
            echo \Drupal::translation()->formatPlural(abs(twig_length_filter($this->env,             // line 27
(isset($context["not_found"]) ? $context["not_found"] : null))), "Missing translations for one project", "Missing translations for @count projects", array());
            // line 30
            echo "</span>
  ";
        }
        // line 32
        echo "  ";
        if (((isset($context["updates"]) ? $context["updates"] : null) || (isset($context["not_found"]) ? $context["not_found"] : null))) {
            // line 33
            echo "    <div class=\"locale-translation-update__details\">
      ";
            // line 34
            if ((isset($context["updates"]) ? $context["updates"] : null)) {
                // line 35
                echo "        <ul>
          ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["updates"]) ? $context["updates"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["update"]) {
                    // line 37
                    echo "            <li>";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["update"], "name", array()), "html", null, true);
                    echo " (";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute($context["update"], "timestamp", array()), "html_date")), "html", null, true);
                    echo ")</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['update'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        </ul>
      ";
            }
            // line 41
            echo "      ";
            if ((isset($context["not_found"]) ? $context["not_found"] : null)) {
                // line 42
                echo "        ";
                // line 46
                echo "        ";
                if ((isset($context["updates"]) ? $context["updates"] : null)) {
                    // line 47
                    echo "          ";
                    echo $this->env->getExtension('drupal_core')->renderVar(t("Missing translations for:"));
                    echo "
        ";
                }
                // line 49
                echo "        ";
                if ((isset($context["not_found"]) ? $context["not_found"] : null)) {
                    // line 50
                    echo "          <ul>
            ";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["not_found"]) ? $context["not_found"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["update"]) {
                        // line 52
                        echo "              <li>";
                        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["update"], "name", array()), "html", null, true);
                        echo " (";
                        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($context["update"], "version", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["update"], "version", array()), t("no version"))) : (t("no version"))), "html", null, true);
                        echo "). ";
                        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["update"], "info", array()), "html", null, true);
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['update'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "          </ul>
        ";
                }
                // line 56
                echo "      ";
            }
            // line 57
            echo "    </div>
  ";
        }
        // line 59
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/locale/templates/locale-translation-update-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 59,  118 => 57,  115 => 56,  111 => 54,  98 => 52,  94 => 51,  91 => 50,  88 => 49,  82 => 47,  79 => 46,  77 => 42,  74 => 41,  70 => 39,  59 => 37,  55 => 36,  52 => 35,  50 => 34,  47 => 33,  44 => 32,  40 => 30,  38 => 27,  37 => 25,  35 => 24,  33 => 23,  28 => 22,  25 => 21,  23 => 20,  19 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for displaying translation status information.*/
/*  **/
/*  * Displays translation status information per language.*/
/*  **/
/*  * Available variables:*/
/*  * - modules: A list of modules names that have available translation updates.*/
/*  * - updates: A list of available translation updates.*/
/*  * - not_found: A list of modules missing translation updates.*/
/*  **/
/*  * @see template_preprocess_locale_translation_update_info()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="locale-translation-update__wrapper" tabindex="0" role="button">*/
/*   <span class="locale-translation-update__prefix visually-hidden">Show description</span>*/
/*   {% if modules %}*/
/*     {% set module_list = modules|safe_join(', ') %}*/
/*     <span class="locale-translation-update__message">{% trans %}Updates for: {{ module_list }}{% endtrans %}</span>*/
/*   {% elseif not_found %}*/
/*     <span class="locale-translation-update__message">*/
/*       {%- trans -%}*/
/*         Missing translations for one project*/
/*       {%- plural not_found|length -%}*/
/*         Missing translations for @count projects*/
/*       {%- endtrans -%}*/
/*     </span>*/
/*   {% endif %}*/
/*   {% if updates or not_found %}*/
/*     <div class="locale-translation-update__details">*/
/*       {% if updates %}*/
/*         <ul>*/
/*           {% for update in updates %}*/
/*             <li>{{ update.name }} ({{ update.timestamp|format_date('html_date') }})</li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       {% endif %}*/
/*       {% if not_found %}*/
/*         {#*/
/*           Prefix the missing updates list if there is an available updates lists*/
/*           before it.*/
/*         #}*/
/*         {% if updates %}*/
/*           {{ 'Missing translations for:'|t }}*/
/*         {% endif %}*/
/*         {% if not_found %}*/
/*           <ul>*/
/*             {% for update in not_found %}*/
/*               <li>{{ update.name }} ({{ update.version|default('no version'|t) }}). {{ update.info }}</li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
