<?php

/* /Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/homepage.htm */
class __TwigTemplate_d82a19d64fbab6fd444942f51f7776bccce3c97d82019429036da88b944a8972 extends Twig_Template
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
        $context["records"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList2"] ?? null), "records", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList2"] ?? null), "displayColumn", array());
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList2"] ?? null), "noRecordsMessage", array());
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList2"] ?? null), "detailsPage", array());
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList2"] ?? null), "detailsKeyColumn", array());
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList2"] ?? null), "detailsUrlParameter", array());
        // line 7
        echo "
<div class=\"record-list\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "    <img style=\"width: 100%\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "poster", array()), "path", array()), "html", null, true);
            echo "\">

    <div style=\"margin-top: 30px\" class=\"row\">
        <div class=\"col-md-9\">
            ";
            // line 14
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "body", array());
            echo "
        </div>
        <div style=\"margin-top: 40px\" class=\"col-md-3 text-center\">
            <img  src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "poster1", array()), "path", array()), "html", null, true);
            echo "\">
        </div>
    </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  53 => 17,  47 => 14,  39 => 10,  35 => 9,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set records = builderList2.records %}
{% set displayColumn = builderList2.displayColumn %}
{% set noRecordsMessage = builderList2.noRecordsMessage %}
{% set detailsPage = builderList2.detailsPage %}
{% set detailsKeyColumn = builderList2.detailsKeyColumn %}
{% set detailsUrlParameter = builderList2.detailsUrlParameter %}

<div class=\"record-list\">
    {% for record in records %}
    <img style=\"width: 100%\" src=\"{{ record.poster.path }}\">

    <div style=\"margin-top: 30px\" class=\"row\">
        <div class=\"col-md-9\">
            {{ record.body|raw }}
        </div>
        <div style=\"margin-top: 40px\" class=\"col-md-3 text-center\">
            <img  src=\"{{ record.poster1.path }}\">
        </div>
    </div>


    {% endfor %}
</div>", "/Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/homepage.htm", "");
    }
}
