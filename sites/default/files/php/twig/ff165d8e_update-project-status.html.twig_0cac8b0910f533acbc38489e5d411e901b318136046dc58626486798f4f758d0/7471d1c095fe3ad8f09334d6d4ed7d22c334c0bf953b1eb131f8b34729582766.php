<?php

/* core/modules/update/templates/update-project-status.html.twig */
class __TwigTemplate_5690c2a1aeeaa44960eb51fd061298e2b0b719776f31e12022cfe1e4619bdea2 extends Twig_Template
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
        // line 31
        $context["status_classes"] = array(0 => ((($this->getAttribute(        // line 32
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SECURE"))) ? ("project-update__status--security-error") : ("")), 1 => ((($this->getAttribute(        // line 33
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_REVOKED"))) ? ("project-update__status--revoked") : ("")), 2 => ((($this->getAttribute(        // line 34
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SUPPORTED"))) ? ("project-update__status--not-supported") : ("")), 3 => ((($this->getAttribute(        // line 35
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_CURRENT"))) ? ("project-update__status--not-current") : ("")), 4 => ((($this->getAttribute(        // line 36
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_CURRENT"))) ? ("project-update__status--current") : ("")));
        // line 39
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "attributes", array()), "addClass", array(0 => "project-update__status", 1 => (isset($context["status_classes"]) ? $context["status_classes"] : null)), "method"), "html", null, true);
        echo ">";
        // line 40
        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "label", array())) {
            // line 41
            echo "<span>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "label", array()), "html", null, true);
            echo "</span>";
        } else {
            // line 43
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "reason", array()), "html", null, true);
        }
        // line 45
        echo "  <span class=\"project-update__status-icon\">
    ";
        // line 46
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "icon", array()), "html", null, true);
        echo "
  </span>
</div>

<div class=\"project-update__title\">";
        // line 51
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 52
            echo "<a href=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</a>";
        } else {
            // line 54
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        }
        // line 56
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["existing_version"]) ? $context["existing_version"] : null), "html", null, true);
        echo "
  ";
        // line 57
        if ((((isset($context["install_type"]) ? $context["install_type"] : null) == "dev") && (isset($context["datestamp"]) ? $context["datestamp"] : null))) {
            // line 58
            echo "    <span class=\"project-update__version-date\">(";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["datestamp"]) ? $context["datestamp"] : null), "html", null, true);
            echo ")</span>
  ";
        }
        // line 60
        echo "</div>

