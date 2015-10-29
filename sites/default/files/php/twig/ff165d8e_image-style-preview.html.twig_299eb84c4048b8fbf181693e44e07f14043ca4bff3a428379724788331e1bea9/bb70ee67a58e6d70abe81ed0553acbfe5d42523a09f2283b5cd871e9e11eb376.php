<?php

/* core/modules/image/templates/image-style-preview.html.twig */
class __TwigTemplate_df0382258b064c3cb5f21c5aa392d4fd695ed065ecbb69c377a6e8598458fee7 extends Twig_Template
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
        // line 33
        echo "<div class=\"image-style-preview preview clearfix\">
  ";
        // line 35
        echo "  <div class=\"preview-image-wrapper\">
      ";
        // line 36
        echo $this->env->getExtension('drupal_core')->renderVar(t("original"));
        echo " (<a href=\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["original"]) ? $context["original"] : null), "url", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("view actual size"));
        echo "</a>)
      <div class=\"preview-image original-image\" style=\"width: ";
        // line 37
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "original", array()), "width", array()), "html", null, true);
        echo "px; height: ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "original", array()), "height", array()), "html", null, true);
        echo "px;\">
        <a href=\"";
        // line 38
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["original"]) ? $context["original"] : null), "url", array()), "html", null, true);
        echo "\">
          ";
        // line 39
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["original"]) ? $context["original"] : null), "rendered", array()), "html", null, true);
        echo "
        </a>
      <div class=\"height\" style=\"height: ";
        // line 41
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "original", array()), "height", array()), "html", null, true);
        echo "px\"><span>";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["original"]) ? $context["original"] : null), "height", array()), "html", null, true);
        echo "px</span></div>
      <div class=\"width\" style=\"width: ";
        // line 42
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "original", array()), "width", array()), "html", null, true);
        echo "px\"><span>";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["original"]) ? $context["original"] : null), "width", array()), "html", null, true);
        echo "px</span></div>
    </div>
  </div>

  ";
        // line 47
        echo "  <div class=\"preview-image-wrapper\">
    ";
        // line 48
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["style_name"]) ? $context["style_name"] : null), "html", null, true);
        echo " (<a href=\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["derivative"]) ? $context["derivative"] : null), "url", array()), "html", null, true);
        echo "?";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cache_bypass"]) ? $context["cache_bypass"] : null), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("view actual size"));
        echo "</a>)
    <div class=\"preview-image modified-image\" style=\"width: ";
        // line 49
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "derivative", array()), "width", array()), "html", null, true);
        echo "px; height: ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "derivative", array()), "height", array()), "html", null, true);
        echo "px;\">
      <a href=\"";
        // line 50
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["derivative"]) ? $context["derivative"] : null), "url", array()), "html", null, true);
        echo "?";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cache_bypass"]) ? $context["cache_bypass"] : null), "html", null, true);
        echo "\">
        ";
        // line 51
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["derivative"]) ? $context["derivative"] : null), "rendered", array()), "html", null, true);
        echo "
      </a>
      <div class=\"height\" style=\"height: ";
        // line 53
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "derivative", array()), "height", array()), "html", null, true);
        echo "px\"><span>";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["derivative"]) ? $context["derivative"] : null), "height", array()), "html", null, true);
        echo "px</span></div>
      <div class=\"width\" style=\"width: ";
        // line 54
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "derivative", array()), "width", array()), "html", null, true);
        echo "px\"><span>";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["derivative"]) ? $context["derivative"] : null), "width", array()), "html", null, true);
        echo "px</span></div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-style-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 54,  93 => 53,  88 => 51,  82 => 50,  76 => 49,  66 => 48,  63 => 47,  54 => 42,  48 => 41,  43 => 39,  39 => 38,  33 => 37,  25 => 36,  22 => 35,  19 => 33,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a preview of an image style.*/
/*  **/
/*  * Available variables:*/
/*  * - style_id: The ID of the image style.*/
/*  * - style_name: The name of the image style.*/
/*  * - cache_bypass: A timestamp token used to avoid browser caching of images.*/
/*  * - original: An associative array containing:*/
/*  *   - url: The URL of the original image.*/
/*  *   - width: The width in pixels of the original image.*/
/*  *   - height: The height in pixels of the original image.*/
/*  *   - rendered: The render array for the original image.*/
/*  * - derivative: An associative array containing:*/
/*  *   - url: The URL of the derivative image.*/
/*  *   - width: The width in pixels of the derivative image.*/
/*  *   - height: The height in pixels of the derivative image.*/
/*  *   - rendered:  The rendered derivative image.*/
/*  * - preview: An associative array containing:*/
/*  *   - original: An associative array containing:*/
/*  *     - width: The width in pixels of the original image in the preview.*/
/*  *     - height: The height in pixels of the original image in the preview.*/
/*  *   - derivative: An associative array containing:*/
/*  *     - width: The width in pixels of the derivative image in the preview.*/
/*  *     - height: The height in pixels of the derivative image in the preview.*/
/*  **/
/*  * @see template_preprocess_image_style_preview()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="image-style-preview preview clearfix">*/
/*   {# Preview of the original image. #}*/
/*   <div class="preview-image-wrapper">*/
/*       {{ 'original'|t }} (<a href="{{ original.url }}">{{ 'view actual size'|t }}</a>)*/
/*       <div class="preview-image original-image" style="width: {{ preview.original.width }}px; height: {{ preview.original.height }}px;">*/
/*         <a href="{{ original.url }}">*/
/*           {{ original.rendered }}*/
/*         </a>*/
/*       <div class="height" style="height: {{ preview.original.height }}px"><span>{{ original.height }}px</span></div>*/
/*       <div class="width" style="width: {{ preview.original.width }}px"><span>{{ original.width }}px</span></div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {# Derivative of the image style. #}*/
/*   <div class="preview-image-wrapper">*/
/*     {{ style_name }} (<a href="{{ derivative.url }}?{{ cache_bypass }}">{{ 'view actual size'|t }}</a>)*/
/*     <div class="preview-image modified-image" style="width: {{ preview.derivative.width }}px; height: {{ preview.derivative.height }}px;">*/
/*       <a href="{{ derivative.url }}?{{ cache_bypass }}">*/
/*         {{ derivative.rendered }}*/
/*       </a>*/
/*       <div class="height" style="height: {{ preview.derivative.height }}px"><span>{{ derivative.height }}px</span></div>*/
/*       <div class="width" style="width: {{ preview.derivative.width }}px"><span>{{ derivative.width }}px</span></div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
