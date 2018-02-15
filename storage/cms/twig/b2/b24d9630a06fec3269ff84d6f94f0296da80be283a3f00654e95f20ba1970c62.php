<?php

/* /Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/login.htm */
class __TwigTemplate_d1095f31665af2470e71b87e32267d2e6d88647289d6b9591c9af269684855ed extends Twig_Template
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
        echo "<div class=\"row col-md-6 col-md-offset-3\">
    <div class=\" panel panel-primary\">
        <div class=\"panel-heading\" style=\"width: 100%\">VVe Inloggin</div>
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 7
        if ( !($context["user"] ?? null)) {
            // line 8
            echo "                        <h3>Aanmelden</h3>
                        ";
            // line 9
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "                    ";
        } else {
            // line 11
            echo "                    <a href=\"/file\">ga naar uw file</a>
                    
                    ";
        }
        // line 14
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  39 => 11,  36 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row col-md-6 col-md-offset-3\">
    <div class=\" panel panel-primary\">
        <div class=\"panel-heading\" style=\"width: 100%\">VVe Inloggin</div>
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    {% if not user %}
                        <h3>Aanmelden</h3>
                        {% partial account ~ '::signin' %}
                    {% else %}
                    <a href=\"/file\">ga naar uw file</a>
                    
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/login.htm", "");
    }
}
