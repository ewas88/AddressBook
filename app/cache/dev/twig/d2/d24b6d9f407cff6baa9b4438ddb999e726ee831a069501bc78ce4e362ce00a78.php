<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_50ffd2a430c8d5c02c15c9153f222893080adeeaea38c15f8b9745fc2064dab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a139a81e0fad4643098d754cffce186bb95f15284460acb923a3c14e8eda45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a139a81e0fad4643098d754cffce186bb95f15284460acb923a3c14e8eda45c->enter($__internal_0a139a81e0fad4643098d754cffce186bb95f15284460acb923a3c14e8eda45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a139a81e0fad4643098d754cffce186bb95f15284460acb923a3c14e8eda45c->leave($__internal_0a139a81e0fad4643098d754cffce186bb95f15284460acb923a3c14e8eda45c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b67f72e914dc3c4c46a45892648b7f84417e4f9ca77766e6a06bdc96e1811def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67f72e914dc3c4c46a45892648b7f84417e4f9ca77766e6a06bdc96e1811def->enter($__internal_b67f72e914dc3c4c46a45892648b7f84417e4f9ca77766e6a06bdc96e1811def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_b67f72e914dc3c4c46a45892648b7f84417e4f9ca77766e6a06bdc96e1811def->leave($__internal_b67f72e914dc3c4c46a45892648b7f84417e4f9ca77766e6a06bdc96e1811def_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/ewa/Workspace/AddressBook/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
