<?php

/* core/themes/classy/templates/navigation/menu-local-action.html.twig */
class __TwigTemplate_6325dab4dfc076d8398abe67e88ab28736d0452ceb6ad51070668c50c5e6fd53 extends Twig_Template
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
        // line 13
        echo "<li";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a single local action link.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the wrapper element.*/
/*  * - link: A rendered link element.*/
/*  **/
/*  * @see template_preprocess_menu_local_action()*/
/*  *//* */
/* #}*/
/* <li{{ attributes }}>{{ link }}</li>*/
/* */
