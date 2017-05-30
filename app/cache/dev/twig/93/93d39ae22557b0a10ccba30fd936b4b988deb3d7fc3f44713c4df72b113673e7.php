<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ee30491aa01f16e2e509300073207976cfe1e295335bcc32e0a993b2d71c47c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3ded28a486dbad255991be09fd88d2c08a9c761a51d13ebaf4886b968a090c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ded28a486dbad255991be09fd88d2c08a9c761a51d13ebaf4886b968a090c5e->enter($__internal_3ded28a486dbad255991be09fd88d2c08a9c761a51d13ebaf4886b968a090c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ded28a486dbad255991be09fd88d2c08a9c761a51d13ebaf4886b968a090c5e->leave($__internal_3ded28a486dbad255991be09fd88d2c08a9c761a51d13ebaf4886b968a090c5e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19e2cbf88019decb4466f5fe9a4d8ade67a81138631af1e9d8ace55c0595168c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e2cbf88019decb4466f5fe9a4d8ade67a81138631af1e9d8ace55c0595168c->enter($__internal_19e2cbf88019decb4466f5fe9a4d8ade67a81138631af1e9d8ace55c0595168c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_19e2cbf88019decb4466f5fe9a4d8ade67a81138631af1e9d8ace55c0595168c->leave($__internal_19e2cbf88019decb4466f5fe9a4d8ade67a81138631af1e9d8ace55c0595168c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/ewa/Workspace/AddressBook/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
