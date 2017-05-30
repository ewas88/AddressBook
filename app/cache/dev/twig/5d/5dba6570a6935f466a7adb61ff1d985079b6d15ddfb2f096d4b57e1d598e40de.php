<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_1066e60803391c9c3eccfac5db9cf9eff21ea43d97adbf1e006fecb25cafe1a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_3d5230ead235c191e83d3345066017aca7719f7b1e5c8130c47781c97086e06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5230ead235c191e83d3345066017aca7719f7b1e5c8130c47781c97086e06e->enter($__internal_3d5230ead235c191e83d3345066017aca7719f7b1e5c8130c47781c97086e06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d5230ead235c191e83d3345066017aca7719f7b1e5c8130c47781c97086e06e->leave($__internal_3d5230ead235c191e83d3345066017aca7719f7b1e5c8130c47781c97086e06e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7228097aa2e6b7fef5bcfd69eedd4031bdd24ef31f954658dccc04c51e53c9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7228097aa2e6b7fef5bcfd69eedd4031bdd24ef31f954658dccc04c51e53c9c2->enter($__internal_7228097aa2e6b7fef5bcfd69eedd4031bdd24ef31f954658dccc04c51e53c9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7228097aa2e6b7fef5bcfd69eedd4031bdd24ef31f954658dccc04c51e53c9c2->leave($__internal_7228097aa2e6b7fef5bcfd69eedd4031bdd24ef31f954658dccc04c51e53c9c2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/ewa/Workspace/AddressBook/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
