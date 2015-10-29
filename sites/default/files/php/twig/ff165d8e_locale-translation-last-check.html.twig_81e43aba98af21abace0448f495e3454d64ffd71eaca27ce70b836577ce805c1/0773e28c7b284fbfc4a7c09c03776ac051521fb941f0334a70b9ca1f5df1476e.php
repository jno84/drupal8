<?php

/* core/modules/locale/templates/locale-translation-last-check.html.twig */
class __TwigTemplate_d00fd785f20d7dc318db70a9e16928b400cd5640e80b251999a46eee3c879059 extends Twig_Template
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
        // line 17
        echo "<div class=\"locale checked\">
  <p>
  ";
        // line 19
        if ((isset($context["last_checked"]) ? $context["last_checked"] : null)) {
            // line 20
            echo "    ";
            echo t("Last checked: @time ago", array("@time" => (isset($context["time"]) ? $context["time"] : null), ));
            // line 21
            echo "  ";
        } else {
            // line 22
            echo "    ";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Last checked: never"));
            echo "
  ";
        }
        // line 24
        echo "  <span class=\"check-manually\">(";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo ")</span></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/locale/templates/locale-translation-last-check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 24,  31 => 22,  28 => 21,  25 => 20,  23 => 19,  19 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the last time we checked for update data.*/
/*  **/
/*  * Available variables:*/
/*  * - last_checked: Whether or not locale updates have been checked before.*/
/*  * - time: The formatted time ago when the site last checked for available*/
/*  *   updates.*/
/*  * - link: A link to manually check available updates.*/
/*  **/
/*  * @see template_preprocess_locale_translation_last_check()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="locale checked">*/
/*   <p>*/
/*   {% if last_checked %}*/
/*     {% trans %} Last checked: {{ time }} ago {% endtrans %}*/
/*   {% else %}*/
/*     {{ 'Last checked: never'|t }}*/
/*   {% endif %}*/
/*   <span class="check-manually">({{ link }})</span></p>*/
/* </div>*/
/* */
