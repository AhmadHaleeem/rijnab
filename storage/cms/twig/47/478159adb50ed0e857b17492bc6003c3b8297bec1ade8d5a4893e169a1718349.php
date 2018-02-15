<?php

/* /Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/file.htm */
class __TwigTemplate_9bb412949f73e1c7310d5c0e1a36977f9f11e41f8ba81b46836090f4a3b15b73 extends Twig_Template
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
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        $context["records"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "records", array());
        // line 3
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "displayColumn", array());
        // line 4
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 5
        $context["detailsPage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsPage", array());
        // line 6
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 7
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 8
        echo "
<div class=\"\">
    ";
        // line 10
        if (($context["user"] ?? null)) {
            // line 11
            echo "        <div class=\"\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "filename", array());
            echo "</div>
    ";
        }
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/file.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  41 => 11,  39 => 10,  35 => 8,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}
{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<div class=\"\">
    {% if user %}
        <div class=\"\">{{ user.filename|raw }}</div>
    {% endif %}
</div>", "/Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/file.htm", "");
    }
}
