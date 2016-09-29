<?php

/* themes/bootstrap/templates/system/system-themes-page.html.twig */
class __TwigTemplate_e837187fbd17236462557256492364371718e7fcdda259ba57c2781130fd8848 extends Twig_Template
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
        $tags = array("for" => 32, "set" => 34, "if" => 69);
        $filters = array("length" => 45, "join" => 57, "safe_join" => 77);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array('length', 'join', 'safe_join'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 31
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "form-group"), "method"), "html", null, true));
        echo ">
  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_groups"]) ? $context["theme_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 33
            echo "    ";
            // line 34
            $context["theme_group_classes"] = array(0 => "system-themes-list", 1 => ("system-themes-list-" . $this->getAttribute(            // line 36
$context["theme_group"], "state", array())), 2 => "clearfix", 3 => "panel", 4 => "panel-default");
            // line 42
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["theme_group"], "attributes", array()), "addClass", array(0 => (isset($context["theme_group_classes"]) ? $context["theme_group_classes"] : null)), "method"), "html", null, true));
            echo ">
      <div class=\"panel-heading\">
        <a class=\"panel-title\" href=\"#system-themes-list--";
            // line 44
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme_group"], "state", array()), "html", null, true));
            echo "\" aria-controls=\"#system-themes-list--";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme_group"], "state", array()), "html", null, true));
            echo "\" aria-expanded=\"false\" aria-pressed=\"false\" data-toggle=\"collapse\" role=\"button\">
          ";
            // line 45
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme_group"], "title", array()), "html", null, true));
            echo " (";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_length_filter($this->env, $this->getAttribute($context["theme_group"], "themes", array())), "html", null, true));
            echo ")
        </a>
      </div>
      ";
            // line 49
            $context["table_classes"] = array(0 => "table", 1 => "panel-collapse", 2 => ((($this->getAttribute(            // line 52
$context["theme_group"], "state", array()) == "uninstalled")) ? ("collapse") : ("")), 3 => "fade", 4 => ((($this->getAttribute(            // line 54
$context["theme_group"], "state", array()) != "uninstalled")) ? ("in") : ("")));
            // line 57
            echo "      <table id=\"system-themes-list--";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme_group"], "state", array()), "html", null, true));
            echo "\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter((isset($context["table_classes"]) ? $context["table_classes"] : null), " "), "html", null, true));
            echo "\">
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme_group"], "themes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 59
                echo "          ";
                // line 60
                $context["theme_classes"] = array(0 => (($this->getAttribute(                // line 61
$context["theme"], "is_default", array())) ? ("theme-default") : ("")), 1 => (($this->getAttribute(                // line 62
$context["theme"], "is_admin", array())) ? ("theme-admin") : ("")), 2 => "theme-selector", 3 => "clearfix");
                // line 67
                echo "          <tr";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["theme"], "attributes", array()), "addClass", array(0 => (isset($context["theme_classes"]) ? $context["theme_classes"] : null)), "method"), "html", null, true));
                echo ">
            <td class=\"col-sm-3\">
              ";
                // line 69
                if ($this->getAttribute($context["theme"], "screenshot", array())) {
                    // line 70
                    echo "                ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "screenshot", array()), "html", null, true));
                    echo "
              ";
                }
                // line 72
                echo "            </td>
            <td class=\"theme-info col-sm-9\">
              <h4 class=\"theme-info__header\">";
                // line 75
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "version", array()), "html", null, true));
                // line 76
                if ($this->getAttribute($context["theme"], "notes", array())) {
                    // line 77
                    echo "                  (";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, $this->getAttribute($context["theme"], "notes", array()), ", ")));
                    echo ")";
                }
                // line 79
                echo "</h4>
              <div class=\"theme-info__description help-block\">";
                // line 80
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "description", array()), "html", null, true));
                echo "</div>
              ";
                // line 82
                echo "              ";
                if ($this->getAttribute($context["theme"], "incompatible", array())) {
                    // line 83
                    echo "                <div class=\"incompatible\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "incompatible", array()), "html", null, true));
                    echo "</div>
              ";
                } else {
                    // line 85
                    echo "                ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "operations", array()), "html", null, true));
                    echo "
              ";
                }
                // line 87
                echo "            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "      </table>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 93,  157 => 90,  149 => 87,  143 => 85,  137 => 83,  134 => 82,  130 => 80,  127 => 79,  122 => 77,  120 => 76,  116 => 75,  112 => 72,  106 => 70,  104 => 69,  98 => 67,  96 => 62,  95 => 61,  94 => 60,  92 => 59,  88 => 58,  81 => 57,  79 => 54,  78 => 52,  77 => 49,  69 => 45,  63 => 44,  57 => 42,  55 => 36,  54 => 34,  52 => 33,  48 => 32,  43 => 31,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the Appearance page.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the main container.*/
