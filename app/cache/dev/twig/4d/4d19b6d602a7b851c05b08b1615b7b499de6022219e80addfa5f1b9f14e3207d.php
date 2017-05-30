<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_470473874c0e6a902b0469cd99bc8410b8b6c3045eac461148709f6628d2e9f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_0a65aeb24f16ab816618d6105687f8a4a5884ecb4ff9519566a26a5f23272c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a65aeb24f16ab816618d6105687f8a4a5884ecb4ff9519566a26a5f23272c08->enter($__internal_0a65aeb24f16ab816618d6105687f8a4a5884ecb4ff9519566a26a5f23272c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a65aeb24f16ab816618d6105687f8a4a5884ecb4ff9519566a26a5f23272c08->leave($__internal_0a65aeb24f16ab816618d6105687f8a4a5884ecb4ff9519566a26a5f23272c08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c1ded22cf9477a018fe765e4c4098ba9f7046c40ceec88cc171b398220f10f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1ded22cf9477a018fe765e4c4098ba9f7046c40ceec88cc171b398220f10f2->enter($__internal_4c1ded22cf9477a018fe765e4c4098ba9f7046c40ceec88cc171b398220f10f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4c1ded22cf9477a018fe765e4c4098ba9f7046c40ceec88cc171b398220f10f2->leave($__internal_4c1ded22cf9477a018fe765e4c4098ba9f7046c40ceec88cc171b398220f10f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/ewa/Workspace/AddressBook/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
