<?php

/* core/modules/image/templates/image-resize-summary.html.twig */
class __TwigTemplate_4d09562e20356792cd1b0d5fdd2d526bb7588dc6780824c12739e7eeee203143 extends Twig_Template
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
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array()) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array()))) {
            // line 19
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array()));
            echo "×";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array()));
        } else {
            // line 21
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array())) {
                // line 22
                echo "    ";
                echo t("width @data.width", array("@data.width" => $this->getAttribute(                // line 23
(isset($context["data"]) ? $context["data"] : null), "width", array()), ));
                // line 25
                echo "  ";
            } elseif ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array())) {
                // line 26
                echo "    ";
                echo t("height @data.height", array("@data.height" => $this->getAttribute(                // line 27
(isset($context["data"]) ? $context["data"] : null), "height", array()), ));
                // line 29
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-resize-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 29,  37 => 27,  35 => 26,  32 => 25,  30 => 23,  28 => 22,  26 => 21,  21 => 19,  19 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a summary of an image resize effect.*/
/*  **/
/*  * Available variables:*/
/*  * - data: The current configuration for this resize effect, including:*/
/*  *   - width: The width of the resized image.*/
/*  *   - height: The height of the resized image.*/
/*  * - effect: The effect information, including:*/
/*  *   - id: The effect identifier.*/
/*  *   - label: The effect name.*/
/*  *   - description: The effect description.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if data.width and data.height -%}*/
/*   {{ data.width|e }}×{{ data.height|e }}*/
/* {%- else -%}*/
/*   {% if data.width %}*/
/*     {% trans %}*/
/*       width {{ data.width|e }}*/
/*     {% endtrans %}*/
/*   {% elseif data.height %}*/
/*     {% trans %}*/
/*       height {{ data.height|e }}*/
/*     {% endtrans %}*/
/*   {% endif %}*/
/* {%- endif %}*/
/* */
