<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_848c339283ad806b93d898fa01b76304c79f6a46a2f0d175be9183701d077c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_324a24cd661c05ea5078e02cc58a7a856ec98168083110e29362f16633da513b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324a24cd661c05ea5078e02cc58a7a856ec98168083110e29362f16633da513b->enter($__internal_324a24cd661c05ea5078e02cc58a7a856ec98168083110e29362f16633da513b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_324a24cd661c05ea5078e02cc58a7a856ec98168083110e29362f16633da513b->leave($__internal_324a24cd661c05ea5078e02cc58a7a856ec98168083110e29362f16633da513b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ef4d172db43f083ca2d24c3764ebc81a097ef60c37e9f9c2d90a21082ba0fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef4d172db43f083ca2d24c3764ebc81a097ef60c37e9f9c2d90a21082ba0fa5->enter($__internal_6ef4d172db43f083ca2d24c3764ebc81a097ef60c37e9f9c2d90a21082ba0fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6ef4d172db43f083ca2d24c3764ebc81a097ef60c37e9f9c2d90a21082ba0fa5->leave($__internal_6ef4d172db43f083ca2d24c3764ebc81a097ef60c37e9f9c2d90a21082ba0fa5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/ewa/Workspace/AddressBook/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
