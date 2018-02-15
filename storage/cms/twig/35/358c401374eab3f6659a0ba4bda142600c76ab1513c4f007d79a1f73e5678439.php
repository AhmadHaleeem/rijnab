<?php

/* /Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/logindemo.htm */
class __TwigTemplate_3db2d7b3095a8acdc5e26ba9072561c16ee6b6cf916760c0c4e5e9705791cc4c extends Twig_Template
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
        <div class=\" panel panel-info\">
            <div class=\"panel-heading\" style=\"width: 100%\">Demo Inloggin</div>
            <div class=\"panel-body\">
                <div class=\"\">
                    
                    <!--";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "-->
                    <form name=\"login\">
                        Gebruikersnaam<input style=\"margin-top: 10px;margin-bottom: 10px\" class=\"form-control\" type=\"text\" name=\"userid\"/>
                        Wachtwoord<input style=\"margin-top: 10px;margin-bottom: 10px\" class=\"form-control\" type=\"password\" name=\"pswrd\"/>
                        <input class=\"btn btn-primary\" type=\"button\" onclick=\"check(this.form)\" value=\"Aanmelden\"/>
                        <input class=\"btn btn-default\" type=\"reset\" value=\"Cancel\"/>
                    </form>
                    <script language=\"javascript\">
                        function check(form)/*function to check userid & password*/
                        {
                            /*the following code checkes whether the entered userid and password are matching*/
                            if(form.userid.value == \"demo\" && form.pswrd.value == \"demo\")
                            {
                                window.open('/demo')/*opens the target page while Id & password matches*/
                            }
                            else
                            {
                                alert(\"Error Wachtwoord or Gebruikersnaam\")/*displays error message*/
                            }
                        }
                        </script>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/logindemo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row col-md-6 col-md-offset-3\">
        <div class=\" panel panel-info\">
            <div class=\"panel-heading\" style=\"width: 100%\">Demo Inloggin</div>
            <div class=\"panel-body\">
                <div class=\"\">
                    
                    <!--{% partial account ~ '::signin' %}-->
                    <form name=\"login\">
                        Gebruikersnaam<input style=\"margin-top: 10px;margin-bottom: 10px\" class=\"form-control\" type=\"text\" name=\"userid\"/>
                        Wachtwoord<input style=\"margin-top: 10px;margin-bottom: 10px\" class=\"form-control\" type=\"password\" name=\"pswrd\"/>
                        <input class=\"btn btn-primary\" type=\"button\" onclick=\"check(this.form)\" value=\"Aanmelden\"/>
                        <input class=\"btn btn-default\" type=\"reset\" value=\"Cancel\"/>
                    </form>
                    <script language=\"javascript\">
                        function check(form)/*function to check userid & password*/
                        {
                            /*the following code checkes whether the entered userid and password are matching*/
                            if(form.userid.value == \"demo\" && form.pswrd.value == \"demo\")
                            {
                                window.open('/demo')/*opens the target page while Id & password matches*/
                            }
                            else
                            {
                                alert(\"Error Wachtwoord or Gebruikersnaam\")/*displays error message*/
                            }
                        }
                        </script>
                </div>
            </div>
        </div>
    </div>", "/Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/pages/logindemo.htm", "");
    }
}
