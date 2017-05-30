<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_5dc91915c415ea7bfde143cd4be59284a9b5afff22b537828e1e308be5d14e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10ab17806b1aa9b0c4566169054145da891ab1d585a009031bedfe041ee0d201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ab17806b1aa9b0c4566169054145da891ab1d585a009031bedfe041ee0d201->enter($__internal_10ab17806b1aa9b0c4566169054145da891ab1d585a009031bedfe041ee0d201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10ab17806b1aa9b0c4566169054145da891ab1d585a009031bedfe041ee0d201->leave($__internal_10ab17806b1aa9b0c4566169054145da891ab1d585a009031bedfe041ee0d201_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3bc78946b55a201077f1be5c470c61e1433cc26cf5de5aa3eb9de15994d50a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3bc78946b55a201077f1be5c470c61e1433cc26cf5de5aa3eb9de15994d50a6->enter($__internal_c3bc78946b55a201077f1be5c470c61e1433cc26cf5de5aa3eb9de15994d50a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c3bc78946b55a201077f1be5c470c61e1433cc26cf5de5aa3eb9de15994d50a6->leave($__internal_c3bc78946b55a201077f1be5c470c61e1433cc26cf5de5aa3eb9de15994d50a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ef569852fae6b44573ebee6619ee9ace5149da9d4a78ac0a8599d4b323ba4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef569852fae6b44573ebee6619ee9ace5149da9d4a78ac0a8599d4b323ba4de->enter($__internal_1ef569852fae6b44573ebee6619ee9ace5149da9d4a78ac0a8599d4b323ba4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_1ef569852fae6b44573ebee6619ee9ace5149da9d4a78ac0a8599d4b323ba4de->leave($__internal_1ef569852fae6b44573ebee6619ee9ace5149da9d4a78ac0a8599d4b323ba4de_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dd588001e289650dc550cd997575895c072cd29f466961d26aa7ca0a8cb4790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd588001e289650dc550cd997575895c072cd29f466961d26aa7ca0a8cb4790->enter($__internal_1dd588001e289650dc550cd997575895c072cd29f466961d26aa7ca0a8cb4790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_1dd588001e289650dc550cd997575895c072cd29f466961d26aa7ca0a8cb4790->leave($__internal_1dd588001e289650dc550cd997575895c072cd29f466961d26aa7ca0a8cb4790_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3cc7cb09ff7c9c0490a98f499e00c018d10270ace7fc05919c2723808a9282d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3cc7cb09ff7c9c0490a98f499e00c018d10270ace7fc05919c2723808a9282d->enter($__internal_e3cc7cb09ff7c9c0490a98f499e00c018d10270ace7fc05919c2723808a9282d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e3cc7cb09ff7c9c0490a98f499e00c018d10270ace7fc05919c2723808a9282d->leave($__internal_e3cc7cb09ff7c9c0490a98f499e00c018d10270ace7fc05919c2723808a9282d_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/ewa/Workspace/AddressBook/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
