<?php

/* core/modules/update/templates/update-report.html.twig */
class __TwigTemplate_84ac28b8820d62e787100d57237ef30928af392467d7cae9f03274e9ddeef41d extends Twig_Template
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
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["last_checked"]) ? $context["last_checked"] : null), "html", null, true);
        echo "

";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["project_types"]) ? $context["project_types"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project_type"]) {
            // line 21
            echo "  <h3>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["project_type"], "label", array()), "html", null, true);
            echo "</h3>
  ";
            // line 22
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["project_type"], "table", array()), "html", null, true);
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "  <p>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["no_updates_message"]) ? $context["no_updates_message"] : null), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/update/templates/update-report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 24,  34 => 22,  29 => 21,  24 => 20,  19 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the project status report.*/
/*  **/
/*  * Available variables:*/
/*  * - last_checked: Themed last time update data was checked.*/
/*  * - no_updates_message: Message when there are no project updates.*/
/*  * - project_types: A list of project types.*/
/*  *   - label: The project type label.*/
/*  *   - table: The project status table.*/
/*  **/
/*  * @see template_preprocess_update_report()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ last_checked }}*/
/* */
/* {% for project_type in project_types %}*/
/*   <h3>{{ project_type.label }}</h3>*/
/*   {{ project_type.table }}*/
/* {% else %}*/
/*   <p>{{ no_updates_message }}</p>*/
/* {% endfor %}*/
/* */
