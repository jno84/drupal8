<?php

/* themes/my_first_theme/templates/system/breadcrumb.html.twig */
class __TwigTemplate_59df8f48bbedd83dcc3ae50f49e04ad54e6ba8c7dfe18f8b177aac88fd70bd0c extends Twig_Template
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
        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  ";
            // line 14
            $context["title_classes"] = array(0 => ((            // line 15
(isset($context["breadcrumb_title_hidden"]) ? $context["breadcrumb_title_hidden"] : null)) ? ("visually-hidden") : ("")), 1 => "breadcrumb__title");
            // line 19
            echo "  <nav class=\"breadcrumb clearfix\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\"";
            // line 20
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->renderVar(t("You are here:"));
            echo "</h2>
    <ol class=\"breadcrumb__list\">
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                echo "      <li class=\"breadcrumb__list-item\">
        ";
                // line 24
                if ($this->getAttribute($context["item"], "url", array())) {
                    // line 25
                    echo "          <a href=\"";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"breadcrumb__link\">";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                    echo "</a>
        ";
                } else {
                    // line 27
                    echo "          ";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                    echo "
        ";
                }
                // line 29
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/my_first_theme/templates/system/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 31,  59 => 29,  53 => 27,  45 => 25,  43 => 24,  40 => 23,  36 => 22,  29 => 20,  26 => 19,  24 => 15,  23 => 14,  21 => 13,  19 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a breadcrumb trail.*/
/*  **/
/*  * Available variables:*/
/*  * - breadcrumb: Breadcrumb trail items.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if breadcrumb %}*/
/*   {%*/
/*     set title_classes = [*/
/*       breadcrumb_title_hidden ? 'visually-hidden',*/
/*       'breadcrumb__title',*/
/*     ]*/
/*   %}*/
/*   <nav class="breadcrumb clearfix" role="navigation" aria-labelledby="system-breadcrumb">*/
/*     <h2 id="system-breadcrumb"{{ title_attributes.addClass(title_classes) }}>{{ 'You are here:'|t }}</h2>*/
/*     <ol class="breadcrumb__list">*/
/*     {% for item in breadcrumb %}*/
/*       <li class="breadcrumb__list-item">*/
/*         {% if item.url %}*/
/*           <a href="{{ item.url }}" class="breadcrumb__link">{{ item.text }}</a>*/
/*         {% else %}*/
/*           {{ item.text }}*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*     </ol>*/
/*   </nav>*/
/* {% endif %}*/
/* */
