<?php

/* ::base.html.twig */
class __TwigTemplate_db0fc4de18818c5aae3dfa6c9f7e6b989e20a6d2d8007ba6f1d5007d8e31c950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_175258fb39f5c403ca856fdea76ef5fd172b57f668e5e20a39351b80fac6dad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175258fb39f5c403ca856fdea76ef5fd172b57f668e5e20a39351b80fac6dad7->enter($__internal_175258fb39f5c403ca856fdea76ef5fd172b57f668e5e20a39351b80fac6dad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway\">

</head>
<div class=\"w3-container w3-teal w3-center\">
    <h1>ADDRESS BOOK</h1>
</div>
<body class=\"w3-container pattern ex1\">
";
        // line 48
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 49
            $this->displayBlock('body', $context, $blocks);
            // line 50
            $this->displayBlock('javascripts', $context, $blocks);
        } else {
            // line 52
            echo "    <div class=\"w3-display-middle\">
<a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" style=\"font-size:20px\"
   class=\"w3-button w3-black w3-padding-32\">Log in</a>
<a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" style=\"font-size:20px\"
   class=\"w3-button w3-black w3-padding-32\">Sign in</a>
    </div>
";
        }
        // line 59
        echo "</body>

</html>";
        
        $__internal_175258fb39f5c403ca856fdea76ef5fd172b57f668e5e20a39351b80fac6dad7->leave($__internal_175258fb39f5c403ca856fdea76ef5fd172b57f668e5e20a39351b80fac6dad7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_29a8ffada2545d203da0398152016502189c256bfbcf673f1d6701b409d3d4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a8ffada2545d203da0398152016502189c256bfbcf673f1d6701b409d3d4bd->enter($__internal_29a8ffada2545d203da0398152016502189c256bfbcf673f1d6701b409d3d4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_29a8ffada2545d203da0398152016502189c256bfbcf673f1d6701b409d3d4bd->leave($__internal_29a8ffada2545d203da0398152016502189c256bfbcf673f1d6701b409d3d4bd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_882a2b9363ca92258c81ff4340881e0cf0e1b3fad5905a223bb27485f18c94db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882a2b9363ca92258c81ff4340881e0cf0e1b3fad5905a223bb27485f18c94db->enter($__internal_882a2b9363ca92258c81ff4340881e0cf0e1b3fad5905a223bb27485f18c94db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <style>
            body, div, p, a {
                font-family: \"Raleway\", sans-serif
            }

            .ex1 {
                margin: 1cm 8cm 0cm 8cm;
            }

            .ex2 {
                margin: 3cm 8cm 0cm 8cm;
            }

            .ex3 {
                margin: 4cm auto auto 11cm;
            }

            .ex4 {
                margin: 1cm 3cm 0cm auto;
            }

            .pattern {
                background-image: url(\"https://www.toptal.com/designers/subtlepatterns/patterns/swirl_pattern.png\");
                background-repeat: repeat;
            }

            .ex5 {
                margin: 4cm 3cm 0cm auto;
            }

        </style>
    ";
        
        $__internal_882a2b9363ca92258c81ff4340881e0cf0e1b3fad5905a223bb27485f18c94db->leave($__internal_882a2b9363ca92258c81ff4340881e0cf0e1b3fad5905a223bb27485f18c94db_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_9574e669f27d771834f3ab7b9aff1a353245ea6efa328487ecdffec25860bd6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9574e669f27d771834f3ab7b9aff1a353245ea6efa328487ecdffec25860bd6d->enter($__internal_9574e669f27d771834f3ab7b9aff1a353245ea6efa328487ecdffec25860bd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9574e669f27d771834f3ab7b9aff1a353245ea6efa328487ecdffec25860bd6d->leave($__internal_9574e669f27d771834f3ab7b9aff1a353245ea6efa328487ecdffec25860bd6d_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6304848917bc1a141d1cf8b354d8df70df5882b593b437e610692c8d3cc42716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6304848917bc1a141d1cf8b354d8df70df5882b593b437e610692c8d3cc42716->enter($__internal_6304848917bc1a141d1cf8b354d8df70df5882b593b437e610692c8d3cc42716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6304848917bc1a141d1cf8b354d8df70df5882b593b437e610692c8d3cc42716->leave($__internal_6304848917bc1a141d1cf8b354d8df70df5882b593b437e610692c8d3cc42716_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 50,  136 => 49,  98 => 7,  92 => 6,  80 => 5,  71 => 59,  64 => 55,  59 => 53,  56 => 52,  53 => 50,  51 => 49,  49 => 48,  38 => 39,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <style>
            body, div, p, a {
                font-family: \"Raleway\", sans-serif
            }

            .ex1 {
                margin: 1cm 8cm 0cm 8cm;
            }

            .ex2 {
                margin: 3cm 8cm 0cm 8cm;
            }

            .ex3 {
                margin: 4cm auto auto 11cm;
            }

            .ex4 {
                margin: 1cm 3cm 0cm auto;
            }

            .pattern {
                background-image: url(\"https://www.toptal.com/designers/subtlepatterns/patterns/swirl_pattern.png\");
                background-repeat: repeat;
            }

            .ex5 {
                margin: 4cm 3cm 0cm auto;
            }

        </style>
    {% endblock %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway\">

</head>
<div class=\"w3-container w3-teal w3-center\">
    <h1>ADDRESS BOOK</h1>
</div>
<body class=\"w3-container pattern ex1\">
{% if is_granted('ROLE_USER') %}
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
{% else %}
    <div class=\"w3-display-middle\">
<a href=\"{{ path('fos_user_security_login')}}\" style=\"font-size:20px\"
   class=\"w3-button w3-black w3-padding-32\">Log in</a>
<a href=\"{{ path('fos_user_registration_register') }}\" style=\"font-size:20px\"
   class=\"w3-button w3-black w3-padding-32\">Sign in</a>
    </div>
{% endif %}
</body>

</html>", "::base.html.twig", "/home/ewa/Workspace/AddressBook/app/Resources/views/base.html.twig");
    }
}
