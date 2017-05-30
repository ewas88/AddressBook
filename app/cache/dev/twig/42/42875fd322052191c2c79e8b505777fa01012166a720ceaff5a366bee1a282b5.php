<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_9e642b8ea413e409288b5f54fa371206dd3ee478519ac2c5ad44a35548e958be extends Twig_Template
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
        $__internal_53ef7096734477b8823359e571712b0b329c38d9d4361e631d540e5c31176900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ef7096734477b8823359e571712b0b329c38d9d4361e631d540e5c31176900->enter($__internal_53ef7096734477b8823359e571712b0b329c38d9d4361e631d540e5c31176900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ef7096734477b8823359e571712b0b329c38d9d4361e631d540e5c31176900->leave($__internal_53ef7096734477b8823359e571712b0b329c38d9d4361e631d540e5c31176900_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da8cdfb1ecf49e352cd1ac0e7835d94084c3333f80a4df2b4d0cf09482c2b798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8cdfb1ecf49e352cd1ac0e7835d94084c3333f80a4df2b4d0cf09482c2b798->enter($__internal_da8cdfb1ecf49e352cd1ac0e7835d94084c3333f80a4df2b4d0cf09482c2b798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_da8cdfb1ecf49e352cd1ac0e7835d94084c3333f80a4df2b4d0cf09482c2b798->leave($__internal_da8cdfb1ecf49e352cd1ac0e7835d94084c3333f80a4df2b4d0cf09482c2b798_prof);

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
", "@FOSUser/Security/login.html.twig", "/home/ewa/Workspace/AddressBook/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
