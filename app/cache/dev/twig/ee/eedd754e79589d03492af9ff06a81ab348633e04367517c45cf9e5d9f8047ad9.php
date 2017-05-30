<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3e921cbbd696bd6e8815c00cca0afb3f21233ecee02130120badb787d63463fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b3d47a7073be491c0933b335e4501a75107fccc1d6065bc3b07d4785a2a80db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3d47a7073be491c0933b335e4501a75107fccc1d6065bc3b07d4785a2a80db->enter($__internal_3b3d47a7073be491c0933b335e4501a75107fccc1d6065bc3b07d4785a2a80db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3b3d47a7073be491c0933b335e4501a75107fccc1d6065bc3b07d4785a2a80db->leave($__internal_3b3d47a7073be491c0933b335e4501a75107fccc1d6065bc3b07d4785a2a80db_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4b336e3831680dcbf1042a97d02af982667be3b65c5305296ad8c763775cc41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b336e3831680dcbf1042a97d02af982667be3b65c5305296ad8c763775cc41a->enter($__internal_4b336e3831680dcbf1042a97d02af982667be3b65c5305296ad8c763775cc41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4b336e3831680dcbf1042a97d02af982667be3b65c5305296ad8c763775cc41a->leave($__internal_4b336e3831680dcbf1042a97d02af982667be3b65c5305296ad8c763775cc41a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e4e60f52a08041e910d83740b1695291bed51e51fb737135315d1414fdfebaa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e60f52a08041e910d83740b1695291bed51e51fb737135315d1414fdfebaa8->enter($__internal_e4e60f52a08041e910d83740b1695291bed51e51fb737135315d1414fdfebaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e4e60f52a08041e910d83740b1695291bed51e51fb737135315d1414fdfebaa8->leave($__internal_e4e60f52a08041e910d83740b1695291bed51e51fb737135315d1414fdfebaa8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_da4c432a5a50f4e858663663578fc494a3ce5b102e1c6deb65a4c255933975ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4c432a5a50f4e858663663578fc494a3ce5b102e1c6deb65a4c255933975ca->enter($__internal_da4c432a5a50f4e858663663578fc494a3ce5b102e1c6deb65a4c255933975ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_da4c432a5a50f4e858663663578fc494a3ce5b102e1c6deb65a4c255933975ca->leave($__internal_da4c432a5a50f4e858663663578fc494a3ce5b102e1c6deb65a4c255933975ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/ewa/Workspace/AddressBook/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
