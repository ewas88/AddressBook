<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5281f2f29e6a3f797349aca7f7cfb313869e9b4f80ed6ec892aae65252b70a33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8cce2b7163693d4e89c1cbc884ea6774da1a01d08f9c8e7d123cd630395600c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cce2b7163693d4e89c1cbc884ea6774da1a01d08f9c8e7d123cd630395600c0->enter($__internal_8cce2b7163693d4e89c1cbc884ea6774da1a01d08f9c8e7d123cd630395600c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cce2b7163693d4e89c1cbc884ea6774da1a01d08f9c8e7d123cd630395600c0->leave($__internal_8cce2b7163693d4e89c1cbc884ea6774da1a01d08f9c8e7d123cd630395600c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db5ace03d00c114fc7c2c42416c7e36986069ff47530ab3b4d2c4185b642b259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5ace03d00c114fc7c2c42416c7e36986069ff47530ab3b4d2c4185b642b259->enter($__internal_db5ace03d00c114fc7c2c42416c7e36986069ff47530ab3b4d2c4185b642b259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_db5ace03d00c114fc7c2c42416c7e36986069ff47530ab3b4d2c4185b642b259->leave($__internal_db5ace03d00c114fc7c2c42416c7e36986069ff47530ab3b4d2c4185b642b259_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/ewa/Workspace/AddressBook/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
