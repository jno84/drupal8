<?php

/* themes/my_first_theme/templates/menu/menu-local-tasks.html.twig */
class __TwigTemplate_989770a4f8434c740c5d8c3d3c142c063143482e161282cefa9baf3aa7e8821c extends Twig_Template
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
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 19
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Primary tabs"));
            echo "</h2>
  <ul class=\"tabs--primary\">";
            // line 20
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true);
            echo "</ul>
";
        }
        // line 22
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 23
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Secondary tabs"));
            echo "</h2>
  <ul class=\"tabs--secondary\">";
            // line 24
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true);
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/my_first_theme/templates/menu/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 24,  33 => 23,  31 => 22,  26 => 20,  21 => 19,  19 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display primary and secondary local tasks.*/
/*  **/
/*  * Available variables:*/
/*  * - primary: HTML list items representing primary tasks.*/
/*  * - secondary: HTML list items representing primary tasks.*/
/*  **/
/*  * Each item in these variables (primary and secondary) can be individually*/
/*  * themed in menu-local-task.html.twig.*/
/*  **/
/*  * @see template_preprocess_menu_local_tasks()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if primary %}*/
/*   <h2 class="visually-hidden">{{ 'Primary tabs'|t }}</h2>*/
/*   <ul class="tabs--primary">{{ primary }}</ul>*/
/* {% endif %}*/
/* {% if secondary %}*/
/*   <h2 class="visually-hidden">{{ 'Secondary tabs'|t }}</h2>*/
/*   <ul class="tabs--secondary">{{ secondary }}</ul>*/
/* {% endif %}*/
/* */
