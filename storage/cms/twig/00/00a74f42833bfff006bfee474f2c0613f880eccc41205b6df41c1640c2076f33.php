<?php

/* /Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/partials/header.htm */
class __TwigTemplate_b93dd597ecec8792d648936519fcac1e341998b6d81c33c7356f42c287fd22dc extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header \">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Rijnab</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "homepage")) {
            echo " active ";
        }
        echo "\"><a href=\"/\">Home</a></li>
                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "over_ons")) {
            echo " active ";
        }
        echo "\"><a href='over_ons'> Over ons</a></li>
                <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "onze_diensten")) {
            echo " active ";
        }
        echo "\"> <a href=\"onze_diensten\">Onze diensten</a></li>
                <li class=\"";
        // line 19
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo " active ";
        }
        echo "\"><a href=\"contact\">Contact</a></li>
                <li class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "handig")) {
            echo " active ";
        }
        echo "\"><a href=\"handig\">Handig</a></li>

                <li class=\"dropdown\">
                    <a href=\"nieuw\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nieuws <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"";
        // line 25
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "nieuw")) {
            echo " active ";
        }
        echo "\"><a href=\"nieuw\">Nieuws</a></li>
                        <li class=\"";
        // line 26
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "vve_vrijwilliger")) {
            echo " active ";
        }
        echo "\"><a href=\"/VvE_Vrijwilliger\">VvE_Vrijwilliger</a></li>
                        <li class=\"";
        // line 27
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "subsidie_zonnepalen")) {
            echo " active ";
        }
        echo "\"><a href=\"/subsidie_zonnepalen\">subsidie_zonnepalen</a></li>
                    </ul>
                </li>
                <li class=\"";
        // line 30
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "mijnvve")) {
            echo " active ";
        }
        echo "\"><a href=\"mijnVve\">mijn VvE</a></li>

                </a></li>
                ";
        // line 33
        if (($context["user"] ?? null)) {
            // line 34
            echo "                <li style=\"cursor: pointer\"><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
                ";
        }
        // line 36
        echo "            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  100 => 34,  98 => 33,  90 => 30,  82 => 27,  76 => 26,  70 => 25,  60 => 20,  54 => 19,  48 => 18,  42 => 17,  36 => 16,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header \">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Rijnab</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"{% if this.page.id == 'homepage' %} active {% endif %}\"><a href=\"/\">Home</a></li>
                <li class=\"{% if this.page.id == 'over_ons' %} active {% endif %}\"><a href='over_ons'> Over ons</a></li>
                <li class=\"{% if this.page.id == 'onze_diensten' %} active {% endif %}\"> <a href=\"onze_diensten\">Onze diensten</a></li>
                <li class=\"{% if this.page.id == 'contact' %} active {% endif %}\"><a href=\"contact\">Contact</a></li>
                <li class=\"{% if this.page.id == 'handig' %} active {% endif %}\"><a href=\"handig\">Handig</a></li>

                <li class=\"dropdown\">
                    <a href=\"nieuw\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nieuws <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"{% if this.page.id == 'nieuw' %} active {% endif %}\"><a href=\"nieuw\">Nieuws</a></li>
                        <li class=\"{% if this.page.id == 'vve_vrijwilliger' %} active {% endif %}\"><a href=\"/VvE_Vrijwilliger\">VvE_Vrijwilliger</a></li>
                        <li class=\"{% if this.page.id == 'subsidie_zonnepalen' %} active {% endif %}\"><a href=\"/subsidie_zonnepalen\">subsidie_zonnepalen</a></li>
                    </ul>
                </li>
                <li class=\"{% if this.page.id == 'mijnvve' %} active {% endif %}\"><a href=\"mijnVve\">mijn VvE</a></li>

                </a></li>
                {% if user %}
                <li style=\"cursor: pointer\"><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
                {% endif %}
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>", "/Users/ahmadhaleem/Documents/myProjects/oc/themes/rijnab/partials/header.htm", "");
    }
}
