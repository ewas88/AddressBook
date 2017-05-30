<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_93179e0dd47a0ed698be6970d06a021aeb457593d957e85b1fb5abc584bbef33 extends Twig_Template
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
        $__internal_7700c7a9bb795a5fc1514765922f8f0a6fe77b8c425360342e846fea0b548257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7700c7a9bb795a5fc1514765922f8f0a6fe77b8c425360342e846fea0b548257->enter($__internal_7700c7a9bb795a5fc1514765922f8f0a6fe77b8c425360342e846fea0b548257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7700c7a9bb795a5fc1514765922f8f0a6fe77b8c425360342e846fea0b548257->leave($__internal_7700c7a9bb795a5fc1514765922f8f0a6fe77b8c425360342e846fea0b548257_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fecf692ca1e9fce89f1d88f55a8c2d8cb55ad9efc7dbcce684edc9d602114bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fecf692ca1e9fce89f1d88f55a8c2d8cb55ad9efc7dbcce684edc9d602114bc1->enter($__internal_fecf692ca1e9fce89f1d88f55a8c2d8cb55ad9efc7dbcce684edc9d602114bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_fecf692ca1e9fce89f1d88f55a8c2d8cb55ad9efc7dbcce684edc9d602114bc1->leave($__internal_fecf692ca1e9fce89f1d88f55a8c2d8cb55ad9efc7dbcce684edc9d602114bc1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_35b195997ef3d3dfa391649b71b1bbf4cc6284e69261512c1007b1ed23537409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b195997ef3d3dfa391649b71b1bbf4cc6284e69261512c1007b1ed23537409->enter($__internal_35b195997ef3d3dfa391649b71b1bbf4cc6284e69261512c1007b1ed23537409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_35b195997ef3d3dfa391649b71b1bbf4cc6284e69261512c1007b1ed23537409->leave($__internal_35b195997ef3d3dfa391649b71b1bbf4cc6284e69261512c1007b1ed23537409_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d5a91a702b9fc1e94868cd1aec47b3344f9426c554e73bf5c864d9b77e640526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a91a702b9fc1e94868cd1aec47b3344f9426c554e73bf5c864d9b77e640526->enter($__internal_d5a91a702b9fc1e94868cd1aec47b3344f9426c554e73bf5c864d9b77e640526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d5a91a702b9fc1e94868cd1aec47b3344f9426c554e73bf5c864d9b77e640526->leave($__internal_d5a91a702b9fc1e94868cd1aec47b3344f9426c554e73bf5c864d9b77e640526_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/ewa/Workspace/AddressBook/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