/*  * - theme_groups: A list of theme groups. Each theme group contains:*/
/*  *   - attributes: HTML attributes specific to this theme group.*/
/*  *   - title: Title for the theme group.*/
/*  *   - state: State of the theme group, e.g. installed or uninstalled.*/
/*  *   - themes: A list of themes within the theme group. Each theme contains:*/
/*  *     - attributes: HTML attributes specific to this theme.*/
/*  *     - screenshot: A screenshot representing the theme.*/
/*  *     - description: Description of the theme.*/
/*  *     - name: Theme name.*/
/*  *     - version: The theme's version number.*/
/*  *     - is_default: Boolean indicating whether the theme is the default theme*/
/*  *       or not.*/
/*  *     - is_admin: Boolean indicating whether the theme is the admin theme or*/
/*  *       not.*/
/*  *     - notes: Identifies what context this theme is being used in, e.g.,*/
/*  *       default theme, admin theme.*/
/*  *     - incompatible: Text describing any compatibility issues.*/
/*  *     - operations: A list of operation links, e.g., Settings, Enable, Disable,*/
/*  *       etc. these links should only be displayed if the theme is compatible.*/
/*  **/
/*  * @see template_preprocess_system_themes_page()*/
/*  *//* */
/* #}*/
/* <div{{ attributes.addClass('form-group') }}>*/
/*   {% for theme_group in theme_groups %}*/
/*     {%*/
/*       set theme_group_classes = [*/
/*         'system-themes-list',*/
/*         'system-themes-list-' ~ theme_group.state,*/
/*         'clearfix',*/
/*         'panel',*/
/*         'panel-default',*/
/*       ]*/
/*     %}*/
/*     <div{{ theme_group.attributes.addClass(theme_group_classes) }}>*/
/*       <div class="panel-heading">*/
/*         <a class="panel-title" href="#system-themes-list--{{ theme_group.state }}" aria-controls="#system-themes-list--{{ theme_group.state }}" aria-expanded="false" aria-pressed="false" data-toggle="collapse" role="button">*/
/*           {{ theme_group.title }} ({{ theme_group.themes|length }})*/
/*         </a>*/
/*       </div>*/
/*       {%*/
/*         set table_classes = [*/
/*           'table',*/
/*           'panel-collapse',*/
/*           theme_group.state == 'uninstalled' ? 'collapse',*/
/*           'fade',*/
/*           theme_group.state != 'uninstalled' ? 'in',*/
/*       ]*/
/*       %}*/
/*       <table id="system-themes-list--{{ theme_group.state }}" class="{{ table_classes|join(' ')}}">*/
/*         {% for theme in theme_group.themes %}*/
/*           {%*/
/*             set theme_classes = [*/
/*               theme.is_default ? 'theme-default',*/
/*               theme.is_admin ? 'theme-admin',*/
/*               'theme-selector',*/
/*               'clearfix',*/
/*             ]*/
/*           %}*/
/*           <tr{{ theme.attributes.addClass(theme_classes) }}>*/
/*             <td class="col-sm-3">*/
/*               {% if theme.screenshot %}*/
/*                 {{ theme.screenshot }}*/
/*               {% endif %}*/
/*             </td>*/
/*             <td class="theme-info col-sm-9">*/
/*               <h4 class="theme-info__header">*/
/*                 {{- theme.name }} {{ theme.version -}}*/
/*                 {% if theme.notes %}*/
/*                   ({{ theme.notes|safe_join(', ') }})*/
/*                 {%- endif -%}*/
/*               </h4>*/
/*               <div class="theme-info__description help-block">{{ theme.description }}</div>*/
/*               {# Display operation links if the theme is compatible. #}*/
/*               {% if theme.incompatible %}*/
/*                 <div class="incompatible">{{ theme.incompatible }}</div>*/
/*               {% else %}*/
/*                 {{ theme.operations }}*/
/*               {% endif %}*/
/*             </td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
