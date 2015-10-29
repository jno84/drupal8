<?php

/* themes/my_first_theme/templates/user/user.html.twig */
class __TwigTemplate_62e18bb1c23f57e32ee70646a9303ed57badbce544c422e551986dd1393c4188 extends Twig_Template
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
        // line 30
        echo "<article";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile"), "method"), "html", null, true);
        echo ">

  ";
        // line 32
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 33
            echo "    <h1";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "user__title"), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h1>
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 37
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        }
        // line 39
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/my_first_theme/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 39,  40 => 37,  38 => 36,  35 => 35,  27 => 33,  25 => 32,  19 => 30,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to present all user data.*/
/*  **/
/*  * This template is used when viewing a registered user's page,*/
/*  * e.g., example.com/user/123. 123 being the user's ID.*/
/*  **/
/*  * Available variables:*/
/*  * - label: the users name set as a title. Adaptivetheme moves the h1 inside*/
/*  *   the article element for proper outlines.*/
/*  * - content: A list of content items. Use 'content' to print all content, or*/
/*  *   print a subset such as 'content.field_example'.*/
/*  * - Field variables: For each field instance attached to the user a*/
/*  *   corresponding variable is defined; e.g., account.field_example has a*/
/*  *   variable 'field_example' defined. When needing to access a field's raw*/
/*  *   values, developers/themers are strongly encouraged to use these*/
/*  *   variables. Otherwise they will have to explicitly specify the desired*/
/*  *   field language, e.g. account.field_example.en, thus overriding any*/
/*  *   language negotiation rule that was previously applied.*/
/*  * - title_attributes: HTML attributes set on the label wrapper markup.*/
/*  * - attributes: HTML attributes for the container element.*/
/*  **/
/*  * @see template_preprocess_user()*/
/*  * @see at_core_preprocess_user()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <article{{ attributes.addClass('profile') }}>*/
/* */
/*   {% if label %}*/
/*     <h1{{ title_attributes.addClass('user__title') }}>{{ label }}</h1>*/
/*   {% endif %}*/
/* */
/*   {% if content %}*/
/*     {{- content -}}*/
/*   {% endif %}*/
/* */
/* </article>*/
/* */
