<?php

/* core/themes/bartik/templates/block--system-menu-block.html.twig */
class __TwigTemplate_a55ca3ea1867c92dd39276d17912205bac043d8d4347835b5ccae761df06b856 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/block/block--system-menu-block.html.twig", "core/themes/bartik/templates/block--system-menu-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/block/block--system-menu-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["show_anchor"] = ("show-" . \Drupal\Component\Utility\Html::getId($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())));
        // line 11
        $context["hide_anchor"] = ("hide-" . \Drupal\Component\Utility\Html::getId($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "  <div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true);
        echo ">
    ";
        // line 15
        echo "    <div class=\"menu-toggle-target menu-toggle-target-show\" id=\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["show_anchor"]) ? $context["show_anchor"] : null), "html", null, true);
        echo "\"></div>
    <div class=\"menu-toggle-target\" id=\"";
        // line 16
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["hide_anchor"]) ? $context["hide_anchor"] : null), "html", null, true);
        echo "\"></div>
    <a class=\"menu-toggle\" href=\"#";
        // line 17
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["show_anchor"]) ? $context["show_anchor"] : null), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Menu"));
        echo "</a>
    <a class=\"menu-toggle menu-toggle--hide\" href=\"#";
        // line 18
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["hide_anchor"]) ? $context["hide_anchor"] : null), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Menu"));
        echo "</a>
    ";
        // line 19
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  56 => 18,  50 => 17,  46 => 16,  41 => 15,  36 => 13,  33 => 12,  29 => 1,  27 => 11,  25 => 10,  11 => 1,);
    }
}
/* {% extends "@classy/block/block--system-menu-block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation for a menu block.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% set show_anchor = "show-" ~ attributes.id|clean_id %}*/
/* {% set hide_anchor = "hide-" ~ attributes.id|clean_id %}*/
/* {% block content %}*/
/*   <div{{ content_attributes.addClass('content') }}>*/
/*     {# When rendering a menu without label, render a menu toggle. #}*/
/*     <div class="menu-toggle-target menu-toggle-target-show" id="{{ show_anchor }}"></div>*/
/*     <div class="menu-toggle-target" id="{{ hide_anchor }}"></div>*/
/*     <a class="menu-toggle" href="#{{ show_anchor }}">{{ 'Menu'|t }}</a>*/
/*     <a class="menu-toggle menu-toggle--hide" href="#{{ hide_anchor }}">{{ 'Menu'|t }}</a>*/
/*     {{ content }}*/
/*   </div>*/
/* {% endblock %}*/
/* */
