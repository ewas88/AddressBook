<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_4fe6a4b583d38e59e014d4dfd657e178d0f135807c5713295963b86d6073af9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_a015c422fd9ad64e7f4ecccd0fe67ead5b64967a443bebf8c509d44548bd4d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a015c422fd9ad64e7f4ecccd0fe67ead5b64967a443bebf8c509d44548bd4d21->enter($__internal_a015c422fd9ad64e7f4ecccd0fe67ead5b64967a443bebf8c509d44548bd4d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a015c422fd9ad64e7f4ecccd0fe67ead5b64967a443bebf8c509d44548bd4d21->leave($__internal_a015c422fd9ad64e7f4ecccd0fe67ead5b64967a443bebf8c509d44548bd4d21_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32bc04921f184efde2d29a68546907a5993613ff08827c6f184811260cee16e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32bc04921f184efde2d29a68546907a5993613ff08827c6f184811260cee16e1->enter($__internal_32bc04921f184efde2d29a68546907a5993613ff08827c6f184811260cee16e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
    <p><a href=\"/login\">Registration confirmed</a></p>

";
        
        $__internal_32bc04921f184efde2d29a68546907a5993613ff08827c6f184811260cee16e1->leave($__internal_32bc04921f184efde2d29a68546907a5993613ff08827c6f184811260cee16e1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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

    <p><a href=\"/login\">Registration confirmed</a></p>

{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/ewa/Workspace/AddressBook/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
