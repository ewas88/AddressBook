<?php

/* ::base.html.twig */
class __TwigTemplate_45346771fa076a92a6afb0857fb17c51d53a6d02104191997a63437a1b2422cf extends Twig_Template
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
        $__internal_baee95904a40ccd59f73e381000d06fa6afa777872aecc710e51cee3ff31cc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baee95904a40ccd59f73e381000d06fa6afa777872aecc710e51cee3ff31cc45->enter($__internal_baee95904a40ccd59f73e381000d06fa6afa777872aecc710e51cee3ff31cc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 35
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway\">

</head>
<div class=\"w3-container w3-teal w3-center\">
    <h1>ADDRESS BOOK</h1>
</div>
<body class=\"w3-container pattern ex1\">

";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "</body>

</html>
";
        
        $__internal_baee95904a40ccd59f73e381000d06fa6afa777872aecc710e51cee3ff31cc45->leave($__internal_baee95904a40ccd59f73e381000d06fa6afa777872aecc710e51cee3ff31cc45_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fadda93676b911f04fdeb611dbe28123d27243b9c6e298248d1d1e55a7e5244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fadda93676b911f04fdeb611dbe28123d27243b9c6e298248d1d1e55a7e5244->enter($__internal_7fadda93676b911f04fdeb611dbe28123d27243b9c6e298248d1d1e55a7e5244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7fadda93676b911f04fdeb611dbe28123d27243b9c6e298248d1d1e55a7e5244->leave($__internal_7fadda93676b911f04fdeb611dbe28123d27243b9c6e298248d1d1e55a7e5244_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e81db84e1ed5dd76c3bdd127633bd94007fa4c331cdac91c0146955171e79591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81db84e1ed5dd76c3bdd127633bd94007fa4c331cdac91c0146955171e79591->enter($__internal_e81db84e1ed5dd76c3bdd127633bd94007fa4c331cdac91c0146955171e79591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

        </style>
    ";
        
        $__internal_e81db84e1ed5dd76c3bdd127633bd94007fa4c331cdac91c0146955171e79591->leave($__internal_e81db84e1ed5dd76c3bdd127633bd94007fa4c331cdac91c0146955171e79591_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9c0a693ff5127275c834f100f1f727f4edf2100a6e15bcc2b6608a6d47d2cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c0a693ff5127275c834f100f1f727f4edf2100a6e15bcc2b6608a6d47d2cbb->enter($__internal_d9c0a693ff5127275c834f100f1f727f4edf2100a6e15bcc2b6608a6d47d2cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d9c0a693ff5127275c834f100f1f727f4edf2100a6e15bcc2b6608a6d47d2cbb->leave($__internal_d9c0a693ff5127275c834f100f1f727f4edf2100a6e15bcc2b6608a6d47d2cbb_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2544e2f0a4bc0290bee58602d08b28025123e586e937f51465244d6fcb0cc2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2544e2f0a4bc0290bee58602d08b28025123e586e937f51465244d6fcb0cc2ce->enter($__internal_2544e2f0a4bc0290bee58602d08b28025123e586e937f51465244d6fcb0cc2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2544e2f0a4bc0290bee58602d08b28025123e586e937f51465244d6fcb0cc2ce->leave($__internal_2544e2f0a4bc0290bee58602d08b28025123e586e937f51465244d6fcb0cc2ce_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  116 => 45,  82 => 7,  76 => 6,  64 => 5,  54 => 47,  52 => 46,  50 => 45,  38 => 35,  36 => 6,  32 => 5,  26 => 1,);
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

{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>

</html>
", "::base.html.twig", "/home/ewa/Workspace/AddressBook/app/Resources/views/base.html.twig");
    }
}
