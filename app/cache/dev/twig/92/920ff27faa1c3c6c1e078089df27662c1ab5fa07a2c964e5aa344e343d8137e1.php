<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_eedad3f9ace619789f4f95a7e7544e053588b9ecbc798dbc9a1f192abd1473d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_51057581a7f523063ebdab5d0e3431a4c44254c8d9efb54215bdb4f9cd2b2c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51057581a7f523063ebdab5d0e3431a4c44254c8d9efb54215bdb4f9cd2b2c49->enter($__internal_51057581a7f523063ebdab5d0e3431a4c44254c8d9efb54215bdb4f9cd2b2c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51057581a7f523063ebdab5d0e3431a4c44254c8d9efb54215bdb4f9cd2b2c49->leave($__internal_51057581a7f523063ebdab5d0e3431a4c44254c8d9efb54215bdb4f9cd2b2c49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42f9f98b3ff1c57da95dce6f9780d981e2c531fe250786ca0ef2ceae4be3c5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f9f98b3ff1c57da95dce6f9780d981e2c531fe250786ca0ef2ceae4be3c5c1->enter($__internal_42f9f98b3ff1c57da95dce6f9780d981e2c531fe250786ca0ef2ceae4be3c5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_42f9f98b3ff1c57da95dce6f9780d981e2c531fe250786ca0ef2ceae4be3c5c1->leave($__internal_42f9f98b3ff1c57da95dce6f9780d981e2c531fe250786ca0ef2ceae4be3c5c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/ewa/Workspace/AddressBook/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
