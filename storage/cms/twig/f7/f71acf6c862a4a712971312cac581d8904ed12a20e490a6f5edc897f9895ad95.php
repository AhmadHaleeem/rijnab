<?php

/* /Users/ahmadhaleem/Documents/myProjects/oc/plugins/rainlab/user/components/account/signin.htm */
class __TwigTemplate_4b1b520d718db522c51648ec8fce108e6fa14494d0fe43b15093289481daa3be extends Twig_Template
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
        echo "<form
    data-request=\"onSignin\">
    <div class=\"form-group\">
        <label for=\"userSigninLogin\"></label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Gebruikersnaam\" />
    </div>

    <div class=\"form-group\">

        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Wachtwoord\" />
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">Aanmelden</button>
</form>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Documents/myProjects/oc/plugins/rainlab/user/components/account/signin.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form
    data-request=\"onSignin\">
    <div class=\"form-group\">
        <label for=\"userSigninLogin\"></label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Gebruikersnaam\" />
    </div>

    <div class=\"form-group\">

        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Wachtwoord\" />
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
</form>", "/Users/ahmadhaleem/Documents/myProjects/oc/plugins/rainlab/user/components/account/signin.htm", "");
    }
}
