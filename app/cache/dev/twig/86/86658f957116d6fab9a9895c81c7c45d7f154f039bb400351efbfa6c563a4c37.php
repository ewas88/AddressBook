<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_320bd55e16137eaba94198fb1bf3b31dc5ac9878b5ff797e5872ef8fea7fc2a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_5286595f9edf7498f80b1f41bcf90ae4e4d2e7892e6b62aac145fb0528e2f87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5286595f9edf7498f80b1f41bcf90ae4e4d2e7892e6b62aac145fb0528e2f87f->enter($__internal_5286595f9edf7498f80b1f41bcf90ae4e4d2e7892e6b62aac145fb0528e2f87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5286595f9edf7498f80b1f41bcf90ae4e4d2e7892e6b62aac145fb0528e2f87f->leave($__internal_5286595f9edf7498f80b1f41bcf90ae4e4d2e7892e6b62aac145fb0528e2f87f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1a6417a3981c155515a78106a5d292fc49ce468593cd0dbb7e5b0939aeff374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a6417a3981c155515a78106a5d292fc49ce468593cd0dbb7e5b0939aeff374->enter($__internal_f1a6417a3981c155515a78106a5d292fc49ce468593cd0dbb7e5b0939aeff374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f1a6417a3981c155515a78106a5d292fc49ce468593cd0dbb7e5b0939aeff374->leave($__internal_f1a6417a3981c155515a78106a5d292fc49ce468593cd0dbb7e5b0939aeff374_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/home/ewa/Workspace/AddressBook/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