";
        // line 62
        if ((isset($context["versions"]) ? $context["versions"] : null)) {
            // line 63
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 64
                echo "    ";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["version"], "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 67
        echo "
";
        // line 69
        $context["extra_classes"] = array(0 => ((($this->getAttribute(        // line 70
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SECURE"))) ? ("project-not-secure") : ("")), 1 => ((($this->getAttribute(        // line 71
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_REVOKED"))) ? ("project-revoked") : ("")), 2 => ((($this->getAttribute(        // line 72
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SUPPORTED"))) ? ("project-not-supported") : ("")));
        // line 75
        echo "<div class=\"project-updates__details\">
  ";
        // line 76
        if ((isset($context["extras"]) ? $context["extras"] : null)) {
            // line 77
            echo "    <div class=\"extra\">
      ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extras"]) ? $context["extras"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 79
                echo "        <div";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["extra"], "attributes", array()), "addClass", array(0 => (isset($context["extra_classes"]) ? $context["extra_classes"] : null)), "method"), "html", null, true);
                echo ">
          ";
                // line 80
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["extra"], "label", array()), "html", null, true);
                echo ": ";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["extra"], "data", array()), "html", null, true);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "    </div>
  ";
        }
        // line 85
        echo "  ";
        $context["includes"] = twig_join_filter((isset($context["includes"]) ? $context["includes"] : null), ", ");
        // line 86
        echo "  ";
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            // line 87
            echo "    ";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Includes:"));
            echo "
    <ul>
      <li>
        ";
            // line 90
            echo t("Enabled: %includes", array("%includes" =>             // line 91
(isset($context["includes"]) ? $context["includes"] : null), ));
            // line 93
            echo "      </li>
      <li>
        ";
            // line 95
            $context["disabled"] = twig_join_filter((isset($context["disabled"]) ? $context["disabled"] : null), ", ");
            // line 96
            echo "        ";
            echo t("Disabled: %disabled", array("%disabled" =>             // line 97
(isset($context["disabled"]) ? $context["disabled"] : null), ));
            // line 99
            echo "      </li>
    </ul>
  ";
        } else {
            // line 102
            echo "    ";
            echo t("Includes: %includes", array("%includes" =>             // line 103
(isset($context["includes"]) ? $context["includes"] : null), ));
            // line 105
            echo "  ";
        }
        // line 106
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/update/templates/update-project-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 106,  171 => 105,  169 => 103,  167 => 102,  162 => 99,  160 => 97,  158 => 96,  156 => 95,  152 => 93,  150 => 91,  149 => 90,  142 => 87,  139 => 86,  136 => 85,  132 => 83,  121 => 80,  116 => 79,  112 => 78,  109 => 77,  107 => 76,  104 => 75,  102 => 72,  101 => 71,  100 => 70,  99 => 69,  96 => 67,  86 => 64,  81 => 63,  79 => 62,  75 => 60,  69 => 58,  67 => 57,  62 => 56,  59 => 54,  52 => 52,  50 => 51,  43 => 46,  40 => 45,  37 => 43,  32 => 41,  30 => 40,  26 => 39,  24 => 36,  23 => 35,  22 => 34,  21 => 33,  20 => 32,  19 => 31,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the project status report.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The project title.*/
/*  * - url: The project url.*/
/*  * - status: The project status.*/
/*  *   - label: The project status label.*/
/*  *   - attributes: HTML attributes for the project status.*/
/*  *   - reason: The reason you should update the project.*/
/*  *   - icon: The project status version indicator icon.*/
/*  * - existing_version: The version of the installed project.*/
/*  * - versions: The available versions of the project.*/
/*  * - install_type: The type of project (e.g., dev).*/
/*  * - datestamp: The date/time of a project version's release.*/
/*  * - extras: HTML attributes and additional information about the project.*/
/*  *   - attributes: HTML attributes for the extra item.*/
/*  *   - label: The label for an extra item.*/
/*  *   - data: The data about an extra item.*/
/*  * - includes: The projects within the project.*/
/*  * - disabled: The currently disabled projects in the project.*/
/*  **/
/*  * @see template_preprocess_update_project_status()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set status_classes = [*/
/*     project.status == constant('UPDATE_NOT_SECURE') ? 'project-update__status--security-error',*/
/*     project.status == constant('UPDATE_REVOKED') ? 'project-update__status--revoked',*/
/*     project.status == constant('UPDATE_NOT_SUPPORTED') ? 'project-update__status--not-supported',*/
/*     project.status == constant('UPDATE_NOT_CURRENT') ? 'project-update__status--not-current',*/
/*     project.status == constant('UPDATE_CURRENT') ? 'project-update__status--current',*/
/*   ]*/
/* %}*/
/* <div{{ status.attributes.addClass('project-update__status', status_classes) }}>*/
/*   {%- if status.label -%}*/
/*     <span>{{ status.label }}</span>*/
/*   {%- else -%}*/
/*     {{ status.reason }}*/
/*   {%- endif %}*/
/*   <span class="project-update__status-icon">*/
/*     {{ status.icon }}*/
/*   </span>*/
/* </div>*/
/* */
/* <div class="project-update__title">*/
/*   {%- if url -%}*/
/*     <a href="{{ url }}">{{ title }}</a>*/
/*   {%- else -%}*/
/*     {{ title }}*/
/*   {%- endif %}*/
/*   {{ existing_version }}*/
/*   {% if install_type == 'dev' and datestamp %}*/
/*     <span class="project-update__version-date">({{ datestamp }})</span>*/
/*   {% endif %}*/
/* </div>*/
/* */
/* {% if versions %}*/
/*   {% for version in versions %}*/
/*     {{ version }}*/
/*   {% endfor %}*/
/* {% endif %}*/
/* */
/* {%*/
/*   set extra_classes = [*/
/*     project.status == constant('UPDATE_NOT_SECURE') ? 'project-not-secure',*/
/*     project.status == constant('UPDATE_REVOKED') ? 'project-revoked',*/
/*     project.status == constant('UPDATE_NOT_SUPPORTED') ? 'project-not-supported',*/
/*   ]*/
/* %}*/
/* <div class="project-updates__details">*/
/*   {% if extras %}*/
/*     <div class="extra">*/
/*       {% for extra in extras %}*/
/*         <div{{ extra.attributes.addClass(extra_classes) }}>*/
/*           {{ extra.label }}: {{ extra.data }}*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% set includes = includes|join(', ') %}*/
/*   {% if disabled %}*/
/*     {{ 'Includes:'|t }}*/
/*     <ul>*/
/*       <li>*/
/*         {% trans %}*/
/*           Enabled: {{ includes|placeholder }}*/
/*         {% endtrans %}*/
/*       </li>*/
/*       <li>*/
/*         {% set disabled = disabled|join(', ') %}*/
/*         {% trans %}*/
/*           Disabled: {{ disabled|placeholder }}*/
/*         {% endtrans %}*/
/*       </li>*/
/*     </ul>*/
/*   {% else %}*/
/*     {% trans %}*/
/*       Includes: {{ includes|placeholder }}*/
/*     {% endtrans %}*/
/*   {% endif %}*/
/* </div>*/
/* */
