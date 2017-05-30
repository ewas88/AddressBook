<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_63f5977a8c0669e5325ba4daafa6fa9e93ae40dc89f5d0e9d66ef696310e4756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_338cd41d0482eadbd8f5ee3bf3545eb3d7df4b45b891818a8e096314e7081125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338cd41d0482eadbd8f5ee3bf3545eb3d7df4b45b891818a8e096314e7081125->enter($__internal_338cd41d0482eadbd8f5ee3bf3545eb3d7df4b45b891818a8e096314e7081125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_338cd41d0482eadbd8f5ee3bf3545eb3d7df4b45b891818a8e096314e7081125->leave($__internal_338cd41d0482eadbd8f5ee3bf3545eb3d7df4b45b891818a8e096314e7081125_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4de9314593af6ff9c3ca47e72d28a144ca0c8e33b36df962c0d2b2b15a6b5d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de9314593af6ff9c3ca47e72d28a144ca0c8e33b36df962c0d2b2b15a6b5d60->enter($__internal_4de9314593af6ff9c3ca47e72d28a144ca0c8e33b36df962c0d2b2b15a6b5d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4de9314593af6ff9c3ca47e72d28a144ca0c8e33b36df962c0d2b2b15a6b5d60->leave($__internal_4de9314593af6ff9c3ca47e72d28a144ca0c8e33b36df962c0d2b2b15a6b5d60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2dcc52983d1c254f70fa5e5add63a5da0ef23f8bdff7a2e7e1479dad4bab308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2dcc52983d1c254f70fa5e5add63a5da0ef23f8bdff7a2e7e1479dad4bab308->enter($__internal_a2dcc52983d1c254f70fa5e5add63a5da0ef23f8bdff7a2e7e1479dad4bab308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2dcc52983d1c254f70fa5e5add63a5da0ef23f8bdff7a2e7e1479dad4bab308->leave($__internal_a2dcc52983d1c254f70fa5e5add63a5da0ef23f8bdff7a2e7e1479dad4bab308_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_09e5a31ebddfb73e1c9e3ec7da3c49e4029f844a067c9382548f3fe4c06c3583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e5a31ebddfb73e1c9e3ec7da3c49e4029f844a067c9382548f3fe4c06c3583->enter($__internal_09e5a31ebddfb73e1c9e3ec7da3c49e4029f844a067c9382548f3fe4c06c3583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_09e5a31ebddfb73e1c9e3ec7da3c49e4029f844a067c9382548f3fe4c06c3583->leave($__internal_09e5a31ebddfb73e1c9e3ec7da3c49e4029f844a067c9382548f3fe4c06c3583_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
